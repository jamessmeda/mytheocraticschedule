<div>
    @foreach($readBooks as $reads)

        <select>
            <option value="0">-- Select Bible Book --</option>
            @foreach($books as $book)
                <option value="{{ $book->id }}">{{ $book->book }}</option>
            @endforeach
        </select>

        <label>
            Chapter
            <input type="number" value="{{$reads->chapter}}">
        </label>

        <label>
            Verse
            <input type="number" {{$reads->verse}}>
        </label>
    @endforeach
</div>
