<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Supported locales in your application
     */
    protected $supportedLocales = ['en', 'vi'];

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if locale is already set in session
        if (!session()->has('locale')) {
            // This is the first request - detect language
            $detectedLocale = $this->detectLocale($request);
            session(['locale' => $detectedLocale]);
            app()->setLocale($detectedLocale);
        } else {
            // Use stored locale from session
            $locale = session('locale', config('app.locale'));
            if (in_array($locale, $this->supportedLocales)) {
                app()->setLocale($locale);
            }
        }
        
        return $next($request);
    }

    /**
     * Detect the user's preferred locale from the request
     *
     * @param Request $request
     * @return string
     */
    protected function detectLocale(Request $request): string
    {
        // 1. Check URL parameter (highest priority - manual override)
        if ($request->has('locale') && in_array($request->get('locale'), $this->supportedLocales)) {
            return $request->get('locale');
        }

        // 2. Check Accept-Language header from browser
        $acceptLanguage = $request->header('Accept-Language');
        if ($acceptLanguage) {
            $preferredLocale = $this->parseAcceptLanguage($acceptLanguage);
            if ($preferredLocale) {
                return $preferredLocale;
            }
        }

        // 3. Fallback to default locale from config
        return config('app.locale', 'en');
    }

    /**
     * Parse Accept-Language header and return best matching locale
     *
     * @param string $acceptLanguage
     * @return string|null
     */
    protected function parseAcceptLanguage(string $acceptLanguage): ?string
    {
        // Parse Accept-Language header format: en-US,en;q=0.9,vi;q=0.8
        $languages = explode(',', $acceptLanguage);
        
        foreach ($languages as $language) {
            // Extract language code (before ; or -)
            $langCode = trim(strtok($language, ';-'));
            
            // Check if we support this language
            if (in_array($langCode, $this->supportedLocales)) {
                return $langCode;
            }
        }
        
        return null;
    }
}
