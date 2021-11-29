@extends('shop.master')
@section('content')
    <div class="page-slider margin-bottom-35">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('/images/bg1.jpg')}}" alt="First slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
<div class="main">
    <div class="container">
        <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
        <div class="row margin-bottom-40">
            <!-- BEGIN SALE PRODUCT -->
            <div class="col-md-12 sale-product">
                <h2>Review của khách hàng</h2>
                <div class="owl-carousel owl-carousel5">
                    <div>
                        <div class="product-item">
                            <div class="pi-img-wrapper" style="width: 200px; height: 200px">
                                <img src="{{asset('/images/img.png')}}" style="width: 200px;height: 200px" class="img-responsive" alt="Berry Lace Dress">
                                <div>
                                    <a href="{{asset('/images/img.png')}}" class="btn btn-default fancybox-button">Phóng to</a>
                                    <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">Chi tiết</a>
                                </div>
                            </div>
                            <h3><a href="shop-item.html">Vest trắng</a></h3>
                            <div class="pi-price">$800.00</div>
                            <a href="javascript:;" class="btn btn-default add2cart">Thêm vào giỏ hàng</a>
                            <div class="sticker sticker-sale"></div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="pi-img-wrapper" style="width: 200px; height: 200px">
                                <img src="{{asset('/images/img_1.png')}}" style="width: 200px;height: 200px" class="img-responsive" alt="Berry Lace Dress">
                                <div>
                                    <a href="{{asset('/images/img_1.png')}}" class="btn btn-default fancybox-button">Phóng to</a>
                                    <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">Chi tiết</a>
                                </div>
                            </div>
                            <h3><a href="shop-item.html">Áo khoác</a></h3>
                            <div class="pi-price">$780.00</div>
                            <a href="javascript:;" class="btn btn-default add2cart">Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="pi-img-wrapper" style="width: 200px; height: 200px">
                                <img src="{{asset('/images/img_3.png')}}" style="width: 200px;height: 200px" class="img-responsive" alt="Berry Lace Dress">
                                <div>
                                    <a href="{{asset('/images/img_3.png')}}" class="btn btn-default fancybox-button">Phóng to</a>
                                    <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">Chi tiết</a>
                                </div>
                            </div>
                            <h3><a href="shop-item.html">Áo dài chấm bi</a></h3>
                            <div class="pi-price">$640.00</div>
                            <a href="javascript:;" class="btn btn-default add2cart">Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="pi-img-wrapper" style="width: 200px; height: 200px">
                                <img src="{{asset('/images/img_4.png')}}" style="width: 200px;height: 200px" class="img-responsive" alt="Berry Lace Dress">
                                <div>
                                    <a href="{{asset('/images/img_4.png')}}" class="btn btn-default fancybox-button">Phóng to</a>
                                    <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">Chi tiết</a>
                                </div>
                            </div>
                            <h3><a href="shop-item.html">Áo nỉ chanel</a></h3>
                            <div class="pi-price">$780.00</div>
                            <a href="javascript:;" class="btn btn-default add2cart">Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="pi-img-wrapper" style="width: 200px; height: 200px">
                                <img src="{{asset('/images/img_5.png')}}" style="width: 200px;height: 200px" class="img-responsive" alt="Berry Lace Dress">
                                <div>
                                    <a href="{{asset('/images/img_5.png')}}" class="btn btn-default fancybox-button">Phóng to</a>
                                    <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">Chi tiết</a>
                                </div>
                            </div>
                            <h3><a href="shop-item.html">Áo dạ lông</a></h3>
                            <div class="pi-price">$1500.00</div>
                            <a href="javascript:;" class="btn btn-default add2cart">Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SALE PRODUCT -->
        </div>
        <!-- END SALE PRODUCT & NEW ARRIVALS -->

        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40 ">
            <!-- BEGIN SIDEBAR -->
           @include('shop.layouts.sidebar')
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->

            <div class="col-sm-9 padding-right-0">
                <h2>Sản phẩm</h2>

                <div class="owl-carousel owl-carousel3">
                    @foreach($products as $key => $product)
                     <div class="row">
                         <div class="col-3">
                        <div class="product-item">
                            <div class="pi-img-wrapper">
                                <img src="{{asset('/storage/'.$product->image)}}" style="width: 250px; height: 300px" class="img-responsive" alt="Berry Lace Dress">
                                <div>
                                    <a href="{{asset('/storage/'.$product->image)}}" class="btn btn-default fancybox-button">Phóng to</a>
                                    <a href="{{route('product.detail',$product->id)}}" class="btn btn-default fancybox-fast-view">Chi tiết</a>
                                </div>
                            </div>
                            <h3><a href="shop-item.html">{{$product->name}}</a></h3>
                            <div class="pi-price">{{number_format($product->price)}}</div>
                            <a href="javascript:;" class="btn btn-default add2cart">Thêm vào giỏ hàng</a>
                            <div class="sticker sticker-new"></div>
                        </div>
                         </div>
                     </div>
                    @endforeach

                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4 items-info"></div>
                    <div class="col-md-8 col-sm-8">
                        <ul class="pagination pull-right">
                            <li><a href="javascript:;">&laquo;</a></li>
                            <li><a href="javascript:;">1</a></li>
                            <li><span>2</span></li>
                            <li><a href="javascript:;">3</a></li>
                            <li><a href="javascript:;">4</a></li>
                            <li><a href="javascript:;">5</a></li>
                            <li><a href="javascript:;">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->

        <!-- BEGIN TWO PRODUCTS & PROMO -->
        <!-- END TWO PRODUCTS & PROMO -->
    </div>
</div>

<!-- BEGIN BRANDS -->
<div class="brands">
    <div class="container">
        <div class="owl-carousel owl-carousel6-brands">
            <a href="shop-product-list.html"><img src="{{asset('images/canon.jpg')}}" alt="canon" title="canon"></a>
            <a href="shop-product-list.html"><img src="{{asset('images/esprit.jpg')}}" alt="esprit" title="esprit"></a>
            <a href="shop-product-list.html"><img src="{{asset('images/gap.jpg')}}" alt="gap" title="gap"></a>
            <a href="shop-product-list.html"><img src="{{asset('images/next.jpg')}}" alt="next" title="next"></a>
            <a href="shop-product-list.html"><img src="{{asset('images/puma.jpg')}}" alt="puma" title="puma"></a>
            <a href="shop-product-list.html"><img src="{{asset('images/zara.jpg')}}" alt="zara" title="zara"></a>
            <a href="shop-product-list.html"><img src="{{asset('images/canon.jpg')}}" alt="canon" title="canon"></a>
            <a href="shop-product-list.html"><img src="{{asset('images/esprit.jpg')}}" alt="esprit" title="esprit"></a>
            <a href="shop-product-list.html"><img src="{{asset('images/gap.jpg')}}" alt="gap" title="gap"></a>
            <a href="shop-product-list.html"><img src="{{asset('images/next.jpg')}}" alt="next" title="next"></a>
            <a href="shop-product-list.html"><img src="{{asset('images/puma.jpg')}}" alt="puma" title="puma"></a>
            <a href="shop-product-list.html"><img src="{{asset('images/zara.jpg')}}" alt="zara" title="zara"></a>
        </div>
    </div>
</div>
@endsection
