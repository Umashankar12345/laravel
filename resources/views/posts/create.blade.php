<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
</head>
<body>

<h1>Create Blog Post</h1>

<form method="POST" action="/admin/posts/store">

    @csrf

    Title:
    <input type="text" name="title">

    <br><br>

    Content:
    <textarea name="content"></textarea>

    <br><br>

    <button type="submit">
        Save
    </button>

</form>

</body>
</html>