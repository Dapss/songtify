<form method="POST" action="{{ route('music.update') }}">
    @csrf
    Title: <input type="text">
    Artist: <input type="text">
    Album: <input type="text">
    Genre: <input type="text">
    Year: <input type="number">
    <button type="submit" class="">Submit</button>
</form>