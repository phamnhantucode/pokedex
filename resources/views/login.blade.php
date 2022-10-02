<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PokePoke</title>
    <link href='https://fonts.googleapis.com/css?family=Bungee' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}" media="all" type="text/css">
    <script src="https://kit.fontawesome.com/b2ae9f645e.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="header">
        <div class="text-left">
            <span>pokepoke</span>
        </div>
        <div class="nav">
            <ul>
                <li>Home</li>
                <li>Shop</li>
                <li>WikiPoke</li>
            </ul>
        </div>
        <div class="text-login">
            <button class="btn-login">Login/</button>
            <button>Register</button>
        </div>

    </div>
    <div id="content">
        <div class="text">
            <div class="text-header">
                <h2>PokePoke</h2>
            </div>
            <div class="text-small">
                <p> Let's explore pokemon website !!!
                </p>
            </div>
            <div class="btn">
                <button class="button-30 btn-login" role="button">Get started</button>
            </div>
        </div>
    </div>
    <div id="footer">
        <i class="icon fa-brands fa-facebook"></i>
        <i class="icon fa-brands fa-github"></i>
        <i class="icon fa-solid fa-envelope"></i>
    </div>
    <div class="form tranX-300">
        <form id="login" >
            <div class="form-title">
                <h2>Login</h2>
            </div>
            <div class="field user-name">
                <label for="">User name</label> <br>
                <input type="text" name="" id="name" placeholder="User name" class="input">
                <span class="er er-user-name" id="er-user-name"></span>
            </div>
            <div class="field password">
                <label for="">Password</label> <br>
                <input type="password" name="Password" id="pass" placeholder="Password" class="input">
                <span class="er er-password" id="er-password"></span>
            </div>
            <div class=" check">
                <div class="check-input">
                    <input type="checkbox" name="" id="">
                    <label for="">Auto login</label>
                </div>

                <span class="underline">Forget password?</span>
            </div>
            <!-- <button id="sign-in">Sign in</button> <br> -->
            <button class="button-57 " onclick="return checkForm()" >
                <span class="text-btn">Login</span>
                <span>
                    Click Me ~~~
                </span>
            </button>
            <div class="regis">
                <span>You don't have account?</span>
                <span class="underline"><i>Register</i> </span>
            </div>
            
        </form>
    </div>
    <div class="introduce-login tranX300">
        <div class="slide active fade"><img src="{{asset('assets/img/img-login/ngauloi.png')}}" alt=""></div>
        <div class="slide fade"><img src="{{asset('assets/img/img-login/echcon.png')}}" alt=""></div>
        <div class="slide fade"><img src="{{asset('assets/img/img-login/3chuChodethuong.png')}}" alt=""></div>
    </div>
    <!-- <div class="form">
        <form id="register">
            
        </form>
    </div> -->
    <script src="{{asset('assets/js/login.js')}}"></script>
</body>

</html>