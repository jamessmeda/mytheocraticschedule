<div class="rounded-xl items-center">
    @if($readBooks->isEmpty())
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
        <div>
            <a href="https://www.jw.org/finder?srcid=jwlshare&wtlocale=E&prefer=lang&bible={{sprintf('%02d',$reads->book_read)}}{{sprintf('%03d',$reads->book_chapter)}}{{sprintf('%03d',$reads->book_verse)}}&pub=nwtsty"
               target="_blank">READ</a></div>
    @endforeach
</div>
