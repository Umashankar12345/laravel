<!DOCTYPE html>
<html>
<head>
    <title>All Posts</title>
</head>
<body>

<h1>All Posts</h1>

<a href="/admin/posts/create">
    Add New Post
</a>

<hr>

@foreach($posts as $post)

<h3>{{ $post->title }}</h3>

<p>{{ $post->content }}</p>

<hr>

@endforeach

</body>
</html>