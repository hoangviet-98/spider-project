@extends('layouts.master_frontend')
@section('title')
    <title>Product Detail</title>
@endsection
@section('js')
    @parent
    <!-- <script src="customer/js/product/jquery.elevateZoom-3.0.8.min.js"></script> -->
    <!-- <script src="customer/js/product/jquery.scrollUp.min.js"></script> -->
    <!-- <script src="customer/js/product/modernizr-2.8.3.min.js"></script> -->
    <script src="customer/js/product/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@endsection
@section('css')
    @parent
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="customer/css/productindex.css">
    <link rel="stylesheet" href="customer/css/product-detail.css">
    <style>


    </style>
@endsection
@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="container-inner" style="margin: 10px 0 20px 0">
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
{{--                <div class="col-md-7 col-sm-7 col-xs-12">--}}
{{--                    <div class="product-li st-wrapper">--}}
{{--                        <div class="single-product">--}}
{{--                            <div class="product-content">--}}
{{--                                <h1 class="product-name"><a href="#">{{$productDetail->pro_name}}</a></h1>--}}
{{--                                <div class="rating-price">--}}
{{--                                    <div class="stars">--}}
{{--                                        <form action="">--}}
{{--                                            <input class="star star-5" id="star-5" type="radio" name="star"/>--}}
{{--                                            <label class="star star-5" for="star-5"></label>--}}
{{--                                            <input class="star star-4" id="star-4" type="radio" name="star"/>--}}
{{--                                            <label class="star star-4" for="star-4"></label>--}}
{{--                                            <input class="star star-3" id="star-3" type="radio" name="star"/>--}}
{{--                                            <label class="star star-3" for="star-3"></label>--}}
{{--                                            <input class="star star-2" id="star-2" type="radio" name="star"/>--}}
{{--                                            <label class="star star-2" for="star-2"></label>--}}
{{--                                            <input class="star star-1" id="star-1" type="radio" name="star"/>--}}
{{--                                            <label class="star star-1" for="star-1"></label>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                    <div class="price-boxes">--}}
{{--                                        <span class="new-price" style="color: red">{{number_format($productDetail->pro_price)}} VND</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="product-desc">--}}
{{--                                    <p>{{$productDetail->pro_description}}</p>--}}
{{--                                </div>--}}
{{--                                <div class="pro-view">--}}
{{--                                    <p>--}}
{{--                                        <span>View :&nbsp</span>--}}
{{--                                        <span>{{$productDetail->pro_view}}</span>--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                                <p class="availability in-stock">Quantity remaining in stock:{{number_format($productDetail->pro_number)}} </p>--}}
{{--                                <div class="actions-e">--}}
{{--                                    <div class="action-buttons-single">--}}
{{--                                        <div class="inputx-content">--}}
{{--                                            <label for="qty">Quantity:</label>--}}
{{--                                            <input type="text" name="qty" id="qty" maxlength="12" value="1" title="Qty"--}}
{{--                                                   class="input-text qty">--}}
{{--                                        </div>--}}
{{--                                        <div class="add-to-cart">--}}
{{--                                            <a style="border: 1px solid red" href="{{route('add.shopping.cart', $productDetail->id)}}"--}}
{{--                                               class="add_to_cart">ADD TO CART</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <aside class="product_info">
                    <div class="arena_price">
                        <strong>9.000.000</strong>
                    </div>
                    <div class="area_promotion zero">
                        <strong data-count="4"
                        >Khuyến mãi
                            <i
                            >Giá và khuyến mãi dự kiến áp dụng đến
                                20/09</i
                            ></strong
                        >
                        <div class="infopr">
                                <span
                                    class="pro596803"
                                    data-g="WebNote"
                                    data-date="9/30/2020 11:07:00 PM"
                                    data-return=""
                                    data-fromvalue="0"
                                    data-tovalue="10"
                                >
                                    Tặng 2 suất mua Đồng hồ thời trang giảm 40%
                                    (không áp dụng thêm khuyến mãi khác)
                                    <a
                                        href="https://www.thegioididong.com/tin-tuc/san-dong-ho-deo-tay-thoi-thuong-gia-re-het-hon-1266764"
                                        target="_blank"
                                    >(click xem chi tiết)</a
                                    >
                                </span>
                            <span
                                class="pro590574"
                                data-g="WebNote"
                                data-date="9/30/2020 11:07:00 PM"
                                data-return=""
                                data-fromvalue="0"
                                data-tovalue="10"
                            >
                                    Phụ kiện mua kèm giảm 20% (không áp dụng phụ
                                    kiện hãng, không áp dụng đồng thời KM khác)
                                </span>
                        </div>
                        <div class="area_order area_orderM">
                            <a
                                id="mua-ngay"
                                href="/them-vao-gio-hang?productId=213591&amp;isTransferContactsOrGuide=true&amp;isNoteMoreColorProduct=true&amp;noteMoreProductCodes=0131491002017,0131491002018,0131491002048,"
                                class="buy_now"
                                data-value="213591"
                            ><b>Mua ngay</b
                                ><span
                                >Giao tận nơi hoặc nhận tại siêu
                                        thị</span
                                ></a
                            >
                        </div>
                        <div class="callorder">
                            <div class="ct">
                                    <span
                                    >Gọi đặt mua:
                                        <a href="tel:0965158092">0965158092</a>
                                    </span>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="col-md-12"
            style="display: block;
            overflow: hidden;
            border-top: 1px solid #e4e4e4;
            margin-top: 15px;">
                <div class="single-product-tab">
                <h2 style="color: #1B1B9D;
    line-height: 29px;
    margin-top: 30px;
    font-size: 20px;
">Đặc điểm nổi bật của Acer Aspire 3 A315 34 P26U N5030/4GB/256GB/Win10 (NX.HE3SV.00H)</h2>
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
            <div class="product" style="text-align: center; font-family: Open Sans, sans-serif;">
                @if (isset($productSuggests))
                    <div class="container">
                        <div class="area" style="border-top: 1px solid #e4e4e4; overflow: hidden">
                            <h2>The same product.
                            </h2>
                        </div>
                        <div class="row">
                            <div class="all-singlepost">
                                <!-- single latestpost start -->
                                @foreach($productSuggests as $suggests)
                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <div class="single-post" style="margin-bottom: 40px">
                                            <div class="post-thumb">
                                                <a href="{{route('get.detail.product', [$suggests->pro_slug, $suggests->id])}}">
                                                    <img style="width: 250px; height: auto"
                                                         src="{{ asset(pare_url_file($suggests->pro_avatar)) }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="post-thumb-info">
                                                <div class="post-time">
                                                    <a href="#">Beauty</a>
                                                    <span>/</span>
                                                    <span>Post by</span>
                                                    <span>BootExperts</span>
                                                </div>
                                                <div class="postexcerpt">
                                                    <p style="height: 40px;  text-overflow: ellipsis;">{{$suggests->pro_name}}</p>
                                                    <hr>
                                                    <a href="{{route('add.shopping.cart', $suggests->id)}}"
                                                       class="add_to_cart">ADD TO CART</a></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- product-details Area end -->
    <!-- product section start -->
@endsection
