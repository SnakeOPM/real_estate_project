<?php

namespace App\Orchid\Screens;

use App\Http\Requests\User\CreateRequest;
use App\Models\Party;
use App\Models\User;
use App\Models\User_type;
use App\Services\User\Service;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

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
                ->method('CreateUser')
                ->canSee(!$this->user->exists),

            Button::make('Edit user')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->user->exists)
        ];
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
                    ->placeholder("User's first name")
                    ->help("Enter user's first name"),

                Input::make('last_name')
                    ->title('last name')
                    ->required()
                    ->placeholder("User's last name")
                    ->help("Enter user's last name"),

                Input::make('middle_name')
                    ->title('middle name')
                    ->placeholder("User's first name")
                    ->help("Enter user's first name"),

                Picture::make('avatar')
                    ->title("User's avatar")
                ->storage('s3')->getOldName(),

                TextArea::make('description')
                    ->title('about')
                    ->placeholder('about me'),

                Input::make('email')
                    ->type('email')
                    ->title('email')
                    ->required(),

                Input::make('phone')
                    ->title('Phone number')
                    ->mask('+7(999) 999-9999')
                    ->required(),

                Input::make('password')
                    ->title('password')
                    ->required()
                    ->max(30),

                Relation::make('user_type_id')
                    ->title('User type')
                    ->fromModel(User_type::class, 'name', 'name'),

                Relation::make('party_id')
                    ->title('Party')
                    ->fromModel(Party::class, 'name', 'name'),
            ])
        ];
    }

    public function CreateUser(CreateRequest $request, Service $service)
    {
        $data = $request->validated();
        $file = $request->file('avatar');
        $service->store($data, $file);
    }
}
