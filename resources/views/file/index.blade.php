<form action="{{ route('file.upload') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    Logo:
    <br />
    <input type="file" name="xlsx" />
    <br /><br />
    <input type="submit" value=" Save " />
</form>
