<x-app-layout>
    @foreach($things as $thing)

        <div class="text-center flex-fill">
            <form method="POST" action="{{ route('actions.store') }}">
                @csrf
                <input type="hidden" name="thing-id" value="{{$thing['id']}}"></input>
                <input type="hidden" name="action_date" value="{{\Carbon\Carbon::now()}}"></input>
                <input type="hidden" name="action-type" value="Done"></input>
                <x-jet-button class="bg-blend-color-burn">{{ $thing['name'] }}</x-jet-button>
                @livewire('actions', ['thingId' => $thing['id']])

                {{--                $actions = Action::where('user_id', Auth::id())->get();--}}



                {{--                @foreach($actions as $action)--}}

                {{--                    @if( ($action['$thing-id'] == $thing['id']) )--}}
                {{--                        @dd($action)--}}
                {{--                        --}}{{--                        $date = Carbon::parse("2019-10-02 09:21:52");--}}

                {{--                        --}}{{--                        return $date->isToday() ? 1 : 0;--}}
                {{--                        [*]--}}

                {{--                    @else--}}
                {{--                        --}}{{--                        [+]--}}
                {{--                    @endif--}}
                {{--                    --}}{{--                {{$action['action-date']}}--}}
                {{--                @endforeach--}}
            </form>
        </div>
    @endforeach
</x-app-layout>
