<?php

namespace App\Orchid\Screens;

use App\Models\Flat;
use App\Models\User;
use Illuminate\Validation\Rules\In;
use Orchid\Screen\Components\Cells\Boolean;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class FlatCreateScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */

    public $flat;
    public function query(Flat $flat): iterable
    {
        return [
            'flat'=> $flat
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->flat->exists ? 'Edit flat' : 'Create Flat';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::rows([
                Input::make('name')
                ->title('name')
                ->required()
                ->placeholder('Enter name'),

                TextArea::make('description')
                ->title('description')
                ->placeholder('description'),

                Input::make('address')
                ->maxlength(255)
                ->required(),

                Input::make('rooms count')
                ->max(10),

                Input::make('square')
                ->required()
                ->max(120),

                CheckBox::make('pets')
                ->title('Pets allowed'),
                Input::make('type_id')
                ->title('type of flat')
                ->required(),
                Input::make('agency_id')
                ->title('agency id'),
                Relation::make('owner_id')
                ->title('Owner id')
                ->fromModel(User::class, 'name', 'name'),

            ])
        ];
    }
}
