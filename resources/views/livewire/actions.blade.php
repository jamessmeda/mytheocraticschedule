<div>
    @foreach($actions as $action)
        @if(\Carbon\Carbon::parse($action->action_date)->tz('Australia/Adelaide')->isToday())
            [*]
        @else
            *
        @endif
    @endforeach
</div>
