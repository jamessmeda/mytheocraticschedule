<?php

namespace App\Http\Livewire;

use App\Models\Action;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EditThings extends Component
{
    public $thingId;

    public function mount($thingId)
    {
        $this->thingId = $thingId;
    }

    public function render()
    {
        $this->actions = Action::with('thing')
            ->where('thing-id', $this->thingId)
            ->where('user_id', Auth::user()->id)
            ->latest()
            ->get();
        return view('livewire.edit-things');
    }

}
