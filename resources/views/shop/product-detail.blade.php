@extends('shop.master')
@section('content')
<div class="main">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="">Store</a></li>
            <li class="active">Cool green dress with red bell</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
            <!-- BEGIN SIDEBAR -->
            @include('shop.layouts.sidebar')
{{--            <div class="sidebar col-md-3 col-sm-5">--}}
{{--                <ul class="list-group margin-bottom-25 sidebar-menu">--}}
{{--                    <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Ladies</a></li>--}}
{{--                    <li class="list-group-item clearfix dropdown active">--}}
{{--                        <a href="shop-product-list.html" class="collapsed">--}}
{{--                            <i class="fa fa-angle-right"></i>--}}
{{--                            Mens--}}

{{--                        </a>--}}
{{--                        <ul class="dropdown-menu" style="display:block;">--}}
{{--                            <li class="list-group-item dropdown clearfix active">--}}
{{--                                <a href="shop-product-list.html" class="collapsed"><i class="fa fa-angle-right"></i> Shoes </a>--}}
{{--                                <ul class="dropdown-menu" style="display:block;">--}}
{{--                                    <li class="list-group-item dropdown clearfix">--}}
{{--                                        <a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic </a>--}}
{{--                                        <ul class="dropdown-menu">--}}
{{--                                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic 1</a></li>--}}
{{--                                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic 2</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li class="list-group-item dropdown clearfix active">--}}
{{--                                        <a href="shop-product-list.html" class="collapsed"><i class="fa fa-angle-right"></i> Sport  </a>--}}
{{--                                        <ul class="dropdown-menu" style="display:block;">--}}
{{--                                            <li class="active"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sport 1</a></li>--}}
{{--                                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sport 2</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Trainers</a></li>--}}
{{--                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Jeans</a></li>--}}
{{--                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Chinos</a></li>--}}
{{--                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> T-Shirts</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Kids</a></li>--}}
{{--                    <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Accessories</a></li>--}}
{{--                    <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sports</a></li>--}}
{{--                    <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Brands</a></li>--}}
{{--                    <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Electronics</a></li>--}}
{{--                    <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Home &amp; Garden</a></li>--}}
{{--                    <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Custom Link</a></li>--}}
{{--                </ul>--}}

