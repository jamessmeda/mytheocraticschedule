<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;

class DayTextDropdown extends Component
{
    public function render()
    {
        return view('livewire.day-text-dropdown', [
            'textDate' => Carbon::now()->tz('Australia/Adelaide')->format('ymd'),
        ]);
    }
}
