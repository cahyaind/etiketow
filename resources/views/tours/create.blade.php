<h1>Tambahkan Wisata</h1>
<form action="/tours" method="POST">
    @csrf
    Nama: <input type="text" name="name"><br>
    Deskripsi: <input type="text" name="description"><br>
    Harga: <input type="number" name="price"><br>
    Desa: <input type="text" name="village"><br>
    Kecamatan: <input type="text" name="subdistrict"><br>
    ImageUrl <input type="text" name="image_url"><br>
    Rating <input type="number" name="rating"><br>
    Alamat <input type="text" name="address"><br>
    Map Url<input type="text" name="map_url"><br>
    Photos <input type="text" name="photos"><br>
    <input type="submit" value="save">
</form>