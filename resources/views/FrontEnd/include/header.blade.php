<!-- ============================================================== -->
<!-- Top header  -->
<!-- ============================================================== -->
<!-- Top Header -->
<div class="py-2 br-bottom">
    <div class="container">
        <div class="row">

            <div class="col-xl-7 col-lg-6 col-md-6 col-sm-12 hide-ipad">
                <div class="top_second"><p class="medium text-muted m-0 p-0"><i class="ti-truck mr-1"></i>Get Free delivery from ৳2000 <a href="{{route('product.show')}}" class="medium text-dark text-underline">Shop Now</a></p></div>
            </div>

            <!-- Right Menu -->
            <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12">

                <div class="currency-selector dropdown js-dropdown float-right d-none">
                    <a href="javascript:void(0);" data-toggle="dropdown" class="popup-title"  title="Currency" aria-label="Currency dropdown">
                        <span class="hidden-xl-down medium text-muted">Currency:</span>
                        <span class="iso_code medium text-muted">$USD</span>
                        <i class="fa fa-angle-down medium text-muted"></i>
                    </a>
                    <ul class="popup-content dropdown-menu">
                        <li><a title="Euro" href="#" class="dropdown-item medium text-muted">EUR €</a></li>
                        <li class="current"><a title="US Dollar" href="#" class="dropdown-item medium text-muted">USD $</a></li>
                    </ul>
                </div>

                <!-- Choose Language -->

                <div class="language-selector-wrapper dropdown js-dropdown float-right mr-3 d-none">
                    <a class="popup-title" href="javascript:void(0)" data-toggle="dropdown" title="Language" aria-label="Language dropdown">
                        <span class="hidden-xl-down medium text-muted">Language:</span>
                        <span class="iso_code medium text-muted">English</span>
                        <i class="fa fa-angle-down medium text-muted"></i>
                    </a>
                    <ul class="dropdown-menu popup-content link">
                        <li class="current"><a href="javascript:void(0);" class="dropdown-item medium text-muted"><img src="{{asset('FrontEnd')}}/assets/img/1.jpg" alt="en" width="16" height="11" /><span>English</span></a></li>
                        <li><a href="javascript:void(0);" class="dropdown-item medium text-muted"><img src="{{asset('FrontEnd')}}/assets/img/2.jpg" alt="fr" width="16" height="11" /><span>Français</span></a></li>
                        <li><a href="javascript:void(0);" class="dropdown-item medium text-muted"><img src="{{asset('FrontEnd')}}/assets/img/3.jpg" alt="de" width="16" height="11" /><span>Deutsch</span></a></li>
                        <li><a href="javascript:void(0);" class="dropdown-item medium text-muted"><img src="{{asset('FrontEnd')}}/assets/img/4.jpg" alt="it" width="16" height="11" /><span>Italiano</span></a></li>
                        <li><a href="javascript:void(0);" class="dropdown-item medium text-muted"><img src="{{asset('FrontEnd')}}/assets/img/5.jpg" alt="es" width="16" height="11" /><span>Español</span></a></li>
                        <li ><a href="javascript:void(0);" class="dropdown-item medium text-muted"><img src="{{asset('FrontEnd')}}/assets/img/6.jpg" alt="ar" width="16" height="11" /><span>اللغة العربية</span></a></li>
                    </ul>
                </div>

                <div class="currency-selector dropdown js-dropdown float-right mr-3">
                    @if(Auth::user() && Auth::user()->role == 3)
                        <a href="{{route('dashboard')}}"><i class="lni lni-user mr-1"></i>{{Auth::user()->name}}</a>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="lni lni-exit mr-1"></i>Sign Out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @else
                        <i class="lni lni-user mr-1"></i><a href="{{route('login')}}">Sign In </a> /<a href="{{route('register')}}"> Register</a>
                    @endif
                </div>

                <div class="order-selector dropdown js-dropdown float-right mr-3">
                    <a href="{{route('order.tracking')}}" class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>Order Tracking</a>
                </div>

            </div>

        </div>
    </div>
</div>

