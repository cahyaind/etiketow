<h1>Tours</h1>
<table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Village</th>
            <th>Subdistrict</th>
            <th>Image Url</th>
            <th>Rating</th>
            <th>Address</th>
            <th>Map Url</th>
            <th>Photos</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tours as $tour)
        <tr>
            <td>{{$tour->name}}</td>
            <td>{{$tour->description}}</td>
            <td>{{$tour->price}}</td>
            <td>{{$tour->village}}</td>
            <td>{{$tour->subdistrict}}</td>
            <td>{{$tour->image_url}}</td>
            <td>{{$tour->rating}}</td>
            <td>{{$tour->address}}</td>
            <td>{{$tour->map_url}}</td>
            <td>{{$tour->photos}}</td>
            <td>
                <a href="/tours/{{$tour->id}}/edit">Edit</a>
                <form action="/tours/{{$tour->id}}" method="post">
                    @method('delete')
                    @csrf
                    <input type="submit" value="delete">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

    <a href="/tours/create">Add</a>
</table>