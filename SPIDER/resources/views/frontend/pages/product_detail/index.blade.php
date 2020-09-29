@extends('layouts.master_frontend')

@section('title')
    <title>Product Detail</title>
@endsection

@section('js')
    @parent
    <!-- <script src="customer/js/product/jquery.elevateZoom-3.0.8.min.js"></script> -->
    <!-- <script src="customer/js/product/jquery.scrollUp.min.js"></script> -->
    <!-- <script src="customer/js/product/modernizr-2.8.3.min.js"></script> -->
{{--    <script src="customer/js/product/main.js"></script>--}}
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">

    <script type="text/javascript">
        $(function (){
           let listStart = $(".list-start .fa");

            listRatingText = {
                1: 'Khong thich',
                2: 'Tam dc',
                3: 'Binh thuong',
                4: 'Rat tot',
                5: 'Qua tuyet voi',
            };

           listStart.mouseover(function (){
                let $this = $(this);
                let number = $this.attr('data-key');
                listStart.removeClass('rating_active');
                $.each(listStart, function (key, value){
                   if (key + 1 <= number)
                   {
                       $(this).addClass('rating_active')
                   }
                });
                $(".list-text").text('').text(listRatingText[number]).show();
           });

           $(".js_rating_action").click(function (event) {
              event.preventDefault();
              $(".form_rating").slideToggle('slow')

              if ($(".form_rating").hasClass('hide'))
              {
                  $(".form_rating").addClass('active').removeClass('hide');
              }else {
                  $(".form_rating").addClass('hide').removeClass('active');
              }
           });
        });
    </script>
