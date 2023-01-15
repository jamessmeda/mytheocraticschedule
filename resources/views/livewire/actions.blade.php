<div>
    @switch($thingId)
        @case(1)
            @foreach($actions as $action)
                @if($loop->first)
                    Look is 1
                    @livewire('bible-dropdown', ['actionId' => $action['id']])
                @endif
                @if(\Carbon\Carbon::parse($action->action_date)->tz('Australia/Adelaide')->isToday())
                    [*]
                @else
                    *
                @endif
            @endforeach
            @break
        @default
            @foreach($actions as $action)
                @if(\Carbon\Carbon::parse($action->action_date)->tz('Australia/Adelaide')->isToday())
                    [*]
                @else
                    *
                @endif
            @endforeach
            @break
    @endswitch
</div>
