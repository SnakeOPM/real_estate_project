<?php

namespace Database\Factories\FlatsScrapper;

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

//TODO: FIX THIS
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
        ->each(function ($node){
            $this->descriptions[] = $node->text();
        });
        $this->crawler->filter('.price-block__price')
            ->each(function ($node){
                $this->prices[] = $node->text();
            });
    }

    public function get_name()
    {
        $name = preg_grep('/^[^,]*/', $this->names);
        array_shift($this->names);
        return $name[0];
    }

    public function get_address()
    {
        $name = preg_grep('/(?<=,\s).*/', $this->addresses);
        array_shift($this->addresses);
        return $name[0];
    }

    public function get_rooms_count()
    {
        if ($this->rooms[0][0] == 'Г' || 'К' || 'C'){
            return 1;
        }
        array_shift($this->rooms);
        return intval($this->rooms[0][0]);
    }

    public function get_price()
    {
        $name = $this->prices[0];
        array_shift($this->addresses);
        return $name[0];
    }


}
