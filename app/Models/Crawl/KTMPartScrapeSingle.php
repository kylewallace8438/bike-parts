<?php

namespace App\Models\Crawl;

use Exception;
use Illuminate\Database\Eloquent\Model;

use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Log;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;
use Spatie\Crawler\CrawlObservers\CrawlObserver;
use Symfony\Component\DomCrawler\Crawler;

class KTMPartScrapeSingle extends CrawlObserver
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
        $parts = $crawler->filter('div.card_parts_table')->first()->filter('div.card-body')->first();
        $partData = collect($parts->filter('div.d-flex.flex-row.flex-wrap')->each(
            function (Crawler $div, $i) {
                $data = [];
                try {
                    $data = [
                        'number' => $div->filter('span.ref-libelle')->first()->text(),
                        'name' => $div->filter('div.text-start.col-10.col-md-8.p-2')->first()->filter('div.row.align-items-center')->first()->filter('span.fw-600')->first()->text(),
                        'part' => $div->filter('div.text-start.col-10.col-md-8.p-2')->first()->filter('div.row.align-items-center')->first()->filter('a')->first()->text(),
                        'price' => $div->filter('div.text-start.col-10.col-md-8.p-2')->first()->filter('div.buy-section-etape7')->filter('div.prix-etape7')->first()->filter('label.fw-bold')->first()->filter('span.text-nowrap')->text(),
                    ];

                } catch (Exception $e) {
                    Log::error($e);
                } finally {
                    return $data;
                }
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
