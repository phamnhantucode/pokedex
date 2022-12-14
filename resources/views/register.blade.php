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
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
    <div id="container">
        <div class="form">
            <form id="form-register" action="">
            <div class="title">
                <h2>register</h2>
            </div>
            <div class="content">
                <div class="name field">
                    <div class="f-name ">
                        <label for="">First name</label> 
                        <input type="text" placeholder="First Name" class=" ip ip-half" id="f-name">
                        <span class="er er-password" id="er-f-name"></span>
 
                    </div>
                    <div class="l-name  ">
                        <label for="">Last name</label> 
                        <input type="text" placeholder="Last Name" class=" ip ip-half" id="l-name">
                        <span class="er er-password" id="er-l-name"></span>
                   
                    </div>
                </div>
               
                <div class="user-name field ">
                    <label for="">User name</label> 
                    <input type="text" placeholder="User Name" class="ip" id="user-name">
                    <span class="er er-password" id="er-user-name"></span>
               
                </div>
                <div class="pass field">
                    <label for="">Password</label> 
                    <input type="password" placeholder="Password" class="ip" id="pass">
                    <span class="er er-password" id="er-password"></span>
                
                </div>
                <div class="re-pass field">
                    <label for="">Re-Password</label> 
                    <input type="password" placeholder="Re-Password" class="ip" id="re-pass">
                    <span class="er er-password" id="er-re-password"></span>
                
                </div>
                <button class="button-57 " onclick="return checkForm()">
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
<script src ="{{asset('assets/js/validation.js')}}">

    </script>
    <script>
        Validation({
            form: '#form-register',
            error: '.er',
            rules : [
                Validation.isRequired('#f-name'),
                Validation.isRequired('#l-name'),
                Validation.isRequired('#user-name'),
                Validation.isRequired('#pass'),
                Validation.isRequired('#re-pass'),
                Validation.minLength('#pass',6),
                Validation.confirm('#re-pass',function(){
                    return document.querySelector("#re-pass").value;
                })
            ]
        });
    </script>
</body>
</html>