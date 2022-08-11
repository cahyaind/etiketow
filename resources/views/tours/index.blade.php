<h1>Tours</h1>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tours as $tour)
        <tr>
            <td>{{$tour->name}}</td>
            <td>{{$tour->description}}</td>
            <td>{{$tour->price}}</td>
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