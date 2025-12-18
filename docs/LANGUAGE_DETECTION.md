# Language Detection

## How It Works

The `SetLocale` middleware automatically detects the user's preferred language on their **first request** to the application.

### Detection Priority (in order)

1. **URL Parameter** (`?locale=vi`)
   - Highest priority
   - Allows manual override
   - Example: `https://yoursite.com/?locale=vi`

2. **Accept-Language Header**
   - Sent automatically by the user's browser
   - Example: `Accept-Language: vi,en-US;q=0.9,en;q=0.8`
   - The middleware parses this and selects the best matching language

3. **Default Locale**
   - Falls back to `config('app.locale')` (usually 'en')
   - Used if no language can be detected

## Testing Language Detection

### Test with cURL

```bash
# Test Vietnamese detection
curl -H "Accept-Language: vi" http://localhost:8000

# Test English detection
curl -H "Accept-Language: en-US,en;q=0.9" http://localhost:8000

# Test with URL parameter
curl http://localhost:8000/?locale=vi
```

### Test in Browser

1. **Chrome/Edge:**
   - Settings → Languages → Add preferred languages
   - Move Vietnamese to the top to test Vietnamese detection

2. **Firefox:**
   - Settings → Language → Choose your preferred language

3. **Manual Override:**
   - Add `?locale=vi` to any URL
   - Or use your existing language switcher

## How It Stores the Preference

Once detected, the language preference is stored in the **session** and persists across all subsequent requests until:
- The user changes it manually via your `changeLanguage` endpoint
- The session expires
- The user clears their cookies

## Changing Language After First Visit

Users can still change language using your existing endpoint:

```php
// In HomeController.php
public function changeLanguage(Request $request)
{
    $locale = $request->get('locale');
    if (in_array($locale, ['en', 'vi'])) {
        app()->setLocale($locale);
        session(['locale' => $locale]);
    }
    return redirect()->back();
}
```

## Supported Languages

Currently configured: `en` (English), `vi` (Vietnamese)

To add more languages, update the `$supportedLocales` array in `SetLocale` middleware.

## Advanced: IP Geolocation (Optional)

If you want to detect language based on the user's country/IP address, you can add a geolocation service:

```php
// In SetLocale middleware's detectLocale method
// Add after URL parameter check:

// Check IP geolocation
$country = $this->getCountryFromIp($request->ip());
if ($country === 'VN') {
    return 'vi';
}
```

Popular services:
- ipapi.co (free tier available)
- MaxMind GeoIP2
- ipstack.com

## Debugging

To see what language was detected, add logging to the middleware:

```php
protected function detectLocale(Request $request): string
{
    $locale = // ... detection logic
    
    \Log::info('Language detected', [
        'locale' => $locale,
        'accept_language' => $request->header('Accept-Language'),
        'ip' => $request->ip(),
        'is_first_visit' => !session()->has('locale')
    ]);
    
    return $locale;
}
```
