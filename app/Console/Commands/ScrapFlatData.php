<?php

namespace App\Console\Commands;

use App\Console\FlatsScrapper\FlatScrapper;
use Illuminate\Console\Command;
use App\Services\Flat\Service;
use App\Http\Requests\Flat\ScrapRequest;

class ScrapFlatData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:scrap-flat-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scrap flat data from Farpost';

    /**
     * Execute the console command.
     */

    public $scrapper;
    public $service;

    public function __construct(Service $service, FlatScrapper $scrapper)
    {
        parent::__construct();
        $this->scrapper = $scrapper;
        $this->service = $service;
    }


    public function handle()
    {
        $this->scrapper->is_empty() ? $this->info('Data is empty') : null;
    for ($i = 1; $i <= 50; $i++)
    {

        $data = [
            'name' => $this->scrapper->get_name(),
            'address' => $this->scrapper->get_address(),
            'price' => $this->scrapper->get_price(),
            'rooms_count' => $this->scrapper->get_rooms_count()
        ];
        $this->service->store($data);
        $this->scrapper->shift();
    }
    $this->info('done');

    }
}
