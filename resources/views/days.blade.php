<x-app-layout>
    <div class="text-center m-0.5">
        @foreach($things as $thing)

            @switch($thing['id'])
                @case(1)
                    {{--Things are {{$thing['id']}}--}}

                    <div class="rounded-1xl border-2 border-fuchsia-300 bg-emerald-50 p-5 m-0.5">
                        <i class="fa-solid fa-sun"></i> Bible Reading<p>
                        <form method="POST" action="{{ route('storeReading') }}">
                            @csrf
                            <input type="hidden" name="thing-id" value="{{$thing['id']}}">
                            <input type="hidden" name="action_date" value="{{\Carbon\Carbon::now()}}">
                            <input type="hidden" name="action-type" value="Done">
                            @livewire('actions', ['thingId' => $thing['id']])


                            {{--                    </div>--}}
                            {{--                    --}}{{--                        using font awsome icons for bible reading as the sun--}}


                            @livewire('user-stats', ['thingId' => $thing['id']])
                            <x-jet-button class="bg-fuchsia-700 m-2">Record {{ $thing['name'] }}</x-jet-button>
                        </form>

                    </div>

                    @break
                @default
                    {{--                    Things are {{$thing['id']}}--}}

                    <div class="rounded-1xl border-2 border-emerald-300 bg-emerald-50 p-5 m-0.5">
                        {{$thing['name']}}<p>
                        <form method="POST" action="{{ route('actions.store') }}">
                            @csrf
                            <input type="hidden" name="thing-id" value="{{$thing['id']}}"></input>
                            <input type="hidden" name="action_date" value="{{\Carbon\Carbon::now()}}"></input>
                            <input type="hidden" name="action-type" value="Done"></input>
                            @livewire('actions', ['thingId' => $thing['id']])
                            @livewire('user-stats', ['thingId' => $thing['id']])
                            <x-jet-button class="bg-blend-color-burn m-2">Record {{ $thing['name'] }}</x-jet-button>

                        </form>
                    </div>


                    @break

            @endswitch

        @endforeach
    </div>
</x-app-layout>
