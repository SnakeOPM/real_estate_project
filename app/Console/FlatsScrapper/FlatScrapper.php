<?php

namespace App\Console\FlatsScrapper;

use Symfony\Component\BrowserKit\HttpBrowser;

class FlatScrapper
{
    private $client;
    private $crawler;
    private $names;
    private $descriptions;
    private $prices;

//TODO: Fix prices and rooms count
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

    public function get_name()
    {
        preg_match('/^[^,]*/', $this->names[0], $name);
        return $name[0];
    }

    public function get_address()
    {
        preg_match('/(?<=,\s).*/', $this->names[0], $name);
        return $name[0];
    }

    public function get_rooms_count()
    {
        if ($this->names[0][0] == 'Г' || 'К' || 'C') {
            return 1;
        }
        $name = $this->names[0][0];
        return intval($name[0]);
    }

    public function get_price()
    {
        preg_match('/[\d+\s]+/', $this->prices[0], $name);
        return intval(str_replace(' ', '', $name[0]));
    }

    public function shift()
    {
        array_shift($this->names);
        array_shift($this->descriptions);
        array_shift($this->prices);
    }
}
