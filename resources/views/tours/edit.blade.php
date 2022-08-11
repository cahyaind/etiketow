<h1>Edit Wisata</h1>
<form action="/tours/{{$tour->id}}" method="POST">
    @method('PUT')
    @csrf
    Name: <input type="text" name="name" value="{{$tour->name}}"><br>
    Desc: <input type="text" name="description" value="{{$tour->description}}"><br>
    Price: <input type="number" name="price" value="{{$tour->price}}"><br>
    ImageUrl <input type="text" name="image_url" value="{{$tour->image_url}}"><br>
    ImageDescUrl <input type="text" name="imagedesc_url" value="{{$tour->imagedesc_url}}"><br>
    Location <input type="text" name="location" value="{{$tour->location}}"><br>
    <input type="submit" value="save">
</form>