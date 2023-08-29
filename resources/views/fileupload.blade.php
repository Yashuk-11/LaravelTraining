<h1>File upload page</h1>
<form action="fileuploadcontroller" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file"><br><br>
    <button type="submit">Upload file</button>
</form>
