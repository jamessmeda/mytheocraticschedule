<div>
    <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
        <div class="p-6 bg-fuchsia-700 border-8 rounded-full">
            <a href={{ route('day') }} >
                <div class="flex items-center">
                    <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold text-white uppercase">
                        Each day
                    </div>
                </div>
            </a>
        </div>
        <div class="p-6 bg-emerald-700 border-8 rounded-full">
            <div class="flex items-center">

                <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold text-white uppercase">
                    <a href={{ route('day') }}>Each week</a></div>
            </div>

        </div>
        <div class="p-6 bg-yellow-700 border-8 rounded-full">
            <div class="flex items-center">

                <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold text-white uppercase">
                    <a href={{ route('day') }}>Each month</a></div>
            </div>
        </div>
        <div class="p-6 bg-blue-500 border-8 rounded-full">
            <div class="flex items-center">

                <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold text-white uppercase">
                    <a href={{ route('day') }}>Each year</a></div>
            </div>

        </div>
    </div>
</div>
