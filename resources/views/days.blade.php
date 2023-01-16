<x-app-layout>
    @foreach($things as $thing)
        @switch($thing['id'])
            @case(1)


                <div class="text-center flex-fill">
                    <form method="POST" action="{{ route('storeReading') }}">
                        @csrf
                        <input type="hidden" name="thing-id" value="{{$thing['id']}}"></input>
                        <input type="hidden" name="action_date" value="{{\Carbon\Carbon::now()}}"></input>
                        <input type="hidden" name="action-type" value="Done"></input>
                        <x-jet-button class="bg-blend-color-burn">{{ $thing['name'] }}</x-jet-button>
                        <div class="items-center">
                            @livewire('actions', ['thingId' => $thing['id']])
                        </div>
                    </form>
                </div>
                @break
            @default
                <div class="text-center flex-fill">
                    <form method="POST" action="{{ route('actions.store') }}">
                        @csrf
                        <input type="hidden" name="thing-id" value="{{$thing['id']}}"></input>
                        <input type="hidden" name="action_date" value="{{\Carbon\Carbon::now()}}"></input>
                        <input type="hidden" name="action-type" value="Done"></input>
                        <x-jet-button class="bg-blend-color-burn">{{ $thing['name'] }}</x-jet-button>
                        @livewire('actions', ['thingId' => $thing['id']])
                    </form>
                </div>
                @break
        @endswitch
    @endforeach

</x-app-layout>
