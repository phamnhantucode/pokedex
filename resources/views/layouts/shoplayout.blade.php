<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poke Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{ asset('assets/css/rest.css') }}" media="all" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/shoplayout.css') }}" media="all" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/cartDropdown.css') }}" media="all" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    @yield('css')
</head>
<body>
    <!-- Header -->
    <div class="header__container">
        <div class="header flex-row-center-between">
            <div class="header__logo">
                <img src="{{asset('assets/img/logo.svg')}}" alt="">
            </div>
            <div class="header__search ">
                <form action="" class="flex-row-center-between">
                    <input type="text" name="search-input" placeholder="Search for product">
                    <button>
                        <span class="material-symbols-outlined">
                            search
                        </span>
                    </button>
                </form>
            </div>
            <div class="header__account flex-row-center-between">
               
                <!-- <div class="header__account__login">
                
                <a href="" class="flex-row-center-between">
                    <span class="material-symbols-outlined">
                    account_circle
                    </span>    
                    login
                </a>
                </div>
                <div class="header__account__register">
                    <a href="">register</a>
                </div> -->

                <div class=" flex-row-center-between">
                    
                        {{-- <a href="" id="cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </a> --}}
                        <a class="dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa-solid fa-cart-shopping"></i>
                          </a>
                          <ul class="dropdown-menu dropdown-cart">
                            <li>
                                <span class="item">
                                  <span class="item-left">
                                      <img width="70" src="https://htmldemo.net/lukani/lukani/assets/img/product/product1.jpg" alt="" />
                                      <span class="item-info">
                                          <span>Item name</span>
                                          <span>23$</span>
                                      </span>
                                  </span>
                                  <span class="item-right">
                                      <button class="btn btn-xs btn-danger pull-right">x</button>
                                  </span>
                              </span>
                            </li>
                            <li>
                                <span class="item">
                                  <span class="item-left">
                                      <img width="70" src="https://htmldemo.net/lukani/lukani/assets/img/product/product1.jpg" alt="" />
                                      <span class="item-info">
                                          <span>Item name</span>
                                          <span>23$</span>
                                      </span>
                                  </span>
                                  <span class="item-right">
                                      <button class="btn btn-xs btn-danger pull-right">x</button>
                                  </span>
                              </span>
                            </li>
                            <li class="divider"></li>
                            <li style="text-align: center"><a class="text-center" href="">View Cart</a></li>
                            <li style="text-align: center; color: red">Total price: 100 USD </li>
                          </ul>
                    
                    
                    <div class="header__account__user">
                        <div href="" class="user__account flex-row-center-between">
                            <span class="material-symbols-outlined">
                            account_circle
                            </span>    
                            User name
                        </div>
                        <ul>
                            <li><a href="">My account</a></li>
                            <li><a href="">Checkout</a></li>
                            <li><a href="">My cart</a></li>
                            <li><a href="">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="category">
            <div class="category-tag flex-row-center-between">
                <span class="material-symbols-outlined">
                    list
                </span>
                <h3>Catergory</h3>
                <ul id="category__list">
                    <li><a href="">Some thingasdasdasd</a></li>
                    <li><a href="">Some thingasda</a></li>
                    <li><a href="">Some thing</a></li>
                    <li><a href="">Some thingasass</a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <div id="root">
        @yield('root')
    </div> 

    <footer class="footer">
        <div class="footer__container flex-row-center-between">
            <div class="footer__item">
                <h3>Infomation</h3>
                <ul>
                    <li><a href="">About us</a></li>
                    <li><a href="">Checkout</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
            <div class="footer__item">
                <h3>Infomation</h3>
                <ul>
                    <li><a href="">About us</a></li>
                    <li><a href="">Checkout</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
            
            <div class="footer__item__main">
                <img src="{{asset('assets/img/logo.svg')}}" alt="">
                <ul>
                    <li><a href="">About us</a></li>
                    <li><a href="">Checkout</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
                <div class="footer__social flex-row-center-between">
                    <a href="">
                        <div><i class="fa-brands fa-facebook-f"></i></div>
                    </a>
                    <a href="">
                        <div><i class="fa-brands fa-twitter"></i></div>
                    </a>
                    <a href="">
                        <div><i class="fa-brands fa-google-plus-g"></i></div>
                    </a>
                    <a href="">
                        <div><i class="fa-brands fa-discord"></i></div>
                    </a>
                </div>
            </div>
            <div class="footer__item">
                <h3>Infomation</h3>
                <ul>
                    <li><a href="">About us</a></li>
                    <li><a href="">Checkout</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
            <div class="footer__item">
                <h3>Infomation</h3>
                <ul>
                    <li><a href="">About us</a></li>
                    <li><a href="">Checkout</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="footer__container footer__payment flex-row-center-between">
            <div><p><i class="fa-regular fa-copyright"></i> 2022 Make by <b>BDSD team</b></p></div>
            <div>
                <img src="{{asset('assets/img/img-payment/payment.webp')}}" alt="">
            </div>
        </div>
    </footer>


    <script src="{{ asset('assets/js/shoplayout.js') }}"></script>
    @yield('js')
</body>
</html>