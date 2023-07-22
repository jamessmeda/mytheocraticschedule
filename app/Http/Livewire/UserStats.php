<?php

namespace App\Http\Livewire;

use App\Models\Action;
use Auth;
use Carbon\Carbon;
use Livewire\Component;

class UserStats extends Component
{

    public $thingId;

    public function mount($thingId)
    {
        $this->thingId = $thingId;

        // Get the current month
        $current_month = Carbon::now()->month;
        $current_week = Carbon::now()->week;
        $current_year = Carbon::now()->year;

// Get the action date
        $action_dates = Action::with('thing')
            ->where('thing-id', $this->thingId)
            ->where('user_id', Auth::user()->id)
            ->latest()
            ->get();
//            Carbon::parse($action->action_date)->tz('Australia/Adelaide');

// Count the number of times the action date occurs in the current month
        $count = 0;
        $count_week = 0;
        $count_year = 0;
        foreach ($action_dates as $action_date) {
            if (Carbon::parse($action_date->action_date)->tz('Australia/Adelaide')->week === $current_week) {
                $count_week++;
            }
            if (Carbon::parse($action_date->action_date)->tz('Australia/Adelaide')->year === $current_year) {
                $count_year++;
            }
            if (Carbon::parse($action_date->action_date)->tz('Australia/Adelaide')->month === $current_month) {
                $count++;
            }
        }
//        while ($action_dates->month === $current_month) {
//            $count++;
//            $action_dates->addDay();
//        }

// Return the count
        $this->UserStats = $count;
        $this->UserStatsWeek = $count_week;
        $this->UserStatsYear = $count_year;
    }

    public function render()
    {


        return view('livewire.user-stats', [
            'UserStats' => $this->UserStats,
            'UserStatsWeek' => $this->UserStatsWeek,
            'UserStatsYear' => $this->UserStatsYear,
        ]);
    }
}
