<div>

    @if($readBooks->isEmpty())
        its empty
        <label>
            <select name="book">
                <option value="0">-- Select Bible Book --</option>
                @foreach($books as $book)
                    <option value="{{ $book->id }}">{{ $book->book }}</option>
                @endforeach
            </select>
        </label>
        <label>
            Chapter
            <input name="chapter" type="number" value="1">
        </label>

        <label>
            Verse
            <input name="verse" type="number" value="1">
        </label>
    @endif
    @foreach($readBooks as $reads)
        <label>
            <select name="book">
                <option value="0">-- Select Bible Book --</option>
                @foreach($books as $book)
                    <option
                        value="{{ $book->id }}" {{$reads->book_read == $book->id  ? 'selected' : ''}}>{{ $book->book }}</option>
                @endforeach
            </select>
        </label>
        <label>
            Chapter
            <input name="chapter" type="number" value="{{$reads->book_chapter}}">
        </label>

        <label>
            Verse
            <input name="verse" type="number" value="{{$reads->book_verse}}">
        </label>
    @endforeach
</div>