@endsection
@section('css')
    @parent
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="customer/css/productindex.css">
{{--    <link rel="stylesheet" href="customer/css/product-detail.css">--}}
    <link rel="stylesheet" href="customer/css/media.css">
    <link rel="stylesheet" href="customer/css/product_detail.css">

    <style>
        .list-start i:hover {
            cursor: pointer;
        }

        .list-text {
            display: inline-block;
            margin-left: 10px;
            position: relative;
            background: #52b858;
            color: #fff;
            padding: 2px 8px;
            box-sizing: border-box;
            font-size: 12px;
            border-radius: 2px;
            display: none;
        }

        .list-text:after {
            right: 100%;
            top: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            border-color: rgb(82,184,88,0);
            border-right-color: #52b858;
            border-width: 6px;
            margin-top: -6px;
        }

        .list-start .rating_active {
            color: #ff9705;
        }

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
{{--    <!-- Main -->--}}
    <div class="product-details-area">
        <div id="sticky-banner-target">
        </div>
                <div class="Container-itwfbd-0 jFkAwY">
                    <div
                        itemscope=""
                        itemtype="https://schema.org/Product"
                        class="indexstyle__Wrapper-qd1z2k-0 gQLVSm"
                    >
                        <meta
                            itemprop="url"
                            content="https://tiki.vn/ban-phim-co-day-dell-kb216-den-hang-chinh-hang-p646020.html"
                        />
                        <meta
                            itemprop="image"
                            content="https://salt.tikicdn.com/cache/w390/media/catalog/product/2/3/23884_ban_phim_dell_kb216b_01.u2409.d20170517.t091608.808367.jpg"
                        />
                        <div class="indexstyle__ProductImages-qd1z2k-1 kQvKqX">
                            <div class="group-images">
                                <div class="images">
                                    <a class="active">
                                        <div
                                            alt="Bàn Phím Có Dây Dell KB216 - Đen - Hàng Chính Hãng"
                                            src="https://salt.tikicdn.com/cache/w80/media/catalog/product/2/3/23884_ban_phim_dell_kb216b_01.u2409.d20170517.t091608.808367.jpg"
                                        >
                                            <div
                                                src="https://salt.tikicdn.com/cache/w80/media/catalog/product/2/3/23884_ban_phim_dell_kb216b_01.u2409.d20170517.t091608.808367.jpg"
                                                class="PictureV2__StyledWrapImage-tfuu67-0 jIKzUR"
                                            >
                                                <img
                                                    src="https://salt.tikicdn.com/cache/w80/media/catalog/product/2/3/23884_ban_phim_dell_kb216b_01.u2409.d20170517.t091608.808367.jpg"
                                                    alt="Bàn Phím Có Dây Dell KB216 - Đen - Hàng Chính Hãng"
                                                    class="PictureV2__StyledImage-tfuu67-1 Dozqv"
                                                />
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="thumbnail">
                                    <div class="ImageLens__Wrapper-uaw433-0 jcyqbC">
                                        <div class="container">
                                            <img
                                                style="width: 390px; height: 390px"
                                                src="{{ asset(pare_url_file($productDetail->pro_avatar)) }}" alt=""/>
                                        </div>
                                    </div>
                                    <p>
                                        <svg
                                            fill="currentColor"
                                            preserveAspectRatio="xMidYMid meet"
                                            height="1em"
                                            width="1em"
                                            viewBox="0 0 40 40"
                                            style="vertical-align: middle"
                                        >
                                            <g>
                                                <path
                                                    d="m24.4 17.9v1.4q0 0.3-0.3 0.5t-0.5 0.2h-5v5q0 0.3-0.2 0.5t-0.5 0.2h-1.4q-0.3 0-0.5-0.2t-0.2-0.5v-5h-5q-0.3 0-0.5-0.2t-0.2-0.5v-1.4q0-0.3 0.2-0.5t0.5-0.3h5v-5q0-0.2 0.2-0.5t0.5-0.2h1.4q0.3 0 0.5 0.2t0.2 0.5v5h5q0.3 0 0.5 0.3t0.3 0.5z m2.8 0.7q0-4.2-2.9-7.1t-7.1-2.9-7 2.9-3 7.1 2.9 7 7.1 3 7.1-3 2.9-7z m11.4 18.5q0 1.2-0.8 2.1t-2 0.8q-1.2 0-2-0.8l-7.7-7.7q-4 2.8-8.9 2.8-3.2 0-6.1-1.3t-5-3.3-3.4-5-1.2-6.1 1.2-6.1 3.4-5.1 5-3.3 6.1-1.2 6.1 1.2 5 3.3 3.4 5.1 1.2 6.1q0 4.9-2.7 8.9l7.6 7.6q0.8 0.9 0.8 2z"
                                                ></path>
                                            </g>
                                        </svg>
                                        Rê chuột lên hình để phóng to
                                    </p>
                                </div>
                            </div>

                            <div
                                id="ants-banner-1601363965391"
                                class="9945386740"
                                data-tiki-zone-id="9945386740"
                                style="
                            display: flex;
                            flex-direction: column;
                            -webkit-box-pack: center;
                            justify-content: center;
                            -webkit-box-align: center;
                            align-items: center;
                            margin: 40px 0px;
                        "
                            ></div>
                        </div>
                        <div class="indexstyle__ProductContent-qd1z2k-2 hyGdiA">
                            <div class="header border-bottom">
                                <h1 class="title" itemprop="name">
                                    <div class="icon-inline-with-title">
                                        <a href="#"
                                        ><img
                                                src="https://salt.tikicdn.com/ts/upload/e9/68/49/50ac83c9f95bd008cc840e638f0f5791.png"
                                                alt="tikinow"
                                            /></a>
                                    </div>
                                    Bàn Phím Có Dây Dell KB216 - Đen - Hàng Chính Hãng
                                </h1>
                                <div
                                    itemprop="aggregateRating"
                                    itemscope=""
                                    itemtype="http://schema.org/AggregateRating"
                                >
                                    <meta itemprop="ratingValue" content="4.6" />
                                    <meta itemprop="ratingCount" content="747" />
                                    <meta itemprop="bestRating" content="5" />
                                    <meta itemprop="worstRating" content="1" />
                                </div>
                                <div class="indexstyle__Review-qd1z2k-3 kYNzX">
                                    <p
                                        style="font-size: 17px"
                                        class="Stars__Wrapper-sc-1t6kjxa-0 iQZcjJ"
                                    >
                                        <i class="icomoon icomoon-star"></i
                                        ><i class="icomoon icomoon-star"></i
                                        ><i class="icomoon icomoon-star"></i
                                        ><i class="icomoon icomoon-star"></i
                                        ><span class="half-star"
                                        ><i class="icomoon icomoon-star"></i
                                            ><i class="icomoon icomoon-star"></i
                                            ></span>
                                    </p>
                                    <a class="number">(Xem 747 đánh giá)</a>
                                </div>
                                <div class="bestseller">
                                    <i class="icon prize"></i>
                                    <p>
                                <span>
                                    Đứng thứ
                                    <!-- -->1
                                </span>
                                        trong<!-- -->
                                        <a
                                            href="/bestsellers-month/ban-phim-van-phong/c1830"
                                        >
                                            Top 100
                                            <!-- -->Bàn Phím Văn Phòng<!-- -->
                                            bán chạy tháng này
                                        </a>
                                    </p>
                                </div>
                                <div class="brand">
                                    <div
                                        itemprop="brand"
                                        itemscope=""
                                        itemtype="http://schema.org/Brand"
                                    >
                                        <meta itemprop="name" content="Dell" />
                                        <meta
                                            itemprop="url"
                                            content="/thuong-hieu/dell.html"
                                        />
                                    </div>
                                    <h6>
                                        Thương hiệu:
                                        <a href="/thuong-hieu/dell.html">Dell</a>
                                    </h6>
                                    <h6>
                                        SKU: <span itemprop="sku">8423800541641</span>
                                    </h6>
                                </div>
                            </div>
                            <div class="body">
                                <div class="summary">
                                    <div
                                        class="left"
                                        itemprop="offers"
                                        itemscope=""
                                        itemtype="http://schema.org/Offer"
                                    >
                                        <link
                                            itemprop="availability"
                                            href="http://schema.org/InStock"
                                        />
                                        <meta itemprop="priceCurrency" content="VND" />
                                        <meta itemprop="price" content="140000" />
                                        <meta
                                            itemprop="url"
                                            content="https://tiki.vn/ban-phim-co-day-dell-kb216-den-hang-chinh-hang-p646020.html"
                                        />

                                        <div class="group">
                                            <div class="price-and-icon">
                                                <p class="price">
                                                    140.000<!-- -->
                                                    ₫
                                                </p>
                                            </div>
                                            <p class="original-price first-child">
                                                Tiết kiệm:
                                                <span> 44<!-- -->% </span>
                                                (<!-- -->110.000<!-- -->
                                                ₫)
                                            </p>
                                            <p class="original-price">
                                                Giá thị trường:
                                                <!-- -->250.000<!-- -->
                                                ₫
                                            </p>
                                            <div
                                                class="DealCountDown__Wrapper-sc-5xee5y-0 dbKVuT"
                                            >
                                                <p class="timer">
                                                    Khuyến mãi kết thúc sau<span>
                                                0 </span
                                                    >ngày<span> 01 </span
                                                    ><span> : </span><span> 28 </span
                                                    ><span> : </span><span> 20 </span>
                                                </p>
                                                <div class="ordered">
                                                    <p class="text">Đã bán 5</p>
                                                    <div class="process-bar">
                                                        <div
                                                            class="process"
                                                            style="width: 25%"
                                                        ></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="group border-top">
                                            <ul class="list">
                                                <li>Cổng giao tiếp USB</li>
                                                <li>Màu đen bóng</li>
                                                <li>
                                                    Có đường thoát nước lớn hơn giúp
                                                    việc thoát nước dễ dàng nhanh chóng,
                                                    không đọng nước trên bàn phím
                                                </li>
                                                <li>Dây 2m</li>
                                                <li>
                                                    Có 6 miếng đệm cao su phía dưới bán
                                                    phím để tránh trượt trong quá trình
                                                    sử dụng
                                                </li>
                                                <li>
                                                    Các phím được bố trí theo công nghệ
                                                    Zero Degree Titl không gây tiếng ồn
                                                    khi sử dụng
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="group border-top">
                                            <div
                                                class="indexstyle__AddToCart-qd1z2k-8 dJbIjB"
                                            >
                                                <div
                                                    style="
                                                margin-top: -7px;
                                                margin-right: 20px;
                                            "
                                                    class="QualityInput__Wrapper-sc-15mlmyf-0 fXfceZ"
                                                >
                                                    <p class="label">Số lượng:</p>
                                                    <div class="group-input">
                                                        <button>-</button
                                                        ><input
                                                            type="text"
                                                            value="1"
                                                            class="input"
                                                        /><button>+</button>
                                                    </div>
                                                </div>
                                                <div class="group-button">
                                                    <button
                                                        class="btn btn-add-to-cart"
                                                        admicro-data-event="GET_VALUE"
                                                        admicro-data-auto="1"
                                                        admicro-data-order="false"
                                                    >
                                                <span
                                                    class="tikicon icon-add-to-cart2x"
                                                ></span
                                                >Chọn mua
                                                    </button>
                                                </div>
                                                <button
                                                    class="btn-add-favorite"
                                                    admicro-data-event="GET_VALUE"
                                                    admicro-data-auto="1"
                                                    admicro-data-order="false"
                                                >
                                            <span
                                                class="icomoon icomoon-heart-o"
                                            ></span
                                            ><span class="tooltip"
                                                    >Thêm vào yêu thích</span
                                                    >
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="DeliveryZone__StyledDeliveryZoneEmpty-sc-1maxvle-1 gQPDbi"
                                        >
                                            <div class="inner">
                                                Bạn ơi hãy
                                                <span>NHẬP ĐỊA CHỈ</span> nhận hàng để
                                                được dự báo thời gian &amp; chi phí giao
                                                hàng một cách chính xác nhất.
                                            </div>
                                        </div>
                                        <div
                                            class="ProductReport__Wrapper-sc-1pdz2xs-0 beLPHp"
                                        ></div>
                                    </div>

                                    <div class="rightLike">
                                        <div class="group">
                                            <div
                                                class="indexstyle__CurrentSeller-qd1z2k-9 joYxsO"
                                            >
                                                <div class="seller-info">
                                                    <i class="tikicon icon-store"></i>
                                                    <div>
                                                        <a
                                                            href="https://tiki.vn/cua-hang/tiki-trading"
                                                            class="seller-name"
                                                        >Tiki Trading</a
                                                        >
                                                        <p class="seller-description">
                                                            Cam kết chính hiệu 100%
                                                        </p>
                                                    </div>
                                                </div>
                                                <a
                                                    href="https://tiki.vn/cua-hang/tiki-trading"
                                                    class="btn-view-shop"
                                                >Xem shop</a
                                                >
                                                <div class="seller-specification">
                                                    <i
                                                        class="tikicon icon-hoan-tien-2"
                                                    ></i>
                                                    <div>
                                                        <div class="text">
                                                            <b>Tiki hoàn tiền 111% </b>
                                                            <div class="tooltip">
                                                                <i
                                                                    class="tikicon icon-info-grey"
                                                                    style="
                                                                margin-right: 0;
                                                            "
                                                                ></i>
                                                                <p class="view">
                                                                    Chính sách bồi
                                                                    thường
                                                                    <a
                                                                        target="_blank"
                                                                        href="https://drive.google.com/file/d/1po3r6qApp-q7JDB5kwGKujVtvInfO-ih/view?usp=sharing"
                                                                    >Xem thêm</a
                                                                    >
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="text">
                                                            Nếu phát hiện hàng giả
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="social-buttons">
                                            <div
                                                class="fb-like fb_iframe_widget"
                                                data-href="/ban-phim-co-day-dell-kb216-den-hang-chinh-hang-p646020.html?spid=11605007"
                                                data-width=""
                                                data-layout="button_count"
                                                data-action="like"
                                                data-size="small"
                                                data-show-faces="true"
                                                data-share="true"
                                                fb-xfbml-state="rendered"
                                                fb-iframe-plugin-query="action=like&amp;app_id=220558114759707&amp;container_width=0&amp;href=https%3A%2F%2Ftiki.vn%2Fban-phim-co-day-dell-kb216-den-hang-chinh-hang-p646020.html%3Fspid%3D11605007&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true&amp;size=small&amp;width="
                                            >
                                        <span
                                            style="
                                                vertical-align: bottom;
                                                width: 128px;
                                                height: 20px;
                                            "
                                        ><iframe
                                                name="f368b0f2f31967c"
                                                width="1000px"
                                                height="1000px"
                                                data-testid="fb:like Facebook Social Plugin"
                                                title="fb:like Facebook Social Plugin"
                                                frameborder="0"
                                                allowtransparency="true"
                                                allowfullscreen="true"
                                                scrolling="no"
                                                allow="encrypted-media"
                                                src="https://www.facebook.com/v3.1/plugins/like.php?action=like&amp;app_id=220558114759707&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df14199e236bd034%26domain%3Dtiki.vn%26origin%3Dhttps%253A%252F%252Ftiki.vn%252Ff885b022587efc%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Ftiki.vn%2Fban-phim-co-day-dell-kb216-den-hang-chinh-hang-p646020.html%3Fspid%3D11605007&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true&amp;size=small&amp;width="
                                                style="
                                                    border: none;
                                                    visibility: visible;
                                                    width: 128px;
                                                    height: 20px;
                                                "
                                                class=""
                                            ></iframe
                                            ></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{{--Product Main--}}
    <div class="container-fluid">
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
                                {!! $productDetail->pro_content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

{{--Form Review--}}

    <div class="component-rating" style="margin: 0 350px 20px 250px;">
        <h3>Review Product</h3>
        <div class="component-rating_content" style="display: flex; align-items: center; border: 1px solid #ddd">
            <div class="rating-item" style="width: 20%; position: relative">
             <span class="fa fa-star" style="font-size: 100px; display:  block; color: #ff9705;margin: 0 auto; text-align: center"></span>
                <b style="position: absolute;top: 38%;left: 54%;transform: translateX(-50%) translateX(-50%);color: white;font-size: 20px">5.0</b>
            </div>
                <div class="list-rating" style="width: 60%; font-size: 14px" >
                    @for ($i = 1; $i <= 5; $i++)
                    <div class="item-rating" style="display: flex;align-items: center">
                            <div style="width: 10%">
                                {{$i}} <span class="fa fa-star" style="color: grey"></span>
                            </div>
                            <div style="width: 70%; margin: 0 20px;">
                                <span style="width:100%; height: 8px;display: block; border: 1px solid #dedede; border-radius: 5px; background-color: #dedede">
                                    <b style="width: 30%;background-color: #f25800; display: block; height: 100%; border-radius: 5px; ">
                                    </b></span>
                            </div>
                            <div style="width: 20%">
                                <a href="" >300 Review</a>
                            </div>
                    </div>
                    @endfor
                </div>
            <div class="" style="width: 20%">
                <a href="#" class="js_rating_action"  style="width: 200px; background-color: #288ad6;padding: 10px;color: white;border-radius: 5px">Send Review</a>
            </div>
        </div>

        <?php
        $listRatingText = [
            1 => 'Khong thich',
            2 => 'Tam dc',
            3 => 'Binh thuong',
            4 => 'Rat tot',
            5 => 'Qua tuy voi',
        ];
        ?>
        <div class="form_rating hide  ">
                <div style="display: flex; margin-top: 15px;">
                    <span>Please choose review </span>
                    <span style="margin: 0 15px" class="list-start">
                @for ($i = 1; $i <= 5; $i++)
                            <i class="fa fa-star" data-key="{{$i}}" ></i>
                        @endfor
                    </span>
                    <span class="list-text"></span>
                </div>
            <div style="margin-top: 15px">
                <textarea name="" class="form-control" id="" cols="30" rows="3 "></textarea>
            </div>
            <div style="margin-top: 15px">
                <a href="#" style="width: 200px; background: #288ad6; padding: 5px 10px; color: white; border-radius: 5px">Send Review</a>
            </div>
        </div>
    </div>
{{--   <div class="submit-review" id="block-review">--}}
{{--    <form action="" id="form-review" method="POST">--}}
{{--        @csrf--}}
{{--        <div>--}}
{{--            <p style="margin-bottom: 0">--}}
{{--                <span> Choose review</span>--}}
{{--                <span id="ratings">--}}
{{--                    @for ($i = 1; $i <= 5; $i++)--}}
{{--                        <i class="la la-start active" data-i="{{$i}}"></i>--}}
{{--                    @endfor--}}
{{--                </span>--}}
{{--                <span class="reviews-text" id="reviews-text">Great</span>--}}
{{--            </p>--}}
{{--                <span style="color: red; margin-bottom: 10px; display: block">(Click in start to review)</span>--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <textarea name="content-review" id="rv_content" cols="30" rows="5" placeholder="Please input review product (litmited 80 word)"></textarea>--}}
{{--            <input type="hidden" name="review" id="review_value value=5">--}}
{{--        </div>--}}
{{--        <button type="submit" style="font-size: 14px; margin-top: 10px" class="btn tbn-success js-process-review">--}}
{{--            Send Review--}}
{{--        </button>--}}
{{--    </form>--}}
{{--   </div>--}}
{{--    <div class="reviews_list">--}}
{{--    @include('frontend.pages.product_detail.include_inc_list_reviews')--}}
{{--    </div>--}}

{{--    Same PRODUCTY --}}
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
                                    <div class="col-md-3 col-sm-4">
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
