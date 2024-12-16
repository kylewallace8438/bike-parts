<?php

namespace App\Models\Crawl;

use Illuminate\Database\Eloquent\Model;

use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Log;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;
use Spatie\Crawler\CrawlObservers\CrawlObserver;
use Symfony\Component\DomCrawler\Crawler;

class KTMPartScrape extends CrawlObserver
{
    private $content;
    public function __construct()
    {
        $this->content = null;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        return $this->content = $content;
    }

    /**
     * Undocumented function
     *
     * @param UriInterface $url
     * @param string|null $linkText
     * @return void
     */
    public function willCrawl(UriInterface $url, ?string $linkText): void
    {
        Log::info('willCrawl', ['url' => $url]);
    }

    /**
     * Undocumented function
     *
     * @param UriInterface $url
     * @param ResponseInterface $response
     * @param UriInterface|null $foundOnUrl
     * @param string|null $linkText
     * @return void
     */
    public function crawled(
        UriInterface $url,
        ResponseInterface $response,
        ?UriInterface $foundOnUrl = null,
        ?string $linkText = null,
    ): void {
        $crawler = new Crawler((string) $response->getBody());
        $parts = $crawler->filter('div.card_parts_table')->first()->filter('tbody')->first();
        $partData = collect($parts->filter('tr')->each(
            function (Crawler $tr, $i) {
                $data = [
                    'number' => $tr->filter('td')->eq(0)->text(),
                    'part' => $tr->filter('td')->eq(1)->filter('.JS_ref_link')->first()->text(),
                    'description' => $tr->filter('td')->eq(2)->text()
                ];
                return $data;
            }
        ))->filter()->values();
        $this->setContent($partData->toArray());
    }

    /**
     * Undocumented function
     *
     * @param UriInterface $url
     * @param RequestException $requestException
     * @param UriInterface|null $foundOnUrl
     * @param string|null $linkText
     * @return void
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
     *
     * @return void
     */
    public function finishedCrawling(): void
    {
        Log::info("Finished crawling");
    }
}
