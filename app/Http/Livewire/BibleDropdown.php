<?php

namespace App\Http\Livewire;

use App\Models\BibleBook;
use App\Models\Reading;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class BibleDropdown extends Component
{
    public $books;
    public $readBooks;
    public $chapter = 1;
    public $verse = 1;

    public function mount()
    {
        $this->books = BibleBook::all();
        $this->readBooks = Reading::all()->where('user_id', Auth::user()->id)->firstOrFail();
    }

    public function getBooks()
    {

    }

    public function render()
    {
        return view('livewire.bible-dropdown');
    }
}
