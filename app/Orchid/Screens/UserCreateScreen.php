<?php

namespace App\Orchid\Screens;

use App\Models\User;
use Illuminate\Support\Collection;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;

class UserCreateScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */

    public $user;

    public function query(User $user): iterable
    {
        return [
            'user' => $user
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->user->exists ? 'Edit user' : 'Create user';
    }

    public function description(): ?string
    {
        return 'System users';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Create user')
            ->icon('pencil')
            ->method('createOrUpdate')
            ->canSee(!$this->post->exists),

            Button::make('Edit user')
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [];
    }
}
