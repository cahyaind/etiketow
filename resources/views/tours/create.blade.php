<h1>Tambahkan Wisata</h1>
<form action="/tours" method="POST">
    @csrf
    Name: <input type="text" name="name"><br>
    Desc: <input type="text" name="description"><br>
    Price: <input type="number" name="price"><br>
    ImageUrl <input type="text" name="image_url"><br>
    ImageDescUrl <input type="text" name="imagedesc_url"><br>
    Location <input type="text" name="location"><br>
    <input type="submit" value="save">
</form>