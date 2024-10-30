<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit note</title>
</head>

<body>
    <h1>Edit note</h1>

    <form action="/note/{{$note->id}}" method="post">
        @csrf
        @method('PUT')
        <textarea name="title" id="">{{$note->title}}</textarea>

        <a href="/note">Cancel</a>
        <button type="submit">Submit</button>
    </form>
</body>

</html>