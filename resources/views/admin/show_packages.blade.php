<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="inser_data">
        <a href="{{route('form_packages')}}">Add Data</a>
    </div>
    <table border="1">
        <tr>
            <th>id</th>
            <th>City</th>
            <th>Days</th>
            <th>person</th>
            <th>para</th>
            <th>dcities</th>
            <th>image</th>
            <th>rating</th>
            <th>ratingcount</th>
            <th>amount</th>
            <th>action</th>
        </tr>
        @foreach ($packages as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->city}}</td>
            <td>{{$data->day}}</td>
            <td>{{$data->person}}</td>
            <td>{{$data->para}}</td>
            <td><img src="{{asset('img/'.$data->image)}}" height="100px" width="100px" alt=""></td>
            <td>{{$data->rating}}</td>
            <td>{{$data->ratingcount}}</td>
            <td>{{$data->amount}}</td>
            <td>{{$data->created_at }}</td>
            <td>{{$data->updated_at }}</td>
            <td>
                <a href="{{route('pdelete',$data->id)}}">delete</a>
                <a href="{{route('update_package',$data->id)}}">Edit</a>
            </td>
        </tr> 
        @endforeach
       
    </table>
</body>
</html>