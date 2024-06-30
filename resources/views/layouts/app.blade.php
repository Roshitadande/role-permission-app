<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roles and Permissions</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>

    header{
      padding:12px;
      display:flex;
      height: 75px;
      background:#add8e6;
      width:100%;
      justify-content:space-between;
      color:#000000;
    }
    header a{
        color:black;
    }
    footer{
      background:#add8e6;
      height: 75px;
      width:100%;
      text-align:center;
      font-size:25px;
      font-weight:300;
      color:#322C2B;
    }
    main{
      padding-top:75px;
      display:flex;
      justify-content:space-between;
      
    }
    .main h1{
        text-align:center;
    }
    .btns{
        display:flex;
        justify-content:space-between;
    }
    .sidebar{
      height:100%;
      width:10%;
      position: fixed;
      top:75px;
      background:#1e5d62;

    }
    .list{
      color:#000000;
      
    }
    .list a{
        color:black;
       
    }
    /* .list-group{

      height:30%;
    }
    .list-group-item{
      background:#803D3B;
      color:white;
    } */
    .container{
      padding-left:2%;
      width:80%;
    }
    </style>
  
</head>
<body>
    <header class="fixed-top">
        <div class="logo" style="font-size:30px;font-weight:600">
            My Project
        </div>
        <div class="nav">
            <ul class="nav nav-underline">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Our Services</a>
                </li>

            </ul>
        </div>
    </header>
    <main>
        <div class="col-md-2 sidebar">
            <ul>
            <li class="list">
            <div class="" >
                <a  href="{{route('roles.index')}}" style="margin-top:20px; ">Roles</a>
                </div>
            </li>
            <li class="list">
            <div class="">
                <a  href="{{route('permissions.index')}}" style="margin-top:20px;">Permissions</a>
                </div>
            </li>
            </ul>

        </div>
        <div class="container mt-5">
            @yield('content')
        </div>
    </main>

    <footer class="fixed-bottom">
        <p>Developed by Roshita Dande</p>
    </footer>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



