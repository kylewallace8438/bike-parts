<?php

namespace App\Models\Crawl;

use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Collection;
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

    public function getContent(): array|null
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
        $parts = $crawler->filter('div.card-body')->first()->filter('.row')->first();
        $partData = collect($parts->filter('div.col')->each(
            function (Crawler $div, $i) {
                $data = [
                    'name' => $div->filter('.fw-bold')->text(),
                    'url' => $div->filter('a')->first()->attr('href'),
                    'img' => $div->filter('img#img_microfiche_img')->first()->attr('src')
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
