<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <hr>

    <h2>Alle Posts:</h2>
    @foreach ($posts as $post)
        <div>
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->content }}</p>
            <small>Geplaatst op: {{ $post->created_at->format('d-m-Y H:i') }}</small>
            <hr>
        </div>
    @endforeach
</body>
</html>
