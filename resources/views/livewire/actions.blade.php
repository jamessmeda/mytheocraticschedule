{{--<div>--}}
{{--    --}}{{-- Close your eyes. Count to one. That is how long forever feels. --}}
{{--    <div>--}}
{{--        @if (session()->has('message'))--}}
{{--            <div class="alert alert-success">--}}
{{--                {{ session('message') }}--}}
{{--            </div>--}}
{{--        @endif--}}

{{--        --}}{{--        @if($updateMode)--}}
{{--        --}}{{--            @include('livewire.update')--}}
{{--        --}}{{--        @else--}}
{{--        --}}{{--            @include('livewire.create')--}}
{{--        --}}{{--        @endif--}}

{{--        <table class="table table-bordered mt-5">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th>No.</th>--}}
{{--                <th>Date</th>--}}
{{--                --}}{{--                <th>Body</th>--}}
{{--                <th width="150px">Action</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            @foreach($actions as $action)--}}
{{--                <tr>--}}
{{--                    <td>{{ $action->id }}</td>--}}
{{--                    <td>{{ $action->action_date }}</td>--}}
{{--                    --}}{{--                    <td>{{ $action->body }}</td>--}}
{{--                    <td>--}}
{{--                        <button wire:click="edit({{ $action->id }})" class="btn btn-primary btn-sm">Edit</button>--}}
{{--                        <button wire:click="delete({{ $action->id }})" class="btn btn-danger btn-sm">Delete</button>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--            @endforeach--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--    </div>--}}
{{--</div>--}}
<div>
    @foreach($actions as $action)
        {{--    <tr>--}}
        {{--        <td>{{ $action->id }}</td>--}}
        {{--        <td>{{ $action->action_date }}</td>--}}
        {{--        --}}{{--                    <td>{{ $action->body }}</td>--}}
        {{--        <td>--}}
        {{--            <button wire:click="edit({{ $action->id }})" class="btn btn-primary btn-sm">Edit</button>--}}
        {{--            <button wire:click="delete({{ $action->id }})" class="btn btn-danger btn-sm">Delete</button>--}}
        {{--        </td>--}}
        {{--    </tr>--}}
        @if(\Carbon\Carbon::parse($action->action_date)->tz('Australia/Adelaide')->isToday())
            [*]
        @else
            *
        @endif
    @endforeach
</div>
