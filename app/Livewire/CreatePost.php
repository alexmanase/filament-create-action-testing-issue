<?php

namespace App\Livewire;

use Filament\Actions\CreateAction;
use Filament\Forms\Components\TextInput;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;

class CreatePost extends Component implements HasForms, HasActions
{
    use InteractsWithActions;
    use InteractsWithForms;

    public function createAction()
    {
        return CreateAction::make('create')
                ->model(Post::class)
                ->form([
                    TextInput::make('title')
                        ->required()
                        ->maxLength(255),
                ]);
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}