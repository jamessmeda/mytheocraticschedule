<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
    @foreach($categories as $category)

        <div class="p-6 bg-fuchsia-700 border-8 rounded-full">
            <a href={{ route('day',['id' => $category->id]) }}>
                <div class="flex items-center">
                    <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold text-white uppercase">
                        <i class="fa-solid fa-sun"></i> Each {{$category->title}}
                    </div>
                </div>

                <div class="ml-12">
                    <div class="mt-2 text-sm  text-white uppercase">
                        Important things for each {{$category->title}}.
                    </div>
                </div>
            </a>
        </div>

    @endforeach
</div>
