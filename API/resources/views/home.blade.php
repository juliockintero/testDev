<form action="{{ route('csv.upload') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <input type="file" name="file" require>
    </div>
    <button type="submit">Upload</button>
</form>
