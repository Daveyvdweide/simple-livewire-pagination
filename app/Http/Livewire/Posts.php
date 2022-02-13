<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;

class Posts extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.posts', [
            'posts' => Post::paginate(15),
        ]);
    }
}
