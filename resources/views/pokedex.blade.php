<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Pokedex</title>
</head>
<body>
    <header id="header">
        <div class="header-wrapper">
            <div class="logo-wrapper">
                <img id="pika-logo" src="{{asset('assets/img/pikachu-removebg-preview.png ')}}" alt="">
                <img src="{{asset('assets/img/logo-removebg-preview.png ')}}" alt="">
            </div>
            <nav id="navbar">
                <ul>
                    <li><a href=""><span>Home</span></a></li>
                    <li><a href=""><span>Shop product</span></a></li>
                    <li><a href=""><span>Pokedex</span></a></li>
                </ul>
            </nav>
            <div id="header-personal">
                <img src="{{asset('assets/img/pikachu-removebg-preview.png ')}}" alt="">
                <div id="header-personal-feature">
                    <div class="personal-info">
                        <img src="{{asset('assets/img/pikachu-removebg-preview.png ')}}" alt="">
                        <div class="">
                            <h3>Name: Poke trainer</h3>
                            <p>Email@gmail.com</p>
                        </div>
                    </div>
                    <ul>
                        <li><a href="">Infomation</a></li>
                        <li><a href="">My Pokedex</a></li>
                        <li><a href="">My Cart</a></li>
                        <li><a href="">Log out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div id="root">
        <div id="top-banner">
            <div id="random-poke">
                <img src="{{asset('assets/img/affect-bg.png ')}}" alt="">
                <div id="poke-random-list">
                </div>
            </div>
            <div class="search">
                <h3>Search by id or name</h3>
                <div id="search-form">
                    <div class="search-group">
                        <input type="text" id="form-search-input">
                        <div id="btn-submit" type="submit">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                    <div class="random">
                        <span id="random-search-btn">Random pokemon <i class="fa-solid fa-shuffle"></i></span>
                    </div>
                </div>
            </div>
            
        </div>
        <div id="search-advance">
            <div class="">
                <h1>Check for types</h1>
                    <div class="type-group">
                        <input type="checkbox" id="ice-label" value="ice">
                        <label for="ice-label" >Ice</label>
                        <input type="checkbox" id="rock-label" value="rock">
                        <label for="rock-label">rock</label>
                        <input type="checkbox" id="fire-label" value="fire">
                        <label for="fire-label">fire</label>
                        <input type="checkbox" id="glass-label" value="glass">
                        <label for="glass-label">glass</label>
                    </div>
                    <button id="search-type"> Search</button>
                <button class="open-advance">Open Advance Search</button>
            </div>

        </div>
        <div id="container">
        

            
        </div>
        <p>
            <button id="loadmore">Loadmore</button>
        </p>
    </div>

    <script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>