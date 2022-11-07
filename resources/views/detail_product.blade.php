@extends('layouts.shoplayout')

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/css/positive-zoom.css')}}">
<!-- Animate -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<link rel="stylesheet" href="{{asset('assets/css/detail_product.css')}}">
@endsection

@section('js')
    <script src="{{asset('assets/js/positive-zoom.js')}}"></script>
    <script src="{{asset('assets/js/detail_product.js')}}"></script>
    <script>
        positiveZoom.init('#slider-zoom')
    </script>
@endsection

@section('root')
<main class="inner-page">
    <div class="container">
        <div class="breadcrumb-area px-2 py-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="">Product</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <a href="">Card</a>
                    </li>
                </ol>
            </nav>
        </div>

        <!-- Product Details -->
        <div class="product-details mb-5 col-10 mx-auto">
            <div class="row mb-5">
                <div class="col-lg-6">
                    <div class="product-main-image">
                        <div id="slider-zoom" class="positive-gallery-slider">
                            <div class="side-img">
                                <img src="https://htmldemo.net/lukani/lukani/assets/img/product/productbig4.jpg" alt="" class="small-preview hover-pulse">
                                <img src="https://cf.shopee.vn/file/8d1b9c48987c870257f082360c1fbd09" alt="" class="small-preview hover-pulse">
                                <img src="https://htmldemo.net/lukani/lukani/assets/img/product/productbig4.jpg" alt="" class="small-preview hover-pulse">

                            </div>
                            <div class="zoom-image">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex flex-column justify-content-around h-100">
                        <h4 class="py-3 fs-2">Lorem ipsum dolor sit amet, consectetur adip</h4>
                        <div class="d-flex justify-content-between pb-3 pt-1">
                            <div class="d-flex align-items-center gap-4">
                                <div class="d-flex align-items-center">
                                    <span class="nh-rating">
                                        <span class="material-symbols-outlined wght-100">
                                            star
                                        </span>
                                        <span class="material-symbols-outlined wght-100">
                                            star
                                        </span>
                                        <span class="material-symbols-outlined wght-100">
                                            star
                                        </span>
                                        <span class="material-symbols-outlined wght-100">
                                            star
                                        </span>
                                        <span class="material-symbols-outlined wght-100">
                                            star
                                        </span>
                                        <span class="active" style="">
                                            <span class="material-symbols-outlined wght-100">
                                                star
                                            </span>
                                            <span class="material-symbols-outlined wght-100">
                                                star
                                            </span>
                                            <span class="material-symbols-outlined wght-100">
                                                star
                                            </span>
                                            <span class="material-symbols-outlined wght-100">
                                                star
                                            </span>
                                            <span class="material-symbols-outlined wght-100">
                                                star
                                            </span>
                                        </span>
                                    </span>
                                    <span class="fs-5 ms-2">
                                        0.0
                                    </span>
                                </div>
                                <div class="">
                                    <span class="fs-5 fw-semibold">
                                        234
                                    </span>
                                    <span class="fs-5 ">
                                        Đánh Giá
                                    </span>
                                </div>
                                <div class="">
                                    <span class="fs-5 fw-semibold">
                                        148
                                    </span>
                                    <span class="fs-5 ">
                                        Đã bán
                                    </span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-symbols-outlined text-secondary">
                                    flag
                                    </span>
                                <span class="fs-5 ">Tố cáo</span>
                            </div>
                        </div>
                        <div class=" my-3">
                            <span class="fs-3 text-danger">
                                <span class="">
                                    99.434
                                </span>
                                <span class="">
                                    VNĐ
                                </span>
                            </span>
                            <span class="text-decoration-line-through">
                                <span class="">
                                    999.999
                                </span>
                                <span class="">
                                    VNĐ
                                </span>
                            </span>
                            <div class="badge bg-danger mx-1">
                                <span class="fs-6">
                                    90% giảm
                                </span>
                            </div>
                        </div>
                        <div class="my-3">
                            <div class="fw-semibold fs-4 my-2">Quantity</div>
                            <div class="d-flex gap-2 ">
                                <span class="btn border" onclick="decQuantity()">-</span>
                                <input type="text" name="quantity" class="w-10 form-control text-center" min="1" max="99" value="1" >
                                <span class="btn border" onclick="incQuantity()">+</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <button class="btn d-flex align-items-center border border-primary m-3 gap-2 px-3 text-primary">
                                <span class="material-symbols-outlined">
                                    add_shopping_cart
                                    </span>
                                <span>Add to cart</span>
                            </button>
                            <button class="btn d-flex align-items-center border m-3 gap-2 px-3 bg-success-blur border-success text-success">
                                <span class="material-symbols-outlined">
                                    local_mall
                                    </span>
                                <span class="">
                                    Buy now
                                </span>
                            </button>
                            <button class="btn  d-flex align-items-center border m-3 gap-2 px-3 bg-danger text-white">
                                <span class="material-symbols-outlined">
                                    favorite
                                    </span>
                                <span class="">
                                    Add to wish list
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Describe -->
            <div class="border border-1 px-3 rounded-4">
                <div class="d-flex border-bottom">
                    <div class="px-4 py-2 tab pointer" content="#content-describe" onclick="changeContent(this)">
                        <span class="fw-bold fs-5">
                            Describe
                        </span>
                    </div>
                    <div class="px-4 py-2 tab pointer active" content="#content-review" onclick="changeContent(this)">
                        <span class="fw-bold fs-5">
                            Review
                        </span>
                    </div>
                </div>
                <div class="">
                    <div id="content-describe" class="tab-content">
                        <div class="py-4 px-2">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe sapiente molestias obcaecati maiores exercitationem sint enim vel quos odit inventore. Repudiandae, quasi sint illo ut aliquam fuga minima quod autem.
                                Soluta quas totam eius tempora in, minima quae ducimus. Sit, id fugit ipsum corporis veniam mollitia aperiam, sint unde quaerat, expedita ducimus deserunt earum officiis ullam reiciendis quae omnis excepturi!
                                In eveniet delectus consequatur exercitationem tempore deleniti perferendis nihil sapiente laboriosam eligendi? Provident corrupti hic vero, saepe optio, placeat dolore praesentium reprehenderit deserunt, velit ut sapiente laudantium eius at rerum?
                                Dignissimos debitis necessitatibus unde sint minima exercitationem quisquam veritatis modi quia labore explicabo commodi tempore, possimus sunt dicta velit repellendus, nostrum omnis earum ea dolore illo nam tenetur? Aliquam, a.
                                Omnis officia necessitatibus odio incidunt aliquam tempore, nobis quos nostrum ipsam dolorem, maiores culpa molestias cupiditate, modi repellendus temporibus consequatur quod? Alias nemo sapiente porro repellat adipisci nostrum vitae exercitationem.
                                Impedit id dignissimos quibusdam, dicta minus sunt, debitis natus totam distinctio nulla exercitationem dolores molestiae? Aspernatur, distinctio sunt officiis accusantium magni sint. Ipsum quisquam laboriosam delectus eius vel, totam consectetur.
                                Atque, modi ipsum. Ipsum est a animi ad, sed esse ex dignissimos quisquam ipsa accusantium omnis, officiis numquam quam, quod unde nam expedita iusto illo sunt consequatur asperiores hic perferendis.
                                Voluptatem at quaerat cumque tempore aliquid iusto quibusdam necessitatibus, reiciendis illo. Sit similique quam praesentium deserunt corporis tempore excepturi repellat accusantium nisi laboriosam ex quia, sapiente nemo esse. Possimus, consequatur.
                                Suscipit ea eaque nobis hic nulla minima at ad sequi nam unde porro mollitia, soluta similique dolor aspernatur atque consequatur dolores id nesciunt, perferendis itaque repellendus qui non cumque? Sed.
                                Perferendis deleniti quas incidunt ducimus eaque totam, ex praesentium illum sint vitae? Quae nulla corporis nostrum facere, quia reprehenderit vero ipsam exercitationem? Sapiente laboriosam vero voluptatum neque modi minima recusandae.</p>
                        </div>
                    </div>
                    <div class="tab-content active" id="content-review">
                        <div class="py-4 px-2">
                            <div class="row bg-success-blur py-2 rounded-4">
                                <div class="col-3">
                                    <div class="d-flex gap-1 justify-content-center align-items-center">
                                        <div class="fw-semibold fs-2 ms-2 align-items-center px-2 text-center">
                                            0.0
                                        </div>
                                        <div class="d-flex flex-column ">
                                            <span class="nh-rating">
                                                <span class="material-symbols-outlined fs-2 wght-100">
                                                    star
                                                </span>
                                                <span class="material-symbols-outlined fs-2 wght-100">
                                                    star
                                                </span>
                                                <span class="material-symbols-outlined fs-2 wght-100">
                                                    star
                                                </span>
                                                <span class="material-symbols-outlined fs-2 wght-100">
                                                    star
                                                </span>
                                                <span class="material-symbols-outlined fs-2 wght-100">
                                                    star
                                                </span>
                                                <span class="active" style="width: 80%;">
                                                    <span class="material-symbols-outlined fs-2 wght-100 fill-1">
                                                        star
                                                    </span>
                                                    <span class="material-symbols-outlined fs-2 wght-100 fill-1">
                                                        star
                                                    </span>
                                                    <span class="material-symbols-outlined fs-2 wght-100 fill-1">
                                                        star
                                                    </span>
                                                    <span class="material-symbols-outlined fs-2 wght-100 fill-1">
                                                        star
                                                    </span>
                                                    <span class="material-symbols-outlined fs-2 wght-100 fill-1">
                                                        star
                                                    </span>
                                                </span>
                                                
                                            </span>
                                            <span class="fs-5">
                                                4 nhận xét
                                            </span>
                                        </div>
                                    </div>
                                    <div class="px-2 my-2">
                                        <div class="d-flex justify-content-center align-items-center gap-2" >
                                            <span class="nh-rating">
                                                <span class="material-symbols-outlined fs-4 wght-100">
                                                    star
                                                </span>
                                                <span class="material-symbols-outlined fs-4 wght-100">
                                                    star
                                                </span>
                                                <span class="material-symbols-outlined fs-4 wght-100">
                                                    star
                                                </span>
                                                <span class="material-symbols-outlined fs-4 wght-100">
                                                    star
                                                </span>
                                                <span class="material-symbols-outlined fs-4 wght-100">
                                                    star
                                                </span>
                                                <span class="active" style="width: 100%;">
                                                    <span class="material-symbols-outlined fs-4 wght-100 fill-1">
                                                        star
                                                    </span>
                                                    <span class="material-symbols-outlined fs-4 wght-100 fill-1">
                                                        star
                                                    </span>
                                                    <span class="material-symbols-outlined fs-4 wght-100 fill-1">
                                                        star
                                                    </span>
                                                    <span class="material-symbols-outlined fs-4 wght-100 fill-1">
                                                        star
                                                    </span>
                                                    <span class="material-symbols-outlined fs-4 wght-100 fill-1">
                                                        star
                                                    </span>
                                                </span>
                                                
                                            </span>
                                            <div class="progress w-100" style="height: 10px">
                                                <div class="progress-bar w-75" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                            <div class="text-secondary">9</div>
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center gap-2" >
                                            <span class="nh-rating">
                                                <span class="material-symbols-outlined fs-4 wght-100">
                                                    star
                                                </span>
                                                <span class="material-symbols-outlined fs-4 wght-100">
                                                    star
                                                </span>
                                                <span class="material-symbols-outlined fs-4 wght-100">
                                                    star
                                                </span>
                                                <span class="material-symbols-outlined fs-4 wght-100">
                                                    star
                                                </span>
                                                <span class="material-symbols-outlined fs-4 wght-100">
                                                    star
                                                </span>
                                                <span class="active" style="width: 80%;">
                                                    <span class="material-symbols-outlined fs-4 wght-100 fill-1">
                                                        star
                                                    </span>
                                                    <span class="material-symbols-outlined fs-4 wght-100 fill-1">
                                                        star
                                                    </span>
                                                    <span class="material-symbols-outlined fs-4 wght-100 fill-1">
                                                        star
                                                    </span>
                                                    <span class="material-symbols-outlined fs-4 wght-100 fill-1">
                                                        star
                                                    </span>
                                                    <span class="material-symbols-outlined fs-4 wght-100 fill-1">
                                                        star
                                                    </span>
                                                </span>
                                                
                                            </span>
                                            <div class="progress w-100" style="height: 10px">
                                                <div class="progress-bar w-75" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                            <div class="text-secondary">9</div>
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center gap-2" >
                                            <span class="nh-rating">
                                                <span class="material-symbols-outlined fs-4 wght-100">
                                                    star
                                                </span>
                                                <span class="material-symbols-outlined fs-4 wght-100">
                                                    star
                                                </span>
                                                <span class="material-symbols-outlined fs-4 wght-100">
                                                    star
                                                </span>
                                                <span class="material-symbols-outlined fs-4 wght-100">
                                                    star
                                                </span>
                                                <span class="material-symbols-outlined fs-4 wght-100">
                                                    star
                                                </span>
                                                <span class="active" style="width: 60%;">
                                                    <span class="material-symbols-outlined fs-4 wght-100 fill-1">
                                                        star
                                                    </span>
                                                    <span class="material-symbols-outlined fs-4 wght-100 fill-1">
                                                        star
                                                    </span>
                                                    <span class="material-symbols-outlined fs-4 wght-100 fill-1">
                                                        star
                                                    </span>
                                                    <span class="material-symbols-outlined fs-4 wght-100 fill-1">
                                                        star
                                                    </span>
                                                    <span class="material-symbols-outlined fs-4 wght-100 fill-1">
                                                        star
                                                    </span>
                                                </span>
                                                
                                            </span>
                                            <div class="progress w-100" style="height: 10px">
                                                <div class="progress-bar w-75" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                            <div class="text-secondary">9</div>
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center gap-2" >
                                            <span class="nh-rating">
                                                <span class="material-symbols-outlined fs-4 wght-100">
                                                    star
                                                </span>
                                                <span class="material-symbols-outlined fs-4 wght-100">
                                                    star
                                                </span>
                                                <span class="material-symbols-outlined fs-4 wght-100">
                                                    star
                                                </span>
                                                <span class="material-symbols-outlined fs-4 wght-100">
                                                    star
                                                </span>
                                                <span class="material-symbols-outlined fs-4 wght-100">
                                                    star
                                                </span>
                                                <span class="active" style="width: 40%;">
                                                    <span class="material-symbols-outlined fs-4 wght-100 fill-1">
                                                        star
                                                    </span>
                                                    <span class="material-symbols-outlined fs-4 wght-100 fill-1">
                                                        star
                                                    </span>
                                                    <span class="material-symbols-outlined fs-4 wght-100 fill-1">
                                                        star
                                                    </span>
                                                    <span class="material-symbols-outlined fs-4 wght-100 fill-1">
                                                        star
                                                    </span>
                                                    <span class="material-symbols-outlined fs-4 wght-100 fill-1">
                                                        star
                                                    </span>
                                                </span>
                                                
                                            </span>
                                            <div class="progress w-100" style="height: 10px">
                                                <div class="progress-bar w-75" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                            <div class="text-secondary">9</div>
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center gap-2" >
                                            <span class="nh-rating">
                                                <span class="material-symbols-outlined fs-4 wght-100">
                                                    star
                                                </span>
                                                <span class="material-symbols-outlined fs-4 wght-100">
                                                    star
                                                </span>
                                                <span class="material-symbols-outlined fs-4 wght-100">
                                                    star
                                                </span>
                                                <span class="material-symbols-outlined fs-4 wght-100">
                                                    star
                                                </span>
                                                <span class="material-symbols-outlined fs-4 wght-100">
                                                    star
                                                </span>
                                                <span class="active" style="width: 20%;">
                                                    <span class="material-symbols-outlined fs-4 wght-100 fill-1">
                                                        star
                                                    </span>
                                                    <span class="material-symbols-outlined fs-4 wght-100 fill-1">
                                                        star
                                                    </span>
                                                    <span class="material-symbols-outlined fs-4 wght-100 fill-1">
                                                        star
                                                    </span>
                                                    <span class="material-symbols-outlined fs-4 wght-100 fill-1">
                                                        star
                                                    </span>
                                                    <span class="material-symbols-outlined fs-4 wght-100 fill-1">
                                                        star
                                                    </span>
                                                </span>
                                                
                                            </span>
                                            <div class="progress w-100" style="height: 10px">
                                                <div class="progress-bar w-50" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                            <div class="text-secondary">9</div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-9 d-flex align-items-center justify-content-center px-5">
                                    
                                    <div class="d-flex flex-wrap gap-3 justify-content-center align-items-center">
                                        <button class="border border-danger px-4 py-1">All (10)</button>
                                        <button class="border border-danger px-4 py-1">5 star (2)</button>
                                        <button class="border border-danger px-4 py-1">4 star (1)</button>
                                        <button class="border border-danger px-4 py-1">3 star (2)</button>
                                        <button class="border border-danger px-4 py-1">2 star (2)</button>
                                        <button class="border border-danger px-4 py-1">1 star (3)</button>
                                        <button class="border border-danger px-4 py-1">Have image/video (5)</button>
                                    </div>
                                    
                                </div>

                            </div>
                            <div class="row py-4 mt-4 border-bottom">
                                <div class="col-3 px-4">
                                    <div class="d-flex gap-2 align-items-center">
                                        <img src="https://cf.shopee.vn/file/7ba6af577ff929317f4436c12d791280_tn" alt="" class="rounded-circle" width="60" height="60">
                                        <div class="">
                                            <h5 class="fs-4 my-0">Bảo đẹp trai</h5>
                                            <div class="text-secondary">Đã gia nhập 5 năm trước</div>
                                        </div>
                                    </div>
                                    <div class="py-3 d-flex flex-column justify-content-center">
                                        <div class="d-flex align-items-center gap-1">
                                            <span class="material-symbols-outlined wght-100 fs-4 pt-1 text-secondary">
                                                rate_review
                                                </span>
                                            <span><span class="text-secondary">Đã viết:</span> 14 bài đánh giá</span>
                                        </div>
                                        <div class="d-flex align-items-center gap-1">
                                            <span class="material-symbols-outlined wght-100 fs-4 pt-1 text-secondary">
                                                thumb_up
                                                </span>
                                            <span><span class="text-secondary">Đã nhận</span> 20000 lượt cảm ơn</span>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-9">
                                    <div class="d-flex align-items-center gap-2 " >
                                        <span class="nh-rating">
                                            <span class="material-symbols-outlined fs-4 wght-100">
                                                star
                                            </span>
                                            <span class="material-symbols-outlined fs-4 wght-100">
                                                star
                                            </span>
                                            <span class="material-symbols-outlined fs-4 wght-100">
                                                star
                                            </span>
                                            <span class="material-symbols-outlined fs-4 wght-100">
                                                star
                                            </span>
                                            <span class="material-symbols-outlined fs-4 wght-100">
                                                star
                                            </span>
                                            <span class="active" style="width: 80%;">
                                                <span class="material-symbols-outlined fs-4 wght-100 fill-1">
                                                    star
                                                </span>
                                                <span class="material-symbols-outlined fs-4 wght-100 fill-1">
                                                    star
                                                </span>
                                                <span class="material-symbols-outlined fs-4 wght-100 fill-1">
                                                    star
                                                </span>
                                                <span class="material-symbols-outlined fs-4 wght-100 fill-1">
                                                    star
                                                </span>
                                                <span class="material-symbols-outlined fs-4 wght-100 fill-1">
                                                    star
                                                </span>
                                            </span>
                                            
                                        </span>
                                        <div class="fw-semibold">Hài lòng</div>
                                    </div>
                                    <div class="py-3">
                                        <div class="">
                                            Con kiu nhìn cũng ok (:V<br>
                                            Tặng quà sinh nhật cho con bạn mình rất thích<br>
                                            5🌟🌟🌟🌟🌟 cho shop <br>
                                            Sẽ ủng hộ lần sau <br>
                                        </div>
                                        <div class="d-flex flex-wrap gap-4 py-3">
                                            <img src="https://i.picsum.photos/id/345/500/600.jpg?hmac=2y4S3pHm9jdFNGsKEsLY5U0a13mBbWd7DieIaUT8hY0" alt="" class="rounded-3" style="object-fit: cover ; width: 125px; height:125px;">
                                            <img src="https://i.picsum.photos/id/345/500/600.jpg?hmac=2y4S3pHm9jdFNGsKEsLY5U0a13mBbWd7DieIaUT8hY0" alt="" class="rounded-3" style="object-fit: cover ; width: 125px; height:125px;">
                                            <img src="https://i.picsum.photos/id/345/500/600.jpg?hmac=2y4S3pHm9jdFNGsKEsLY5U0a13mBbWd7DieIaUT8hY0" alt="" class="rounded-3" style="object-fit: cover ; width: 125px; height:125px;">
                                            <img src="https://i.picsum.photos/id/345/500/600.jpg?hmac=2y4S3pHm9jdFNGsKEsLY5U0a13mBbWd7DieIaUT8hY0" alt="" class="rounded-3" style="object-fit: cover ; width: 125px; height:125px;">
                                            <img src="https://i.picsum.photos/id/345/500/600.jpg?hmac=2y4S3pHm9jdFNGsKEsLY5U0a13mBbWd7DieIaUT8hY0" alt="" class="rounded-3" style="object-fit: cover ; width: 125px; height:125px;">
                                            
                                        </div>
                                    </div>
                                    <div class="d-flex gap-3">
                                        <button class="text-primary border border-primary d-flex align-items-center px-4 py-2 gap-2 rounded-3 bg-white">
                                            <span class="material-symbols-outlined fs-4 wght-300">
                                                thumb_up
                                                </span>
                                            <span class="fw-semibold">Useful (2)</span>
                                        </button>
                                        <button class="text-warning border border-warning d-flex align-items-center px-4 py-2 gap-2 rounded-3 bg-white" onclick="showCommentReview(1)">
                                            <span class="material-symbols-outlined fs-4 wght-300">
                                                comment
                                                </span>
                                            <span class="fw-semibold">Comment</span>
                                        </button>
                                    </div>
                                    <div class="py-2">
                                        <div class="py-2 d-flex">
                                            <img src="https://cf.shopee.vn/file/7ba6af577ff929317f4436c12d791280_tn" alt="" style="object-fit: cover;" class="rounded-circle" width="40" height="40">
                                            <div class="rounded-3 bg-secondary w-100 mx-3 px-2">
                                                <div class="mx-1">
                                                    <span class="fw-semibold fs-6">Bảo đẹp trai</span>
                                                    <span class="text-secondary fs-7">Đến dây 4 tháng trước</span>
                                                </div>
                                                <div class="fs-6 my-2">
                                                    Xưởng Sỉ Gấu Bông cảm ơn quý khách hàng đã tin tưởng và ủng hộ shop !  Shop thường xuyên cập nhật sản phẩm mới và chương trình sale nên Khách iu hãy bấm theo dõi để nhận được thông báo. Nếu trong quá trình nhận hàng và sử dụng có vấn đề hoặc thắc mắc cần tư vấn hãy nhắn tin trực tiếp với shop để  được hỗ trợ và tư vấn nha!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="py-2 d-flex comment-review-1 d-none animate__animated">
                                            <img src="https://cf.shopee.vn/file/7ba6af577ff929317f4436c12d791280_tn" alt="" style="object-fit: cover;" class="rounded-circle" width="40" height="40">
                                            <div class="rounded-3 bg-secondary w-100 mx-3 px-2">
                                                <div class="mx-1">
                                                    <span class="fw-semibold fs-6">Bảo đẹp trai</span>
                                                </div>
                                                <div class="fs-6 my-2 position-relative">
                                                    <input type="text" class="form-control" placeholder="Bình luận đánh giá này" style="height: 6rem"> 
                                                    <button class="position-absolute top-50 end-0-5 rounded-circle d-flex align-items-center p-2">
                                                        <span class="material-symbols-outlined">
                                                            send
                                                            </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="fs-6 fst-italic text-center">
                                    Lưu ý: chỉ những người đã mua hàng mới có thể đánh giá sản phẩm này
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Relative product -->
        <div class="px-4">
            <div class="d-flex align-items-center">
                <h2>Các sản phẩm liên quan</h2>
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
            </div>
        </div>
    </div>

</main>

@endsection