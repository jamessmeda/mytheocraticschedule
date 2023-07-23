<div>
    {{--create and unordered list with delete buttons to the right--}}
    <ul class="list-disc">
        @foreach($actions as $action)
            <li>
                <form method="POST" action="{{ route('actions.destroy', $action['id']) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-400 rounded-full p-1 m-1">
                        {{$action['action_date']}}, {{$action['action_type']}} <i class="fa-solid fa-trash">
                        </i>
                    </button>
                </form>

            </li>
        @endforeach
    </ul>
</div>
