<div>
    @switch($thingId)

        @case(1)
            @if($actions->isEmpty())
                @livewire('bible-dropdown', ['actionId' => 1])
            @endif

            @foreach($actions as $action)

                @if($loop->first)
                    @livewire('bible-dropdown', ['actionId' => $action['id']])

                @endif
                @if(\Carbon\Carbon::parse($action->action_date)->tz('Australia/Adelaide')->isToday())

                    <i class="fas fa-check-square text-green-400"></i>

                    {{\Carbon\Carbon::parse($action->action_date)->tz('Australia/Adelaide')}}
                    <p>
                    {{\Carbon\Carbon::parse($action->action_date)->tz('Australia/Adelaide')->diffForHumans()}}
                    <p>
                        @else
                            *
                        @endif

                        @endforeach
                        {{--                    @livewire('user-stats')--}}
                        @break
                        @default
                            @foreach($actions as $action)
                                @if(\Carbon\Carbon::parse($action->action_date)->tz('Australia/Adelaide')->isToday())
                                    <i class="fas fa-check-square text-green-400"></i>
                    {{\Carbon\Carbon::parse($action->action_date)->tz('Australia/Adelaide')}}
                    <p>
                    {{\Carbon\Carbon::parse($action->action_date)->tz('Australia/Adelaide')->diffForHumans()}}
                    <p>
                        @else
                            *
                @endif
            @endforeach
            {{--                @livewire('user-stats')--}}
            @break
    @endswitch
</div>
{{--create a mini calander--}}
