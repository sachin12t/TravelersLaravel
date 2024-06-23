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
        <a href="{{route('form_destination')}}">Add Data</a>
    </div>
    <table border="1">
        <tr>
            <th>id</th>
            <th>dtitle</th>
            <th>dcities</th>
            <th>dimage</th>
            <th>time</th>
            <th>action</th>
        </tr>
        @foreach ($destination as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->dtitle}}</td>
            <td>{{$data->dcities}}</td>
            <td><img src="{{asset('img/'.$data->dimage)}}" height="100px" width="100px" alt=""></td>
            <td>{{$data->created_at }}</td>
            <td>{{$data->updated_at }}</td>
            <td>
                <a href="{{route('ddelete',$data->id)}}">delete</a>
                <a href="">Edit</a>
            </td>
        </tr> 
        @endforeach
       
    </table>
</body>
</html>