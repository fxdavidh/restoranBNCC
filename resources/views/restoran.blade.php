<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($restorans as $restoran)
            <tr>
                <td>{{$restoran->id}}</td>
                <td>{{$restoran->name}}</td>
                <td>{{$restoran->description}}</td>
                <td>{{$restoran->price}}</td>
                <td>
                    <a href="{{url('restoran/'.$restoran->id.'/edit')}}">Edit</a>
                    <form action="{{url('restoran/'.$restoran->id)}}" method='POST'>
                        @csrf
                        {{method_field('DELETE')}}
                        <button type='submit'>Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>