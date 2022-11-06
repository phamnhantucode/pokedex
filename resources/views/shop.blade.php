@extends('../layouts/shoplayout')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/rest.css') }}" media="all" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/shop.css') }}" media="all" type="text/css">
@endsection
@section('root')

<div class="banner" style="background-image: url({{ asset('assets/img/img-shop/banner.jpg') }})">
</div>

<div class="products__layout">
    <div class="products__filter">
        <div class="products__filter__type">
            <h3>Types</h3>
            <ul class="products__filter__type">
                <li><a href="">Card Pack</a></li>
                <li><a href="">Toys</a></li>
                <li><a href="">Accessory</a></li>
            </ul>
        </div>
        <div class="products__filter__price">
            <h3>Price range</h3>
            <div class="display-price">
                <span id="min-price">0</span>
                -
                <span id="max-price">1000000</span>
                <span>VND</span>
            </div>
            <div class="range-slide">
                <div class="slide">
                    <div class="line" id="line" style="left: 0%; right: 0%;"></div>
                    <span class="thumb" id="thumbMin" style="left: 0%;"></span>
                    <span class="thumb" id="thumbMax" style="left: 100%;"></span>
                </div>
                <input id="rangeMin" type="range" max="1000000" min="0" step="5000" value="0">
                <input id="rangeMax" type="range" max="1000000" min="0" step="5000" value="1000000">
            </div>

            <button id="filter__price">Filter</button>
        </div>
    </div>
    <div class="product__show">
        <div class="product__container">
            <div class="product__item">
                <div class="product__item__img">
                    <img src="https://htmldemo.net/lukani/lukani/assets/img/product/product1.jpg" alt="">
                    <ul class="flex-row-center-between">
                        <li><a href="Add to cart"><i class="fa-solid fa-cart-plus"></i></a></li>
                        <li><a href=""><i class="fa-solid fa-heart"></i></a></li>
                        <li><a href="Show more"><i class="fa-regular fa-eye"></i></a></li>
                    </ul>
                </div>
                <div class="product__item__content">
                    <a href=""><h3>Product name</h3></a>
                    <h4>Price: 300.000</h4>
                </div>
            </div>
            <div class="product__item">
                <div class="product__item__img">
                    <img src="https://htmldemo.net/lukani/lukani/assets/img/product/product1.jpg" alt="">
                    <ul class="flex-row-center-between">
                        <li><a href="Add to cart"><i class="fa-solid fa-cart-plus"></i></a></li>
                        <li><a href=""><i class="fa-solid fa-heart"></i></a></li>
                        <li><a href="Show more"><i class="fa-regular fa-eye"></i></a></li>
                    </ul>
                </div>
                <div class="product__item__content">
                    <a href=""><h3>Product name</h3></a>
                    <h4>Price: 300.000</h4>
                </div>
            </div>
            <div class="product__item">
                <div class="product__item__img">
                    <img src="https://htmldemo.net/lukani/lukani/assets/img/product/product1.jpg" alt="">
                    <ul class="flex-row-center-between">
                        <li><a href="Add to cart"><i class="fa-solid fa-cart-plus"></i></a></li>
                        <li><a href=""><i class="fa-solid fa-heart"></i></a></li>
                        <li><a href="Show more"><i class="fa-regular fa-eye"></i></a></li>
                    </ul>
                </div>
                <div class="product__item__content">
                    <a href=""><h3>Product name</h3></a>
                    <h4>Price: 300.000</h4>
                </div>
            </div>
            <div class="product__item">
                <div class="product__item__img">
                    <img src="https://htmldemo.net/lukani/lukani/assets/img/product/product1.jpg" alt="">
                    <ul class="flex-row-center-between">
                        <li><a href="Add to cart"><i class="fa-solid fa-cart-plus"></i></a></li>
                        <li><a href=""><i class="fa-solid fa-heart"></i></a></li>
                        <li><a href="Show more"><i class="fa-regular fa-eye"></i></a></li>
                    </ul>
                </div>
                <div class="product__item__content">
                    <a href=""><h3>Product name</h3></a>
                    <h4>Price: 300.000</h4>
                </div>
            </div>
            <div class="product__item">
                <div class="product__item__img">
                    <img src="https://htmldemo.net/lukani/lukani/assets/img/product/product1.jpg" alt="">
                    <ul class="flex-row-center-between">
                        <li><a href="Add to cart"><i class="fa-solid fa-cart-plus"></i></a></li>
                        <li><a href=""><i class="fa-solid fa-heart"></i></a></li>
                        <li><a href="Show more"><i class="fa-regular fa-eye"></i></a></li>
                    </ul>
                </div>
                <div class="product__item__content">
                    <a href=""><h3>Product name</h3></a>
                    <h4>Price: 300.000</h4>
                </div>
            </div>
            <div class="product__item">
                <div class="product__item__img">
                    <img src="https://htmldemo.net/lukani/lukani/assets/img/product/product1.jpg" alt="">
                    <ul class="flex-row-center-between">
                        <li><a href="Add to cart"><i class="fa-solid fa-cart-plus"></i></a></li>
                        <li><a href=""><i class="fa-solid fa-heart"></i></a></li>
                        <li><a href="Show more"><i class="fa-regular fa-eye"></i></a></li>
                    </ul>
                </div>
                <div class="product__item__content">
                    <a href=""><h3>Product name</h3></a>
                    <h4>Price: 300.000</h4>
                </div>
            </div>
            <div class="product__item">
                <div class="product__item__img">
                    <img src="https://htmldemo.net/lukani/lukani/assets/img/product/product1.jpg" alt="">
                    <ul class="flex-row-center-between">
                        <li><a href="Add to cart"><i class="fa-solid fa-cart-plus"></i></a></li>
                        <li><a href=""><i class="fa-solid fa-heart"></i></a></li>
                        <li><a href="Show more"><i class="fa-regular fa-eye"></i></a></li>
                    </ul>
                </div>
                <div class="product__item__content">
                    <a href=""><h3>Product name</h3></a>
                    <h4>Price: 300.000</h4>
                </div>
            </div>
        </div>

        <div class="product__pagination">
            <ul class="flex-row-center-between">
                <li><a href=""><i class="fa-solid fa-angles-left"></i></a></li>
                <li><a href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href=""><i class="fa-solid fa-angles-right"></i></a></li>
                
            </ul>
        </div>
    </div>
</div>

@endsection

@section('js')
    <script src="{{ asset('assets/js/shop.js') }}"></script>
@endsection