@foreach($productHot as $hot)
    <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="single-post" style="margin-bottom: 40px">
            <div class="post-thumb">
                <a href="{{route('get.detail.product', [$hot->pro_slug, $hot->id])}}">
                    <img style="width: 350px; height: auto"
                         src="{{ asset(pare_url_file($hot->pro_avatar)) }}" alt=""/>
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
                    <p style="height: 30px">{{$hot->pro_name}}</p>
                    <a href="{{route('add.shopping.cart', $hot->id)}}"
                       class="add_to_cart">Mua Ngay</a></div>
            </div>
        </div>
    </div>
@endforeach