<div class="headd-sty header">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="headd-sty-wrap d-flex align-items-center justify-content-between py-3">
                    <div class="headd-sty-left d-flex align-items-center">
                        <div class="headd-sty-01">
                            <a class="nav-brand py-0" href="{{route('home')}}">
                                <img src="{{asset(get_setting('site_logo')->value)}}" class="logo" alt="" />
                            </a>
                        </div>
                        <div class="headd-sty-02 ml-3">
                            <form class="bg-white rounded-md border-bold" action="{{ route('product.search')}}" method="post">
                                @csrf
                                <div class="input-group">
                                    <input type="text" class="form-control custom-height b-0" name="search" placeholder="Search for products..." />
                                    <div class="input-group-append">
                                        <div class="input-group-text"><button class="btn bg-white text-danger custom-height rounded px-3" type="submit"><i class="fas fa-search"></i></button></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="headd-sty-last">
                        <ul class="nav-menu nav-menu-social align-to-right align-items-center d-flex">
                            <li>
                                <div class="call d-flex align-items-center text-left">
                                    <i class="lni lni-phone fs-xl"></i>
                                    <span class="text-muted small ml-3">Call Us Now:<strong class="d-block text-dark fs-md">{{get_setting('phone')->value}}</strong></span>
                                </div>
                            </li>
                            <li class="d-none">
                                <a href="#" onclick="openWishlist()">
                                    <i class="far fa-heart fs-lg"></i><span class="dn-counter bg-success">2</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('cart.show')}}" >
                                    <div class="d-flex align-items-center justify-content-between">
                                        <i class="fas fa-shopping-basket fs-lg"></i><span class="dn-counter theme-bg cartQty">0</span>
                                        <div class="text-left ml-1">
{{--                                            <div class="text-muted small lh-1">Total</div>--}}
{{--                                            @php $cart = get_cart_data() @endphp--}}
{{--                                            <div class="primary-text cart-subtotal"><span class="fs-md ft-medium"><span class="prc-currency"></span></span></div>--}}
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="mobile_nav">
                        <ul>
                            <li>
                                <a href="#" onclick="openSearch()">
                                    <i class="lni lni-search-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('login')}}" >
                                    <i class="lni lni-user"></i>
                                </a>
                            </li>
                            <li class="d-none">
                                <a href="#" onclick="openWishlist()">
                                    <i class="lni lni-heart"></i><span class="dn-counter">2</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('cart.show')}}">
                                    <i class="lni lni-shopping-basket"></i><span class="dn-counter">0</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start Navigation -->
<div class="headerd header-dark head-style-2">
    <div class="container">
        <nav id="navigation" class="navigation navigation-landscape">
            <div class="nav-header">
                <div class="nav-toggle"></div>
                <div class="nav-menus-wrapper">
                    <ul class="nav-menu">

                        <li><a href="{{route('home')}}" class="pl-0">Home</a>
{{--                            <ul class="nav-dropdown nav-submenu">--}}

{{--                            </ul>--}}
                        </li>

                        <li><a href="{{route('product.show')}}">Shop</a>
                            <!--<ul class="nav-dropdown nav-submenu">-->
                            <!--	<li><a href="javascript:void(0);">Account Dashboard</a>-->
                            <!--		<ul class="nav-dropdown nav-submenu">-->

                            <!--		</ul>-->
                            <!--	</li>-->
                            <!--	<li><a href="javascript:void(0);">Support</a>-->
                            <!--		<ul class="nav-dropdown nav-submenu">-->
                            <!--			<li><a href="shoping-cart.html">Shopping Cart</a></li>-->
                            <!--			<li><a href="checkout.html">Checkout</a></li>-->
                            <!--			<li><a href="complete-order.html">Order Complete</a></li>-->
                            <!--		</ul>-->
                            <!--	</li>-->

                            <!--</ul>-->
                        </li>


                        <li class="d-none d-lg-block"><a href="{{route('category_list.index')}}">All Categories</a>
{{--                            <ul class="nav-dropdown nav-submenu">--}}

{{--                            </ul>--}}
                        </li>
                        <li class="d-block d-lg-none"><a>Top Categories</a>
                            <ul class="nav-dropdown nav-submenu">
                                <li><a href="{{route('category_list.index')}}">All Categories</a>
                                @php $i =1; @endphp
                                @foreach($menu_featured_categories as $category)
{{--                                    @if($category->parent_id == 0)--}}
                                        @if($i == 6)
                                            @php break; @endphp
                                        @endif
                                        <li><a href="javascript:void(0);">{{$category->name_en}}</a>
{{--                                            @php $subcategories = findChildCategory($category->id) @endphp--}}
{{--                                            @if(count($subcategories) > 0)--}}
{{--                                                <ul class="nav-dropdown nav-submenu">--}}
{{--                                                    @foreach($subcategories as $subcategory)--}}
{{--                                                        <li><a href="">{{$subcategory->name_en}}</a></li>--}}
{{--                                                    @endforeach--}}
{{--                                                </ul>--}}
{{--                                            @endif--}}
                                        </li>
                                            @php $i++; @endphp
{{--                                    @endif--}}
                                @endforeach
                            </ul>
                        </li>

{{--                        <li><a href="javascript:void(0);">Pages</a>--}}
{{--                            <ul class="nav-dropdown nav-submenu">--}}

{{--                            </ul>--}}
{{--                        </li>--}}

{{--                        <li><a href="docs.html">Docs</a></li>--}}

                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- End Navigation -->
<div class="clearfix"></div>
<!-- ============================================================== -->
<!-- Top header  -->
<!-- ============================================================== -->
