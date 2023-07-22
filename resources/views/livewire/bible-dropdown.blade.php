
    @if($readBooks->isEmpty())
        <div class="rounded-xl items-center">
        <label>
            <select name="book">
                <option value="0">-- Select Bible Book --</option>
                @foreach($books as $book)
                    <option value="{{ $book->id }}">{{ $book->book }}</option>
                @endforeach
            </select>
        </label>
</div>
<div class="rounded-xl  items-center">
    <label>
        <input name="chapter" type="number" value="1">
    </label>
</div>
<div class="rounded-xl items-center">
    <label>
        <input name="verse" type="number" value="1">
    </label>

</div>
@endif

<div class="rounded-xl items-center">
    @foreach($readBooks as $reads)
        <label>
            <select name="book" class="rounded w-24">
                <option value="0">-- Select Bible Book --</option>
                @foreach($books as $book)
                    <option
                        value="{{ $book->id }}" {{$reads->book_read == $book->id  ? 'selected' : ''}}>{{ $book->book }}</option>
                @endforeach
            </select>
        </label>

        <label>
            <input name="chapter" type="number" class="rounded w-24" value="{{$reads->book_chapter}}">
        </label>


        <label>
            <input name="verse" type="number" class="rounded w-24" value="{{$reads->book_verse}}">
        </label>
        <div class="rounded-md hover:bg-gray-700 active:bg-gray-900 uppercase border m-2 text-sm bg-sky-700 text-white">
{{--            inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring--}}
{{--            focus:ring-gray-300 disabled:opacity-25 transition--}}
{{--don't submit the form when clicking the button but rather click the link--}}
            <a href="https://www.jw.org/finder?srcid=jwlshare&wtlocale=E&prefer=lang&bible={{sprintf('%02d',$reads->book_read)}}{{sprintf('%03d',$reads->book_chapter)}}{{sprintf('%03d',$reads->book_verse)}}&pub=nwtsty"
               target="_blank">Read</a></div>
    @endforeach

