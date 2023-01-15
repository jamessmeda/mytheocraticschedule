<?php

namespace App\Http\Livewire;

use App\Models\Action;
use App\Models\BibleBook;
use App\Models\Reading;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class BibleDropdown extends Component
{
    public $books;
    public $readBooks;
    public $chapter;
    public $verse;
    public $actionId;
    public $actions;

    public function mount($actionId)
    {
        $this->actionId = $actionId;
        $this->books = BibleBook::all();
        $this->readBooks = Reading::all()->where('action_id', $actionId);
    }

    public function getBooks()
    {

    }

    public function render()
    {
        return view('livewire.bible-dropdown');
    }
}
