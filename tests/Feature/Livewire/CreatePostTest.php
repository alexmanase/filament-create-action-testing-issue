<?php

use App\Livewire\CreatePost;
use App\Models\Post;

use function Pest\Livewire\livewire;

it('can create a post', function () {
   livewire(CreatePost::class)
       ->callAction('create')
       ->assertOk();

   dd(Post::first());
});