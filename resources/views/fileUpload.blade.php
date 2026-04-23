<h2>Upload file</h2>

<!-- @if ($errors->any())
    <div style="color:red;">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif -->
<form method="POST" action="/upload" enctype="multipart/form-data">
        @csrf

    Select File:

    <input type="file" name="file">
    <br><br>
    <button type="submit">Upload</button>

</form>