<div class="pre-header">
    <div class="container">
        <div class="row">
            <!-- BEGIN TOP BAR LEFT PART -->
            <div class="col-md-6 col-sm-6 additional-shop-info">
                <ul class="list-unstyled list-inline">
                    <li><i class="fa fa-phone"></i><span>+1 456 6717</span></li>
                    <!-- BEGIN CURRENCIES -->
                    <li class="shop-currencies">
                        <a href="javascript:void(0);">€</a>
                        <a href="javascript:void(0);">£</a>
                        <a href="javascript:void(0);" class="current">$</a>
                    </li>
                    <!-- END CURRENCIES -->
                    <!-- BEGIN LANGS -->
                    <li class="langs-block">
                        <a href="javascript:void(0);" class="current">English </a>
                        <div class="langs-block-others-wrapper"><div class="langs-block-others">
                                <a href="javascript:void(0);">French</a>
                                <a href="javascript:void(0);">Germany</a>
                                <a href="javascript:void(0);">Turkish</a>
                            </div></div>
                    </li>
                    <!-- END LANGS -->
                </ul>
            </div>
            <!-- END TOP BAR LEFT PART -->
            <!-- BEGIN TOP BAR MENU -->
            <div class="col-md-6 col-sm-6 additional-nav">
                <ul class="list-unstyled list-inline pull-right">
                    <li>
                        <i class="fa fa-user"></i>
                        @if(session()->has('isLogin'))
                            <a href="{{route('user.profile')}}">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
                        @else
                            <a href="{{route('user.profile')}}">Tài khoản</a>
                        @endif
                    </li>
                    <li>
                        <i class="fa fa-sign-out"></i>
                        @if(session()->has('isLogin'))
                        <a href="{{route('shop.logout')}}">Đăng xuất</a>
                        @else
                            <a href="{{route('shop.logout')}}">Đăng nhập</a>
                        @endif
                    </li>
                </ul>
            </div>
            <!-- END TOP BAR MENU -->
        </div>
    </div>
</div>
<!-- END TOP BAR -->

<!-- BEGIN HEADER -->
<div class="header">
    <div class="container">
        <a class="site-logo" href="{{route('shop.home')}}"><img src="{{asset('/images/img_6.png')}}" style="width: 50px;height: 60px">Auth Shop</a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN CART -->
        <div class="top-cart-block">
            <div class="top-cart-info">
                <a href="javascript:void(0);" class="top-cart-info-count">3 items</a>
                <a href="javascript:void(0);" class="top-cart-info-value">$1260</a>
            </div>
            <a href="{{route('shop.cart')}}"><i  class="fa fa-shopping-cart"></i></a>

            <div class="top-cart-content-wrapper">
                <div class="top-cart-content">
                    <ul class="scroller" style="height: 250px;">
                        <li>
                            <a href="shop-item.html"><img src="assets/pages/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34"></a>
                            <span class="cart-content-count">x 1</span>
                            <strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
                            <em>$1230</em>
                            <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                        </li>
                        <li>
                            <a href="shop-item.html"><img src="assets/pages/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34"></a>
                            <span class="cart-content-count">x 1</span>
                            <strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
                            <em>$1230</em>
                            <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                        </li>
                        <li>
                            <a href="shop-item.html"><img src="assets/pages/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34"></a>
                            <span class="cart-content-count">x 1</span>
                            <strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
                            <em>$1230</em>
                            <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                        </li>
                        <li>
                            <a href="shop-item.html"><img src="assets/pages/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34"></a>
                            <span class="cart-content-count">x 1</span>
                            <strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
                            <em>$1230</em>
                            <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                        </li>
                        <li>
                            <a href="shop-item.html"><img src="assets/pages/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34"></a>
                            <span class="cart-content-count">x 1</span>
                            <strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
                            <em>$1230</em>
                            <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                        </li>
                        <li>
                            <a href="shop-item.html"><img src="assets/pages/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34"></a>
                            <span class="cart-content-count">x 1</span>
                            <strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
                            <em>$1230</em>
                            <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                        </li>
                        <li>
                            <a href="shop-item.html"><img src="assets/pages/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34"></a>
                            <span class="cart-content-count">x 1</span>
                            <strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
                            <em>$1230</em>
                            <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                        </li>
                        <li>
                            <a href="shop-item.html"><img src="assets/pages/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34"></a>
                            <span class="cart-content-count">x 1</span>
                            <strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
                            <em>$1230</em>
                            <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                        </li>
                    </ul>
                    <div class="text-right">
                        <a href="shop-shopping-cart.html" class="btn btn-default">View Cart</a>
                        <a href="shop-checkout.html" class="btn btn-primary">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
        <!--END CART -->

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation">
            <ul>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                       Trang chủ
                    </a>
                </li>
                <li class="dropdown dropdown-megamenu">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                        Liên hệ
                    </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                        Pages
                    </a>

                    <ul class="dropdown-menu">
                        <li class="active"><a href="shop-index.html">Home Default</a></li>
                        <li><a href="shop-index-header-fix.html">Home Header Fixed</a></li>
                        <li><a href="shop-index-light-footer.html">Home Light Footer</a></li>
                        <li><a href="shop-product-list.html">Product List</a></li>
                        <li><a href="shop-search-result.html">Search Result</a></li>
                        <li><a href="shop-item.html">Product Page</a></li>
                        <li><a href="shop-shopping-cart-null.html">Shopping Cart (Null Cart)</a></li>
                        <li><a href="shop-shopping-cart.html">Shopping Cart</a></li>
                        <li><a href="shop-checkout.html">Checkout</a></li>
                        <li><a href="shop-about.html">About</a></li>
                        <li><a href="shop-contacts.html">Contacts</a></li>
                        <li><a href="shop-account.html">My account</a></li>
                        <li><a href="shop-wishlist.html">My Wish List</a></li>
                        <li><a href="shop-goods-compare.html">Product Comparison</a></li>
                        <li><a href="shop-standart-forms.html">Standart Forms</a></li>
                        <li><a href="shop-faq.html">FAQ</a></li>
                        <li><a href="shop-privacy-policy.html">Privacy Policy</a></li>
                        <li><a href="shop-terms-conditions-page.html">Terms &amp; Conditions</a></li>
                    </ul>
                </li>
                <!-- BEGIN TOP SEARCH -->
                <li class="menu-search">
                    <span class="sep"></span>
                    <i class="fa fa-search search-btn"></i>
                    <div class="search-box">
                        <form method="post" action="{{route('search.product')}}">
                            @csrf
                            <div class="input-group">
                                <input type="text" placeholder="Search" name="value" class="form-control">
                                <span class="input-group-btn">
                      <button class="btn btn-primary" type="submit">Search</button>
                    </span>
                            </div>
                        </form>
                    </div>
                </li>
                <!-- END TOP SEARCH -->
            </ul>
        </div>
        <!-- END NAVIGATION -->
    </div>
</div>
<!-- Header END -->

<!-- BEGIN SLIDER -->

<!-- END SLIDER -->
