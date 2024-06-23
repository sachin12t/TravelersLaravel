<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <table border="1">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>subject</th>
            <th>message</th>
            <th>time</th>
            <th>action</th>
        </tr>
        @foreach ($contact as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->cname}}</td>
            <td>{{$data->cemail}}</td>
            <td>{{$data->subject}}</td>
            <td>{{$data->cmessage}}</td>
            <td>{{$data->created_at }}</td>
            
            <td>
                <a href="{{route('cdel',$data->id)}}">delete</a>
                
            </td>
        </tr> 
        @endforeach
       
    </table>
</body>
</html>