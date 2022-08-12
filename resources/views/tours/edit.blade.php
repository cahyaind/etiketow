<h1>Edit Wisata</h1>
<form action="/tours/{{$tour->id}}" method="POST">
    @method('PUT')
    @csrf
    Name: <input type="text" name="name" value="{{$tour->name}}"><br>
    Desc: <input type="text" name="description" value="{{$tour->description}}"><br>
    Price: <input type="number" name="price" value="{{$tour->price}}"><br>
    Village: <input type="text" name="village" value="{{$tour->village}}"><br>
    Subdistrict: <input type="text" name="subdistrict" value="{{$tour->subdistrict}}"><br>
    ImageUrl <input type="text" name="image_url" value="{{$tour->image_url}}"><br>
    Rating: <input type="number" name="rating" value="{{$tour->rating}}"><br>
    Address: <input type="text" name="address" value="{{$tour->address}}"><br>
    Map Url: <input type="text" name="map_url" value="{{$tour->map_url}}"><br>
    Photos: <input type="text" name="photos" value="{{$tour->photos}}"><br>
    <input type="submit" value="save">
</form>