<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All notes</title>
</head>

<body>
    <h1>All notes</h1>
    <a href="note/create">Create note</a>
    <ul>
        @foreach ($allNotes as $note)
            <li>
                {{$note->title}}

            </li>
            <div>
                <a href="note/show/{{ $note->id }}">View</a>
                <a href="note/{{$note->id}}/edit">Edit</a>
                <form action="/note/{{$note->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button>delete</button>
                </form>
            </div>
        @endforeach
    </ul>
</body>

</html>