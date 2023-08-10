<x-app-layout>
    <x-slot name="header">
        {{--        if the current url is /things/1 then show the following line--}}
        @if(request()->is('things/1'))
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Day') }}
            </h2>
        @endif
        @if(request()->is('things/2'))
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Week') }}
            </h2>
        @endif
        @if(request()->is('things/3'))
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Month') }}
            </h2>
        @endif
        @if(request()->is('things/4'))
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Year') }}
            </h2>
        @endif
        {{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
        {{--            Home--}}
        {{--            {{ __('Dashboard') }}--}}
        {{--        </h2>--}}
    </x-slot>
    <div class="text-center m-0.5">
        @foreach($things as $thing)
            {{--            @dd($things)--}}
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
                            @livewire('user-stats', ['thingId' => $thing['id']])
                            <x-jet-button class="bg-fuchsia-700 m-2">Record {{ $thing['name'] }}</x-jet-button>
                        </form>
                        {{--show and hid a div with the edit form--}}
                        <div x-data="{ show: false }">
                            <x-jet-button @click="show = true" class="bg-blend-color-burn m-2">
                                Edit {{ $thing['name'] }}</x-jet-button>
                            <div x-show="show" class="rounded-1xl border-2 border-emerald-300 bg-emerald-50 p-5 m-0.5">
                                <form method="POST" action="{{ route('actions.update', $thing['id']) }}">
                                    @csrf
                                    @method('PUT')
                                    List of {{$thing['name']}} to delete
                                    @livewire('edit-things', ['thingId' => $thing['id']])
                                    <x-jet-button class="bg-blend-color-burn m-2">
                                        Update {{ $thing['name'] }}</x-jet-button>
                                </form>
                            </div>
                        </div>

                        {{--                        <x-jet-button class="bg-red-400 m-2">Edit {{ $thing['name'] }}</x-jet-button>--}}
                    </div>
                    @break
                @default
                    {{--                    Things are {{$thing['id']}}--}}
                    <div class="rounded-1xl border-2 border-emerald-300 bg-emerald-50 p-5 m-0.5">
                        {{$thing['name']}}<p>
                        <form method="POST" action="{{ route('actions.store') }}">
                            @csrf
                            <input type="hidden" name="thing-id" value="{{$thing['id']}}">
                            <input type="hidden" name="action_date" value="{{\Carbon\Carbon::now()}}">
                            <input type="hidden" name="action-type" value="Done">
                            @livewire('actions', ['thingId' => $thing['id']])
                            @livewire('user-stats', ['thingId' => $thing['id']])
                            <x-jet-button class="bg-blend-color-burn m-2">Record {{ $thing['name'] }}</x-jet-button>
                        </form>
                        {{--show and hid a div with the edit form--}}
                        <div x-data="{ show: false }">
                            <x-jet-button @click="show = true" class="bg-blend-color-burn m-2">
                                Edit {{ $thing['name'] }}</x-jet-button>
                            <div x-show="show" class="rounded-1xl border-2 border-emerald-300 bg-emerald-50 p-5 m-0.5">
                                <form method="POST" action="{{ route('actions.update', $thing['id']) }}">
                                    @csrf
                                    @method('PUT')
                                    List of {{$thing['name']}} to delete
                                    @livewire('edit-things', ['thingId' => $thing['id']])
                                    <x-jet-button class="bg-blend-color-burn m-2">
                                        Update {{ $thing['name'] }}</x-jet-button>
                                </form>
                            </div>
                        </div>
                        {{-- add livewire componet to edit the bible reading --}}
                        {{--                        <x-jet-button class="bg-red-400 m-2">Edit {{ $thing['name'] }}</x-jet-button>--}}
                    </div>
                    @break

            @endswitch
        @endforeach
    </div>
</x-app-layout>
