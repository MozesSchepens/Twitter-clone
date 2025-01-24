<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Twitter Clone</title>
</head>
<body>
    <h1>Twitter Clone</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Titel:</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="content">Inhoud:</label>
            <textarea id="content" name="content" rows="4" required></textarea>
        </div>
        <button type="submit">Post</button>
    </form>

    <h2>Posts</h2>
    <ul>
        @foreach($posts as $post)
            <li>{{ $post->title }}: {{ $post->content }}</li>
        @endforeach
    </ul>
</body>
</html>
