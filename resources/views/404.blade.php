{{--receive the $things variable in this component --}}
@props(['categories'])
<x-app-layout>
    <x-slot name="header">
        {{--        --}}{{--        if the current url is /things/1 then show the following line--}}
        {{--        @if(request()->is('things/1'))--}}
        {{--            <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
        {{--                {{ __('Day') }}--}}
        {{--            </h2>--}}
        {{--        @endif--}}
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ooops') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                we can't find that page

            </div>
        </div>
    </div>
</x-app-layout>

