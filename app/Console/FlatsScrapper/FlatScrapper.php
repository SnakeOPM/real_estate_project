<?php

namespace App\Console\FlatsScrapper;

use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\DomCrawler\Crawler;

class FlatScrapper
{
    private HttpBrowser $client;
    private Crawler $crawler;
    private array $names;
    private array $descriptions;
    private array $prices;
    
    public function __construct()
    {
        $this->client = new HttpBrowser();
        $this->crawler = $this->client->request('GET', 'https://www.farpost.ru/vladivostok/realty/rent_flats/');
        $this->crawler->filter('.bull-item__self-link')
            ->each(function ($name) {
                $this->names[] = $name->text();
            });
        $this->crawler->filter('.bull-item__annotation-row')
            ->each(function ($node) {
                $this->descriptions[] = $node->text();
            });
        $this->crawler->filter('.price-block__price')
            ->each(function ($node) {
                $this->prices[] = $node->text();
            });
    }

    public function get_name(): string
    {
        preg_match('/^[^,]*/', $this->names[0], $name);
        return $name[0];
    }

    public function get_address(): string
    {
        preg_match('/(?<=,\s).*/', $this->names[0], $name);
        return $name[0];
    }

    public function get_rooms_count(): int
    {
        $allowed_first_letters = ['Г', 'К', 'C'];
        $first_letter = mb_substr($this->names[0], 0, 1, "UTF-8");
        if (in_array($first_letter, $allowed_first_letters)) {
            return 1;
        }
        return intval($first_letter);
    }

    public function get_price(): int
    {
        preg_match('/[\d+\s]+/', $this->prices[0], $name);
        return intval(str_replace(' ', '', $name[0]));
    }

    public function shift(): void
    {
        array_shift($this->names);
        array_shift($this->descriptions);
        array_shift($this->prices);
    }

    public function is_empty() : bool
    {
        return empty($this->names);
    }
}
