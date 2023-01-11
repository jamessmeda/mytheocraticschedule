<div>


    <select>
        <option value="0">-- Select Bible Book --</option>
        @foreach($books as $book)
            <option value="{{ $book->id }}">{{ $book->book }}</option>
        @endforeach
    </select>

    <label>
        Chapter
        <input type="number" wire:model="chapter">
    </label>

    <label>
        Verse
        <input type="number" wire:model="verse">
    </label>
</div>
