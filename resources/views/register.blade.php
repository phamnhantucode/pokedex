<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PokePoke</title>
    <link href='https://fonts.googleapis.com/css?family=Bungee' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('assets/css/register.css') }}" media="all" type="text/css">
    <script src="https://kit.fontawesome.com/b2ae9f645e.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="container">
        <div class="form">
            <form action="">
            <div class="title">
                <h2>register</h2>
            </div>
            <div class="content">
                <div class="name">
                    <div class="f-name ">
                        <label for="">First name</label> <br>
                        <input type="text" placeholder="First Name" class=" ip ip-half">
                     </div>
                    <div class="l-name  ">
                        <label for="">Last name</label> <br>
                        <input type="text" placeholder="Last Name" class=" ip ip-half" >
                    </div>
                </div>
               
                <div class="user-name field ">
                    <label for="">User name</label> <br>
                    <input type="text" placeholder="User Name" class="ip">
                </div>
                <div class="pass field">
                    <label for="">Password</label> <br>
                    <input type="password" placeholder="Password" class="ip">
                </div>
                <div class="re-pass field">
                    <label for="">Re-Password</label> <br>
                    <input type="password" placeholder="Re-Password" class="ip">
                </div>
                 <button class="button-57 " role="button">
                <span class="text-btn">Create</span>
                <span>
                    Click Me ~~~
                </span>
            </button>
            </div>
        </form>
        </div>
       <div class="img-container">
            <img class="img" src="{{asset('assets/img/img-register/register.png')}}" alt="">
       </div>
    </div>

<script src="{{asset('assets/js/register.js')}}"></script>
</body>
</html>