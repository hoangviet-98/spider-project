@extends('layouts.master_frontend')
@section('title')
    <title>Product Detail</title>
@endsection
@section('js')
    @parent
    <script src="customer/js/product/jquery.elevateZoom-3.0.8.min.js"></script>
    <script src="customer/js/product/jquery.scrollUp.min.js"></script>
    <script src="customer/js/product/modernizr-2.8.3.min.js"></script>
    <script src="customer/js/product/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection
@section('css')
    @parent
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="customer/css/productindex.css">
    <style>
        div.stars {
            width: 270px;
            display: inline-block;
        }

        input.star { display: none; }

        label.star {
            padding: 1px;
            font-size: 16px;
            color: #444;
            transition: all .2s;
        }

        input.star:checked ~ label.star:before {
            content: '\f005';
            color: #FD4;
            transition: all .25s;
        }

        input.star-5:checked ~ label.star:before {
            color: #FE7;
            text-shadow: 0 0 20px #952;
        }

        input.star-1:checked ~ label.star:before { color: #F62; }

        label.star:hover { transform: rotate(-15deg) scale(1.3); }

        label.star:before {
            content: '\f006';
            font-family: FontAwesome;
        }

        #sticky-banner-target .right {
            position: absolute;
            right: 15px;
        }
    </style>
@endsection
@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="container-inner">
                        <ul>
                            <li class="home">
                                <a href="index.html">Home</a>
                                <span><i class="fa fa-angle-right"></i></span>
                            </li>
                            <li class="category3"><span>Shop List</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->
    <!-- product-details Area Start -->
    <div class="product-details-area">
        <div id="sticky-banner-target">
        <a>dddddddddddd</a>
        <a class="right" href="">
        <img src="http://127.0.0.1:8000/uploads//2020/09/15/2020-09-15__2444282869e186d37857f05e9d23abea.jpg"></a>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="zoomWrapper">
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img style="width: 400px; height: auto"
                                     src="{{ asset(pare_url_file($productDetail->pro_avatar)) }}" alt=""/>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="product-list-wrapper">
                        <div class="single-product">
                            <div class="product-content">
                                <h2 class="product-name"><a href="#">{{$productDetail->pro_name}}</a></h2>
                                <div class="rating-price">
                                    <div class="stars">
                                        <form action="">
                                            <input class="star star-5" id="star-5" type="radio" name="star"/>
                                            <label class="star star-5" for="star-5"></label>
                                            <input class="star star-4" id="star-4" type="radio" name="star"/>
                                            <label class="star star-4" for="star-4"></label>
                                            <input class="star star-3" id="star-3" type="radio" name="star"/>
                                            <label class="star star-3" for="star-3"></label>
                                            <input class="star star-2" id="star-2" type="radio" name="star"/>
                                            <label class="star star-2" for="star-2"></label>
                                            <input class="star star-1" id="star-1" type="radio" name="star"/>
                                            <label class="star star-1" for="star-1"></label>
                                        </form>
                                    </div>
                                    <div class="price-boxes">
                                        <span class="new-price">{{number_format($productDetail->pro_price)}} VND</span>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <p>{{$productDetail->pro_description}}</p>
                                </div>
                                <p class="availability in-stock">Availability: <span>In stock</span></p>
                                <div class="actions-e">
                                    <div class="action-buttons-single">
                                        <div class="inputx-content">
                                            <label for="qty">Quantity:</label>
                                            <input type="text" name="qty" id="qty" maxlength="12" value="1" title="Qty"
                                                   class="input-text qty">
                                        </div>
                                        <div class="price-boxes">
                                            <span class="new-price">{{number_format($productDetail->pro_number)}}</span>
                                        </div>
                                        <div class="add-to-cart">
                                            <a style="border: 1px solid red" href="{{route('add.shopping.cart', $productDetail->id)}}"
                                               class="add_to_cart">ADD TO CART</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="single-product-tab">
                    <!-- Nav tabs -->
                    <ul class="details-tab">
                        <li class="active"><a href="#home" data-toggle="tab">Description</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <div class="product-tab-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est
                                    tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis
                                    justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id
                                    nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum
                                    metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. </p>
                                <p>Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien
                                    libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi
                                    posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit
                                    et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget.
                                    Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis,
                                    arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec
                                    augue.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product-details Area end -->
    <!-- product section start -->
@endsection
