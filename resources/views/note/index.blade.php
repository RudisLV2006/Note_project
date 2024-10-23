<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All notes</title>
</head>

<body>
    <h1>All notes</h1>
    <a href="notes/create">Create note</a>
    <ul>
        @foreach ($allNotes as $note)
            <li>
                {{$note->title}}
                <p>{{$note->content}}</p>
            </li>
            <div>
                <a href="notes/{{ $note->id }}">View</a>
                <a href="">Edit</a>
                <button>Delete</button>
            </div>
        @endforeach
    </ul>
</body>

</html>