{{--                <div class="sidebar-products clearfix">--}}
{{--                    <h2>Bestsellers</h2>--}}
{{--                    <div class="item">--}}
{{--                        <a href="shop-item.html"><img src="assets/pages/img/products/k1.jpg" alt="Some Shoes in Animal with Cut Out"></a>--}}
{{--                        <h3><a href="shop-item.html">Some Shoes in Animal with Cut Out</a></h3>--}}
{{--                        <div class="price">$31.00</div>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <a href="shop-item.html"><img src="assets/pages/img/products/k4.jpg" alt="Some Shoes in Animal with Cut Out"></a>--}}
{{--                        <h3><a href="shop-item.html">Some Shoes in Animal with Cut Out</a></h3>--}}
{{--                        <div class="price">$23.00</div>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <a href="shop-item.html"><img src="assets/pages/img/products/k3.jpg" alt="Some Shoes in Animal with Cut Out"></a>--}}
{{--                        <h3><a href="shop-item.html">Some Shoes in Animal with Cut Out</a></h3>--}}
{{--                        <div class="price">$86.00</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <!-- END SIDEBAR -->

            <!-- BEGIN CONTENT -->
            <div class="col-md-9 col-sm-7">
                <div class="product-page">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{asset('/storage/'.$product->image)}}">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h1>{{$product->name}}</h1>
                            <div class="price-availability-block clearfix">
                                <div class="price">
                                    <strong>{{number_format($product->price)}}</strong>
                                </div>
                            </div>
                            <div class="description">
                                <p>{{$product->desc}}</p>
                            </div>
                            <div class="product-page-options">
                                <div class="pull-left">
                                    <label class="control-label">K??ch th?????c</label>
                                    <select class="form-control input-sm">
                                        <option>L</option>
                                        <option>M</option>
                                        <option>XL</option>
                                    </select>
                                </div>
                            </div>
                            <div class="product-page-cart">
                                <div class="product-quantity">
                                    <input id="product-quantity" type="text" value="1" readonly class="form-control input-sm">
                                </div>
                                <button class="btn btn-primary" type="submit">Th??m v??o gi??? h??ng</button>
                            </div>
                            <div class="review">
                                <input type="range" value="4" step="0.25" id="backing4">
                                <div class="rateit" data-rateit-backingfld="#backing4" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5">
                                </div>
                                <a href="javascript:;">7 reviews</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="javascript:;">Write a review</a>
                            </div>
                            <ul class="social-icons">
                                <li><a class="facebook" data-original-title="facebook" href="javascript:;"></a></li>
                                <li><a class="twitter" data-original-title="twitter" href="javascript:;"></a></li>
                                <li><a class="googleplus" data-original-title="googleplus" href="javascript:;"></a></li>
                                <li><a class="evernote" data-original-title="evernote" href="javascript:;"></a></li>
                                <li><a class="tumblr" data-original-title="tumblr" href="javascript:;"></a></li>
                            </ul>
                        </div>

                        <div class="product-page-content">
                            <ul id="myTab" class="nav nav-tabs">
                                <li><a href="#Description" data-toggle="tab">M?? t???</a></li>
                                <li><a href="#Information" data-toggle="tab">Th??ng tin</a></li>
                                <li class="active"><a href="#Reviews" data-toggle="tab">????nh gi?? (2)</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div class="tab-pane fade" id="Description">
                                    <p>Lorem ipsum dolor ut sit ame dolore  adipiscing elit, sed sit nonumy nibh sed euismod laoreet dolore magna aliquarm erat sit volutpat Nostrud duis molestie at dolore. Lorem ipsum dolor ut sit ame dolore  adipiscing elit, sed sit nonumy nibh sed euismod laoreet dolore magna aliquarm erat sit volutpat Nostrud duis molestie at dolore. Lorem ipsum dolor ut sit ame dolore  adipiscing elit, sed sit nonumy nibh sed euismod laoreet dolore magna aliquarm erat sit volutpat Nostrud duis molestie at dolore. </p>
                                </div>
                                <div class="tab-pane fade" id="Information">
                                    <table class="datasheet">
                                        <tr>
                                            <th colspan="2">Additional features</th>
                                        </tr>
                                        <tr>
                                            <td class="datasheet-features-type">Value 1</td>
                                            <td>21 cm</td>
                                        </tr>
                                        <tr>
                                            <td class="datasheet-features-type">Value 2</td>
                                            <td>700 gr.</td>
                                        </tr>
                                        <tr>
                                            <td class="datasheet-features-type">Value 3</td>
                                            <td>10 person</td>
                                        </tr>
                                        <tr>
                                            <td class="datasheet-features-type">Value 4</td>
                                            <td>14 cm</td>
                                        </tr>
                                        <tr>
                                            <td class="datasheet-features-type">Value 5</td>
                                            <td>plastic</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="tab-pane fade in active" id="Reviews">
                                    <!--<p>There are no reviews for this product.</p>-->
                                    <div class="review-item clearfix">
                                        <div class="review-item-submitted">
                                            <strong>Bob</strong>
                                            <em>30/12/2013 - 07:37</em>
                                            <div class="rateit" data-rateit-value="5" data-rateit-ispreset="true" data-rateit-readonly="true"></div>
                                        </div>
                                        <div class="review-item-content">
                                            <p>Sed velit quam, auctor id semper a, hendrerit eget justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis vel arcu pulvinar dolor tempus feugiat id in orci. Phasellus sed erat leo. Donec luctus, justo eget ultricies tristique, enim mauris bibendum orci, a sodales lectus purus ut lorem.</p>
                                        </div>
                                    </div>
                                    <div class="review-item clearfix">
                                        <div class="review-item-submitted">
                                            <strong>Mary</strong>
                                            <em>13/12/2013 - 17:49</em>
                                            <div class="rateit" data-rateit-value="2.5" data-rateit-ispreset="true" data-rateit-readonly="true"></div>
                                        </div>
                                        <div class="review-item-content">
                                            <p>Sed velit quam, auctor id semper a, hendrerit eget justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis vel arcu pulvinar dolor tempus feugiat id in orci. Phasellus sed erat leo. Donec luctus, justo eget ultricies tristique, enim mauris bibendum orci, a sodales lectus purus ut lorem.</p>
                                        </div>
                                    </div>

                                    <!-- BEGIN FORM-->
                                    <form action="#" class="reviews-form" role="form">
                                        <h2>Write a review</h2>
                                        <div class="form-group">
                                            <label for="name">T??n<span class="require">*</span></label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" id="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="review">????nh gi??<span class="require">*</span></label>
                                            <textarea class="form-control" rows="8" id="review"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Rating</label>
                                            <input type="range" value="4" step="0.25" id="backing5">
                                            <div class="rateit" data-rateit-backingfld="#backing5" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5">
                                            </div>
                                        </div>
                                        <div class="padding-top-20">
                                            <button type="submit" class="btn btn-primary">G???i</button>
                                        </div>
                                    </form>
                                    <!-- END FORM-->
                                </div>
                            </div>
                        </div>

                        <div class="sticker sticker-sale"></div>
                    </div>
                </div>
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->

        <!-- BEGIN SIMILAR PRODUCTS -->
        <!-- END SIMILAR PRODUCTS -->
    </div>
</div>


@endsection
