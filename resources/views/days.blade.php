<x-app-layout>
    @foreach($things as $thing)
        @switch($thing['id'])
            @case(1)
                {{--Things are {{$thing['id']}}--}}
                <div class="text-center flex-fill">
                    <div class="rounded-3xl border-2 border-fuchsia-300 bg-emerald-50 p-5">Bible Reading<p>
                        <form method="POST" action="{{ route('storeReading') }}">
                            @csrf
                            <input type="hidden" name="thing-id" value="{{$thing['id']}}"></input>
                            <input type="hidden" name="action_date" value="{{\Carbon\Carbon::now()}}"></input>
                            <input type="hidden" name="action-type" value="Done"></input>

                            <div class="items-center">
                                @livewire('actions', ['thingId' => $thing['id']])
                            </div>
                            <x-jet-button class="bg-fuchsia-700">{{ $thing['name'] }}</x-jet-button>
                        </form>
                    </div>

                </div>
                @break
            @default
                {{--                Things are {{$thing['id']}}--}}
                <div class="text-center flex-fill">
                    <div class="rounded-3xl border-2 border-emerald-500 bg-emerald-50">{{$thing['name']}}<p>
                        <form method="POST" action="{{ route('actions.store') }}">
                            @csrf
                            <input type="hidden" name="thing-id" value="{{$thing['id']}}"></input>
                            <input type="hidden" name="action_date" value="{{\Carbon\Carbon::now()}}"></input>
                            <input type="hidden" name="action-type" value="Done"></input>
                            <x-jet-button class="bg-blend-color-burn">{{ $thing['name'] }}</x-jet-button>
                            @livewire('actions', ['thingId' => $thing['id']])
                        </form>
                    </div>
                </div>
                @break
        @endswitch
    @endforeach
</x-app-layout>
