<x-app-layout>
    @foreach($things as $thing)

        <div class="text-center flex-fill">
            <form method="POST" action="{{ route('actions.store') }}">
                @csrf
                <input type="hidden" name="thing-id" value="{{$thing['id']}}"></input>
                <input type="hidden" name="action-date" value="{{\Carbon\Carbon::now()}}"></input>
                <input type="hidden" name="action-type" value="Done"></input>
                <x-jet-button class="bg-blend-color-burn">{{ $thing['name'] }}</x-jet-button>
                <button type="submit">{{ $thing['name'] }}</button>
            </form>
        </div>
    @endforeach
</x-app-layout>
