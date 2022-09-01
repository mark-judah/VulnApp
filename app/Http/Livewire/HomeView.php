<?php

namespace App\Http\Livewire;

use App\Models\Books;
use Livewire\Component;

class HomeView extends Component
{
    public function render()
    {
        $books = Books::orderBy('created_at', 'desc')->get();
        $result= json_encode($books);

        return view('livewire.home-view',[
            'books' => json_decode($result,true)]);
    }
}
