<?php

namespace Database\Factories\FlatsScrapper;

use App\Models\Flat;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Collection;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FlatScrapFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    private $scrapper;

    protected $model = Flat::class;

    public function __construct($count = null,
                                ?Collection $states = null,
                                ?Collection $has = null,
                                ?Collection $for = null,
                                ?Collection $afterMaking = null,
                                ?Collection $afterCreating = null,
        $connection = null,
                                ?Collection $recycle = null)
    {
        parent::__construct($count, $states, $has, $for, $afterMaking, $afterCreating, $connection, $recycle);


    }


    public function definition(): array
    {
        $this->scrapper = new FlatScrapper();
        return [
            'name' => $this->scrapper->get_name(),
            'address' => $this->scrapper->get_address(),
            'price' => $this->scrapper->get_price(),
            'rooms_count' => $this->scrapper->get_rooms_count()
        ];
    }


}
