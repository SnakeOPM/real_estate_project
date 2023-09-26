<?php

namespace App\Console\FlatsScrapper;

use Symfony\Component\BrowserKit\HttpBrowser;

class FlatScrapper
{
    private $client;
    private $crawler;
    private $names;
    private $addresses;
    private $rooms;
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
                $this->addresses[] = $name->text();
                $this->rooms[] = $name->text();
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
        array_shift($this->names);
        return $name[0];
    }

    public function get_address()
    {
        preg_match('/(?<=,\s).*/', $this->addresses[0], $name);
        array_shift($this->addresses);
        return $name[0];
    }

    public function get_rooms_count()
    {
        if ($this->rooms[0][0] == 'Г' || 'К' || 'C') {
            return 1;
        }
        $name = $this->rooms[0][0];
        array_shift($this->rooms);
        return intval($name[0]);
    }

    public function get_price()
    {
        preg_match('/[\d+\s]+/', $this->prices[0], $name);
        array_shift($this->prices);
        return intval($name[0]);
    }


}
