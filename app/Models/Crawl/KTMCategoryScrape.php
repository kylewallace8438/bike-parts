<?php

namespace App\Models\Crawl;

use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Log;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;
use Spatie\Crawler\CrawlObservers\CrawlObserver;
use Symfony\Component\DomCrawler\Crawler;

class KTMCategoryScrape extends CrawlObserver
{
    private $content;

    public function __construct()
    {
        $this->content = null;
    }

    public function getContent(): ?array
    {
        return $this->content;
    }

    public function setContent($content)
    {
        return $this->content = $content;
    }

    /**
     * Undocumented function
     */
    public function willCrawl(UriInterface $url, ?string $linkText): void
    {
        Log::info('willCrawl', ['url' => $url]);
    }

    /**
     * Undocumented function
     */
    public function crawled(
        UriInterface $url,
        ResponseInterface $response,
        ?UriInterface $foundOnUrl = null,
        ?string $linkText = null,
    ): void {
        $crawler = new Crawler((string) $response->getBody());
        $parts = $crawler->filter('div.card-body')->first()->filter('.row')->first();
        $partData = collect($parts->filter('div.col')->each(
            function (Crawler $div, $i) {
                $data = [
                    'name' => $div->filter('.fw-bold')->text(),
                    'url' => $div->filter('a')->first()->attr('href'),
                ];

                return $data;
            }
        ))->filter()->values();
        $this->setContent($partData->toArray());
    }

    /**
     * Undocumented function
     */
    public function crawlFailed(
        UriInterface $url,
        RequestException $requestException,
        ?UriInterface $foundOnUrl = null,
        ?string $linkText = null,
    ): void {
        Log::error("Failed: {$url}");
    }

    /**
     * Undocumented function
     */
    public function finishedCrawling(): void
    {
        Log::info('Finished crawling');
    }
}
