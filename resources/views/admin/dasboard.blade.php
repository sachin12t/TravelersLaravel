<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dasboard</title>
    <style>
        *{padding: 0%; margin: 0%; box-sizing: border-box;}
        .container{
            display: flex;
        }
        #sidbar{
            height:100vh;
            width: 300px;
            background: #ccc;
            padding: 3rem  2rem;
            font-size: 2rem;
        }
        #sidbar button{
            font-size: 1.2rem;
            padding: .4rem;
            border: none;
            background: none;
            cursor: pointer;
        }
        #main{
            padding: 3rem 10rem;
            height:100vh;
            width:100%;
            background: #e14b4b;
        }

    </style>
</head>
<body>
    <div class="container">
        <div id="sidbar">
            <button id="click1">Package</button><br>
            <button id="click2">Destination</button><br>
            <button id="click3">ContactData</button><br>
            <button id="click4">click2</button>
        </div>
        <div id="main"></div>
    </div>
    <script src="{{asset('js/jquery.js')}}"></script>  
    <script>
        $(document).ready(function(){
      $("#click1").on("click",function(){
        $.ajax({
            url:"{{route('form_packages')}}",
            type:"post",
            success:function(data){
                $("#main").html(data);
            }
        });
      });
    
      $("#click2").on("click",function(){
        $.ajax({
            url:"{{ url('show_packages')}}",
            type:"post",
            success:function(data){
                $("#main").html(data);
            }
        });
      });
    });
    
    
     
    </script> 
</body>
</html>