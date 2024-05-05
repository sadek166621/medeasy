<!-- ============================ Footer Start ================================== -->
<footer class="dark-footer skin-dark-footer">
    <div class="footer-middle">
        <div class="container">
            <div class="row">

                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <div class="footer_widget">
                        <img src="{{asset(get_setting('site_footer_logo')->value)}}" class="img-footer small mb-2" alt="" />

                        <div class="address mt-3">
                            {{get_setting('business_address')->value}}
                        </div>
                        <div class="address mt-3">
                            {{get_setting('phone')->value}}<br>{{get_setting('email')->value}}
                        </div>
                        <div class="address mt-3">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="{{get_setting('facebook_url')->value}}"><i class="lni lni-facebook-filled"></i></a></li>
                                <li class="list-inline-item"><a href="{{get_setting('twitter_url')->value}}"><i class="lni lni-twitter-filled"></i></a></li>
                                <li class="list-inline-item"><a href="{{get_setting('youtube_url')->value}}"><i class="lni lni-youtube"></i></a></li>
                                <li class="list-inline-item"><a href="{{get_setting('instagram_url')->value}}"><i class="lni lni-instagram-filled"></i></a></li>
                                <li class="list-inline-item"><a href="{{get_setting('linkedin_url')->value}}"><i class="lni lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                    <div class="footer_widget">
                        <h4 class="widget_title">Supports</h4>
                        <ul class="footer-menu">
                            <li><a href="{{route('page.contact')}}">Contact Us</a></li>
                            <li><a href="{{route('page.about')}}">About Page</a></li>
{{--                            <li><a href="{{route('')}}">Size Guide</a></li>--}}
                            <li><a href="{{route('page.shipping-return')}}">Shipping & Returns</a></li>
                            <li><a href="{{route('page.faq')}}">FAQ's Page</a></li>
                            <li><a href="{{route('page.policy')}}">Privacy</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                    <div class="footer_widget">
                        <h4 class="widget_title">Shop</h4>
                        <ul class="footer-menu">
                            @foreach(get_categories() as $key=>$category)
                                @if($key == 5)
                                    @php break; @endphp
                                @endif
                                <li><a href="{{route('product.category', $category->slug)}}">{{$category->name_en}}</a></li>
                            @endforeach

                        </ul>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                    <div class="footer_widget">
                        <h4 class="widget_title">Company</h4>
                        <ul class="footer-menu">
                            <li><a href="{{route('page.about')}}">About</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Affiliate</a></li>
                            <li>
                                @if(Auth::user() && Auth::user()->role == 3)
                                    <a href="{{route('dashboard')}}">Dashboard</a>
                                @else
                                    <a href="{{route('login')}}">Login</a>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <div class="footer_widget">
                        <h4 class="widget_title">Subscribe</h4>
                        <p>Receive updates, hot deals, discounts sent straignt in your inbox daily</p>
                        <div class="foot-news-last">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Email Address">
                                <div class="input-group-append">
                                    <button type="button" class="input-group-text b-0 text-light"><i class="lni lni-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="address mt-3">
                            <h5 class="fs-sm text-light">Secure Payments</h5>
                            <div class="scr_payment"><img src="{{asset('FrontEnd')}}/assets/img/card.png" class="img-fluid" alt="" /></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 text-center">
                    <p class="mb-0">Copyright © 2024 | {{get_setting('business_name')->value}} | Developed By <a href="https://skydreamit.com/" target="_blank">Sky Dream IT</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ============================ Footer End ================================== -->
