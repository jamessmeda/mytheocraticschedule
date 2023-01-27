<div>
    @switch($thingId)

        @case(1) Actions for {{$thingId}}
        Bible reading actions
        @if($actions->isEmpty())
            @livewire('bible-dropdown', ['actionId' => 1])
        @endif

        @foreach($actions as $action)

            @if($loop->first)
                @livewire('bible-dropdown', ['actionId' => $action['id']])

            @endif
            @if(\Carbon\Carbon::parse($action->action_date)->tz('Australia/Adelaide')->isToday())
                [*]<i class="fas fa-check-square"></i>
            @else
                *
            @endif

        @endforeach
        @break
        @default Actions for {{$thingId}}
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
