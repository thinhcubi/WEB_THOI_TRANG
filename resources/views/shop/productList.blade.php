@extends('shop.master')
@section('content')
<body class="ecommerce">

<div class="title-wrapper">
    <div class="container"><div class="container-inner">
            <h1><span>MEN</span> CATEGORY</h1>
            <em>Over 4000 Items are available here</em>
        </div></div>
</div>

<div class="main">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{route('shop.home')}}">Trang chủ</a></li>
            <li><a href="">Cửa hàng</a></li>
            <li class="active"></li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
            <!-- BEGIN SIDEBAR -->
           @include('shop.layouts.sidebar')
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="col-md-9 col-sm-7">
                <div class="row list-view-sorting clearfix">
                    <div class="col-md-2 col-sm-2 list-view">
                        <a href="javascript:;"><i class="fa fa-th-large"></i></a>
                        <a href="javascript:;"><i class="fa fa-th-list"></i></a>
                    </div>
                    <div class="col-md-10 col-sm-10">
                        <div class="pull-right">
                            <label class="control-label">Show:</label>
                            <select class="form-control input-sm">
                                <option value="#?limit=24" selected="selected">24</option>
                                <option value="#?limit=25">25</option>
                                <option value="#?limit=50">50</option>
                                <option value="#?limit=75">75</option>
                                <option value="#?limit=100">100</option>
                            </select>
                        </div>
                        <div class="pull-right">
                            <label class="control-label">Sort&nbsp;By:</label>
                            <select class="form-control input-sm">
                                <option value="#?sort=p.sort_order&amp;order=ASC" selected="selected">Default</option>
                                <option value="#?sort=pd.name&amp;order=ASC">Name (A - Z)</option>
                                <option value="#?sort=pd.name&amp;order=DESC">Name (Z - A)</option>
                                <option value="#?sort=p.price&amp;order=ASC">Price (Low &gt; High)</option>
                                <option value="#?sort=p.price&amp;order=DESC">Price (High &gt; Low)</option>
                                <option value="#?sort=rating&amp;order=DESC">Rating (Highest)</option>
                                <option value="#?sort=rating&amp;order=ASC">Rating (Lowest)</option>
                                <option value="#?sort=p.model&amp;order=ASC">Model (A - Z)</option>
                                <option value="#?sort=p.model&amp;order=DESC">Model (Z - A)</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- BEGIN PRODUCT LIST -->

                <div class="row product-list">
                    <!-- PRODUCT ITEM START -->
                    @foreach($products as $key => $product)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="product-item">
                            <div class="pi-img-wrapper">
                                <img src="{{asset('/storage/'.$product->image)}}" style="width: 350px; height: 350px" class="img-responsive" alt="Berry Lace Dress">
                                <div>
                                    <a href="{{asset('/storage/'.$product->image)}}" class="btn btn-default fancybox-button">Phóng to</a>
                                    <a href="{{route('product.detail',$product->id)}}" class="btn btn-default fancybox-fast-view">Chi tiết</a>
                                </div>
                            </div>
                            <h3><a href="shop-item.html">{{$product->name}}</a></h3>
                            <div class="pi-price">$29.00</div>
                            <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                        </div>
                    </div>
                    <!-- PRODUCT ITEM END -->
                    <!-- PRODUCT ITEM START -->
                    @endforeach
                </div>

                <!-- END PRODUCT LIST -->
                <!-- BEGIN PAGINATOR -->
                <div class="row">
                    <div class="col-md-4 col-sm-4 items-info">Items 1 to 9 of 10 total</div>
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
                <!-- END PAGINATOR -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
    </div>
</div>

@endsection
