<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/main.css">
    <link rel="stylesheet" href="/main.css'">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    <title>{{$title}}</title>
</head>
<style>
    .complated{
    position:absolute;
   
    top:200px;
    right:200px;
}

    nav{
        display:flex;
        background-color:#007BFF;
        box-sizing: border-box;
        height: 60px;
        align-content: center;
        justify-content:flex-end;
    }
    #ul-nav{
        display:flex;
        width:31.3%;
        height:100%;
        list-style:none;
        align-content: center;
        box-sizing: border-box;

       
       
    }
    li{
        padding:0 20px;
       
        color:white;
        
        height:100%;
        display:flex;
        align-items: center;
        box-sizing: border-box;
        
    }
    #ul-nav > li:hover{
        text-decoration: none;
        border: 4px solid black;
    }
    a:hover li{
        background-color:white;
        color:black;
        text-decoration: none;
    }
    .logo{
        width:48%;
        height: 100%;
      
        color:white;
        letter-spacing: 10px;
        font-weight: bold;
        display:flex;
        
        align-items: center;
       
    }
    a{
        color:black;
    }
    td:hover{
        cursor: pointer;
    }
</style>
<body>
<nav>
    <div class="logo">
    
    </div>
        <ul id="ul-nav">
           <a href="/"><li>
                Home
            </li></a>

            <a href="/projects/create"><li>
                    Create
                </li></a>
        </ul>
           
    </nav>
    <div class="container" style="margin-top:40px;">
        <h1 class="h3">
            {{$title}}
        </h1>    
    </div>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>