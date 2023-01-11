<x-app-layout>
    @foreach($things as $thing)

        <div class="text-center flex-fill">
            <form method="POST" action="{{ route('actions.store') }}">
                @csrf
                <input type="hidden" name="thing-id" value="{{$thing['id']}}"></input>
                <input type="hidden" name="action_date" value="{{\Carbon\Carbon::now()}}"></input>
                <input type="hidden" name="action-type" value="Done"></input>
                @if($thing['id']==1)
                    @livewire('bible-dropdown')
                @endif
                <x-jet-button class="bg-blend-color-burn">{{ $thing['name'] }}</x-jet-button>
                @livewire('actions', ['thingId' => $thing['id']])

            </form>
        </div>
    @endforeach
</x-app-layout>
