<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
    <div class="p-6 bg-fuchsia-700 border-8">
        <a href={{ route('day') }} >
        <div class="flex items-center">
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold  text-white">
                Each day</div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm  text-white">
                Important things for each day.
            </div>
        </div>
        </a>
    </div>
    <div class="p-6">
        <div class="flex items-center">

            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
                <a href={{ route('day') }}>Each week</a></div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                Important things for each week.
            </div>
        </div>
    </div>
    <div class="p-6">
        <div class="flex items-center">

            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
                <a href={{ route('day') }}>Each month</a></div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                Important things for each month.
            </div>
        </div>
    </div>
    <div class="p-6">
        <div class="flex items-center">

            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
                <a href={{ route('day') }}>Each year</a></div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                Important things for each year.
            </div>
        </div>
    </div>
</div>
