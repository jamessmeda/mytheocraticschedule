<?php

namespace App\Http\Livewire;

use App\Models\BibleBook;
use Livewire\Component;

class BibleDropdown extends Component
{
    public $books;
    public $chapter = 1;
    public $verse = 1;

    public function mount()
    {
        $this->books = BibleBook::all();
    }

    public function getBooks()
    {
        $this->books = BibleBook::orderby('book', 'asc')
            ->select('*')
//            ->where('country_id',$this->country_id)
            ->get();
    }

    public function render()
    {
        return view('livewire.bible-dropdown');
    }
}
