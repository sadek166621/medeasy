@extends('FrontEnd.master')
@section('content')
<style>
    .video {
    width: 100%;
    height: 100%;
    background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url({{ asset($hto->image) }});
    background-size: contain;
    background-repeat: no-repeat;
    display: flex;
    border-radius: 10px;
    align-items: center;
    justify-content: center;
}
</style>
<!-- Mobile Slider Start -->
<div class="mobile-slider d-block d-md-none">
    <div id="carouselExampleInterval-1" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
                aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item " data-bs-interval="10000">
                <img src="{{ asset('FrontEnd') }}/assect/img/slider/mobile-slider-1.jpg" class="d-block w100" alt="...">
            </div>
            <div class="carousel-item active" data-bs-interval="2000">
                <img src="{{ asset('FrontEnd') }}/assect/img/slider/mobile-slider-2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('FrontEnd') }}/assect/img/slider/mobile-slider-3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('FrontEnd') }}/assect/img/slider/mobile-slider-4.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('FrontEnd') }}/assect/img/slider/mobile-slider-5.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval-1"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval-1"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Mobile Slider End -->

<!-- Desktop Option & Slider Part Start -->
<section class="option-slider container-fluid mt-lg-4">
    <div class="row">
        <!--Left Side Menu Start -->
        @include('FrontEnd.include.side-cat')
        <!-- Left Side Menu End -->

        <!-- Right Side Start -->
        <div class="col-lg-9">
            <!--Desktop Slider Start -->
            <div class="desktop-slider d-none d-md-block">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        @foreach($sliders as $key => $slider)
                            <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="{{ $key }}"
                                class="{{ $key == 0 ? 'active' : '' }}" aria-current="{{ $key == 0 ? 'true' : 'false' }}"
                                aria-label="Slide {{ $key + 1 }}"></button>
                        @endforeach
                    </div>
                    <div class="carousel-inner desktop-carousel-inner">
                        @foreach($sliders as $key => $slider)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" data-bs-interval="10000">
                                <img src="{{asset($slider->slider_img)}}" style="width: 100%;" class="d-block" alt="...">
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <!-- Desktop Slider End -->

            <!-- Categories Part Start -->
            <div class="categories index-categories container owl-carousel owl-theme owl-loaded my-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="fw-semibold">Products Categories</h5>
                    {{-- <a class="btn-primary" href="{{route('category_list.index')}}">See All</a> --}}
                </div>
                <div class="owl-stage-outer">
                    <div class="row owl-stage g-1">
                        @foreach($featured_category as $category)
                        <div class="col owl-item">
                            <a class="card" href="{{route('product.category', $category->slug)}}"><img src="{{asset($category->image)}}"
                                    class="card-img-top" alt="Categories Image">
                                <span class="product-text">{{$category->name_en}}</span>
                            </a>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <!-- Categories Part End -->

            <!-- Order-System Part Start -->
            <section class="order-system container my-4">
                <div class="row g-3">
                    <div class="col-12 col-lg-7 p-2">
                        <h3 class="fw-bold">কিভাবে ঔষধ অর্ডার করবেন?</h3>
                        <div class="my-4">
                            <div>
                                <p class="ms-2">{!! $hto->text !!}</p>
                            </div>

                        </div>
                        <h6 class="fw-semibold">ওষুধে আকর্ষণীয় মূল্যছাড় পেতে এখনই অর্ডার করুন -</h6>
                        <div class="order-system row g-2 my-2">
                            <div class="col-12 col-lg-6">
                                <div class="order-system-upload">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop2"><img src="{{ asset('FrontEnd') }}/assect/img/icon/upload.webp" alt="">Upload
                                        Prescriptions</a>
                                </div>
                                <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">

                                        <div class="modal-body">
                                            <button type="button" style="
                                            float: right;
                                        " class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            <div class="login-container">
                                                <div class="logo-container">
                                                    <!-- Your logo here -->
                                                    <img alt="medEasy" src="{{asset('FrontEnd')}}/assect/img/articles/medeasy-login-signup-otp.webp" decoding="async">
                                                </div>
                                                <h4 class="login-heading">Update Image</h4>
                                                <form class="login-form" action="{{ route('upload-precription') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <!-- Your form fields here -->
                                                    <div class="input-container">
                                                        <textarea type="text" name="address" required class="login-input form-control" placeholder="Your Full Address" value=""></textarea>
                                                    </div>
                                                    <div class="input-container">
                                                        <input type="file" name="image" required class="login-input form-control" placeholder="Your Contact Number" value="">
                                                    </div>

                                                    <div class="button-container">
                                                        <button class="login-button" style="
                                                        font-weight: 500;
                                                    " type="submit">Submit</button>
                                                    </div>
                                                </form>
                                                <!-- Optional: Add social login buttons or other options below -->
                                            </div>
                                        </div>

                                      </div>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="order-system-call">
                                    <a href="#"><img src="{{ asset('FrontEnd') }}/assect/img/icon/phone-call.webp" alt=""> Call to
                                        Order: 01700 000000</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 p-2">
                        <div class="video">
                            <div class="play-btn">
                                <a class="popup-youtube" href="{{ $hto->youtube_link }}"><i
                                        class="fa-regular fa-circle-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Order-System Part End -->

            <!--OTC Product Start -->
            @foreach($tab_categories as $category)
            <section id="otcMedicine" class="products container owl-carousel owl-theme owl-loaded my-4">
                <div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="fw-semibold">{{ $category->name_en }}</h5>
                        <a class="btn-primary" href="{{route('product.category', $category->slug)}}">See All</a>
                    </div>
                    <div class="owl-stage-outer">
                        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 owl-stage g-3">
                            @php $cat_products = get_tab_category_products($category->slug)

                            @endphp

                            @if(count($cat_products) > 0)
                            @php $i=1; @endphp
                                @foreach($cat_products as $product)
                                @php $data = calculateDiscount($product->id) @endphp
                                <div class="col owl-item">
                                    <div class="card h-100">
                                        @if($product->discount_price != 0)
                                        <div class="offer"> {{$data['text']}}</div>
                                        @endif
                                        <a href="{{route('product.details', $product->slug)}}"> <img src="{{asset($product->product_thumbnail)}}" class="card-img-top"
                                                alt="Products Image"></a>
                                        <div class="card-body">
                                            <a class="product-name" href="{{route('product.details', $product->slug)}}">{{ $product->name_en }}<span>{{ $product->unit_weight }} {{ $product->unit->name }} </span></a>
                                            <p class="product-type">{{ $product->type->name }}</p>
                                            <a href="{{route('product.details', $product->slug)}}" class="generic-name">{{$product->group->name }}</a>
                                            <p class="company-name">{{ $product->brand->name_en }}</p>
                                        </div>
                                        <div class="product-price">
                                            @if($product->discount_price != 0)
                                            <p>
                                                ৳{{$data['discount']}}
                                                <span class="main-price">
                                                    ৳{{$product->regular_price}}
                                                </span>
                                            </p>
                                            @endif
                                        </div>
                                        @if($product->stock_qty == 0)
                                            <div class="d-flex justify-content-between mx-lg-2 my-1">
                                                <div class="out-of-stock">Out Of Stock</div>
                                            </div>
                                        @elseif($product->is_varient == 1)
                                            <div class="d-flex justify-content-between mx-lg-2 my-1">
                                                <button type="submit" id="{{ $product->id }}" onclick="window.location='{{ URL::route('product.details',$product->slug); }}'" class="buy_now">Buy Now</button>
                                                <button type="submit" id="{{ $product->id }}" onclick="window.location='{{ URL::route('product.details',$product->slug); }}'" class="add_to_cart">Add to Cart</button>
                                            </div>
                                        @else
                                            <div class="d-flex justify-content-between mx-lg-2 my-1">
                                                <input type="hidden" id="pfrom" value="direct">
                                                <input type="hidden" id="product_product_id" value="{{ $product->id }}" min="1">
                                                <input type="hidden" id="{{ $product->id }}-product_pname" value="{{ $product->name_en }}">
                                                <button type="submit"  onclick="buyNow({{ $product->id }})" class="buy_now">Buy Now</button>
                                                <button type="submit" onclick="addToCartDirect({{ $product->id }})" class="add_to_cart">Add to Cart</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </section>
            @endforeach
            <!-- OTC Products End -->

            <!--Women's Choice Product Start -->
            {{-- <section id="WomenChoice" class="products container owl-carousel owl-theme owl-loaded my-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="fw-semibold">Women's Choice</h5>
                    <a class="btn-primary" href="#">See All</a>
                </div>
                <div class="owl-stage-outer">
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 owl-stage g-3">
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/napkin.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Freedom Heavy Flow Wings <span>16
                                            Pads</span></a>
                                    <p class="product-type">Women's Choice</p>
                                    <a href="#" class="generic-name">Sanitary Napkin</a>
                                    <p class="company-name">ACI Limited</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ Tk 190.00 <span class="main-price">৳ 200.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Noret.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Noret 28 <span>0.03+75+0.30mg</span></a>
                                    <p class="product-type">Pill</p>
                                    <a href="#" class="generic-name">Ethinylestradiol + Ferrous Fumarate +
                                        Norgestrel</a>
                                    <p class="company-name">SMC Enterprise Limited</p>
                                </div>
                                <div class="product-price">
                                    <p>Tk 21.17 <span class="main-price">৳ 23.52</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Minicon.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Minicon <span>0 mg</span></a>
                                    <p class="product-type">Pill</p>
                                    <a href="#" class="generic-name">Norgestrel</a>
                                    <p class="company-name">SMC Enterprise Limited</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 36.00 <span class="main-price">৳ 40.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Test Strip.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Pregnancy Test Strip <span>250
                                            mg</span></a>
                                    <p class="product-type">Women's Choice</p>
                                    <a href="#" class="generic-name">Pregnancy Test Strip</a>
                                    <p class="company-name">Mundipharma (BD) Pvt. Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p class="">৳ 63.00 <span class="main-price">৳ 70.00</span></p>
                                </div>
                                <div class="text-center mx-2 my-1">
                                    <div class="out-of-stock">Out Of Stock</div>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/napkin.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Freedom Heavy Flow Wings <span>16
                                            Pads</span></a>
                                    <p class="product-type">Women's Choice</p>
                                    <a href="#" class="generic-name">Sanitary Napkin</a>
                                    <p class="company-name">ACI Limited</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ Tk 190.00 <span class="main-price">৳ 200.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Noret.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Noret 28 <span>0.03+75+0.30mg</span></a>
                                    <p class="product-type">Pill</p>
                                    <a href="#" class="generic-name">Ethinylestradiol + Ferrous Fumarate +
                                        Norgestrel</a>
                                    <p class="company-name">SMC Enterprise Limited</p>
                                </div>
                                <div class="product-price">
                                    <p>Tk 21.17 <span class="main-price">৳ 23.52</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Minicon.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Minicon <span>0 mg</span></a>
                                    <p class="product-type">Pill</p>
                                    <a href="#" class="generic-name">Norgestrel</a>
                                    <p class="company-name">SMC Enterprise Limited</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 36.00 <span class="main-price">৳ 40.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Test Strip.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Pregnancy Test Strip <span>250
                                            mg</span></a>
                                    <p class="product-type">Women's Choice</p>
                                    <a href="#" class="generic-name">Pregnancy Test Strip</a>
                                    <p class="company-name">Mundipharma (BD) Pvt. Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p class="">৳ 63.00 <span class="main-price">৳ 70.00</span></p>
                                </div>
                                <div class="text-center mx-2 my-1">
                                    <div class="out-of-stock">Out Of Stock</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- Women's Choice Products End -->

            <!--Sexual Wellness Product Start -->
            {{-- <section id="sexualWellness" class="products container owl-carousel owl-theme owl-loaded my-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="fw-semibold">Sexual Wellness</h5>
                    <a class="btn-primary" href="#">See All</a>
                </div>
                <div class="owl-stage-outer">
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 owl-stage g-3">
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/U & ME Condoms.webp"
                                        class="card-img-top" alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">U & ME Long Love Condoms</a>
                                    <p class="product-type">Sexual Wellness</p>
                                    <a href="#" class="generic-name">Condom</a>
                                    <p class="company-name">SMC Enterprise Limited</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 66.50 <span class="main-price">৳ 70.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Sensation Condoms.webp"
                                        class="card-img-top" alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Sensation Super Dotted Strawberry
                                        Condoms</a>
                                    <p class="product-type">Sexual Wellness</p>
                                    <a href="#" class="generic-name">Condom</a>
                                    <p class="company-name">SMC Enterprise Limited</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 38.00 <span class="main-price">৳ 40</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Xtreme Condoms.webp"
                                        class="card-img-top" alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Xtreme 3 in 1 Premium Condoms</a>
                                    <p class="product-type">Sexual Wellness</p>
                                    <a href="#" class="generic-name">Condom</a>
                                    <p class="company-name">SMC Enterprise Limited</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 85.50 <span class="main-price">৳ 90.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Durex Condoms.webp"
                                        class="card-img-top" alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Durex Strawberry Condoms</a>
                                    <p class="product-type">Sexual Wellness</p>
                                    <a href="#" class="generic-name">Condom</a>
                                    <p class="company-name">Reckitt & Benckiser Bangladesh Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p class="">৳ 108.00 <span class="main-price">৳ 120.00</span></p>
                                </div>
                                <div class="text-center mx-2 my-1">
                                    <div class="out-of-stock">Out Of Stock</div>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/U & ME Condoms.webp"
                                        class="card-img-top" alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">U & ME Long Love Condoms</a>
                                    <p class="product-type">Sexual Wellness</p>
                                    <a href="#" class="generic-name">Condom</a>
                                    <p class="company-name">SMC Enterprise Limited</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 66.50 <span class="main-price">৳ 70.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Sensation Condoms.webp"
                                        class="card-img-top" alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Sensation Super Dotted Strawberry
                                        Condoms</a>
                                    <p class="product-type">Sexual Wellness</p>
                                    <a href="#" class="generic-name">Condom</a>
                                    <p class="company-name">SMC Enterprise Limited</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 38.00 <span class="main-price">৳ 40</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Xtreme Condoms.webp"
                                        class="card-img-top" alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Xtreme 3 in 1 Premium Condoms</a>
                                    <p class="product-type">Sexual Wellness</p>
                                    <a href="#" class="generic-name">Condom</a>
                                    <p class="company-name">SMC Enterprise Limited</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 85.50 <span class="main-price">৳ 90.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Durex Condoms.webp"
                                        class="card-img-top" alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Durex Strawberry Condoms</a>
                                    <p class="product-type">Sexual Wellness</p>
                                    <a href="#" class="generic-name">Condom</a>
                                    <p class="company-name">Reckitt & Benckiser Bangladesh Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p class="">৳ 108.00 <span class="main-price">৳ 120.00</span></p>
                                </div>
                                <div class="text-center mx-2 my-1">
                                    <div class="out-of-stock">Out Of Stock</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- Sexual Wellness Choice Products End -->

            <!--Diabetic Care Product Start -->
            {{-- <section id="diabeticCare" class="products container owl-carousel owl-theme owl-loaded my-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="fw-semibold">Diabetic Care</h5>
                    <a class="btn-primary" href="#">See All</a>
                </div>
                <div class="owl-stage-outer">
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 owl-stage g-3">
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/NovoFine Needle.webp"
                                        class="card-img-top" alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">NovoFine Needle <span>3 ml</span></a>
                                    <p class="product-type">Insulin Needle</p>
                                    <a href="#" class="generic-name">Pen Needle</a>
                                    <p class="company-name">Mundipharma (BD) Pvt. Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 12.50 <span class="main-price">৳ 15.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Check Test Strip.webp"
                                        class="card-img-top" alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Quick Check Test Strip <span>25
                                            Strips</span></a>
                                    <p class="product-type">Test Strips</p>
                                    <a href="#" class="generic-name">Blood Glucose Test Strips</a>
                                    <p class="company-name">Swiscare Technology Co Ltd</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 360.00 <span class="main-price">৳ 400.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Insulin Syringe.webp"
                                        class="card-img-top" alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Insulin Syringe <span>U-100 1ml</span></a>
                                    <p class="product-type">Syringe</p>
                                    <a href="#" class="generic-name">Single Use Insulin Syringes</a>
                                    <p class="company-name">Mundipharma (BD) Pvt. Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 10.80 <span class="main-price">৳ 10.80</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Insulin Carry Bag.webp"
                                        class="card-img-top" alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Insulin Carry Bag</a>
                                    <p class="product-type">Ice Bag</p>
                                    <a href="#" class="generic-name">Insulin Carry bag with Ice Pad</a>
                                    <p class="company-name">Healthcare Pharmacuticals Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p class="">৳ 232.00 <span class="main-price">৳ 232.00</span></p>
                                </div>
                                <div class="text-center mx-2 my-1">
                                    <div class="out-of-stock">Out Of Stock</div>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/NovoFine Needle.webp"
                                        class="card-img-top" alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">NovoFine Needle <span>3 ml</span></a>
                                    <p class="product-type">Insulin Needle</p>
                                    <a href="#" class="generic-name">Pen Needle</a>
                                    <p class="company-name">Mundipharma (BD) Pvt. Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 12.50 <span class="main-price">৳ 15.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Check Test Strip.webp"
                                        class="card-img-top" alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Quick Check Test Strip <span>25
                                            Strips</span></a>
                                    <p class="product-type">Test Strips</p>
                                    <a href="#" class="generic-name">Blood Glucose Test Strips</a>
                                    <p class="company-name">Swiscare Technology Co Ltd</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 360.00 <span class="main-price">৳ 400.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Insulin Syringe.webp"
                                        class="card-img-top" alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Insulin Syringe <span>U-100 1ml</span></a>
                                    <p class="product-type">Syringe</p>
                                    <a href="#" class="generic-name">Single Use Insulin Syringes</a>
                                    <p class="company-name">Mundipharma (BD) Pvt. Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 10.80 <span class="main-price">৳ 10.80</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Insulin Carry Bag.webp"
                                        class="card-img-top" alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Insulin Carry Bag</a>
                                    <p class="product-type">Ice Bag</p>
                                    <a href="#" class="generic-name">Insulin Carry bag with Ice Pad</a>
                                    <p class="company-name">Healthcare Pharmacuticals Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p class="">৳ 232.00 <span class="main-price">৳ 232.00</span></p>
                                </div>
                                <div class="text-center mx-2 my-1">
                                    <div class="out-of-stock">Out Of Stock</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section> --}}
            <!-- Diabetic Care Choice Products End -->

            <!--Baby Care Product Start -->
            {{-- <section id="babyCare" class="products container owl-carousel owl-theme owl-loaded my-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="fw-semibold">Baby Care</h5>
                    <a class="btn-primary" href="#">See All</a>
                </div>
                <div class="owl-stage-outer">
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 owl-stage g-3">
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 5% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Neocare.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Neocare <span>NewBorn</span></a>
                                    <p class="product-type">Baby Care</p>
                                    <a href="#" class="generic-name">Diaper</a>
                                    <p class="company-name">Incepta Pharmaceuticals Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 608.00 <span class="main-price">৳ 608.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 5% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Savlon Baby Wipes.webp"
                                        class="card-img-top" alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Savlon Baby Wipes <span>100 p</span></a>
                                    <p class="product-type">Baby Care</p>
                                    <a href="#" class="generic-name">Wipes</a>
                                    <p class="company-name">ACI Limited</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 209.00 <span class="main-price">৳ 220.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer d-none"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Antibacterial Wet Wipes.webp"
                                        class="card-img-top" alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Antibacterial Wet Wipes <span>100's
                                            pack</span></a>
                                    <p class="product-type">Baby Care</p>
                                    <a href="#" class="generic-name">Wipes</a>
                                    <p class="company-name">ACI Limited</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 200.00 <span class="main-price d-none">৳ 150.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Antibacterial Wet Wipes.webp"
                                        class="card-img-top" alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Savlon Antibacterial Wet Wipes <span>60's
                                            pack</span></a>
                                    <p class="product-type">Baby Care</p>
                                    <a href="#" class="generic-name">Wipes</a>
                                    <p class="company-name">ACI Limited</p>
                                </div>
                                <div class="product-price">
                                    <p class="">৳ 150.00 <span class="main-price">৳ 150.00</span></p>
                                </div>
                                <div class="text-center mx-2 my-1">
                                    <div class="out-of-stock">Out Of Stock</div>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 5% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Neocare.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Neocare <span>NewBorn</span></a>
                                    <p class="product-type">Baby Care</p>
                                    <a href="#" class="generic-name">Diaper</a>
                                    <p class="company-name">Incepta Pharmaceuticals Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 608.00 <span class="main-price">৳ 608.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 5% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Savlon Baby Wipes.webp"
                                        class="card-img-top" alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Savlon Baby Wipes <span>100 p</span></a>
                                    <p class="product-type">Baby Care</p>
                                    <a href="#" class="generic-name">Wipes</a>
                                    <p class="company-name">ACI Limited</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 209.00 <span class="main-price">৳ 220.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer d-none"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Antibacterial Wet Wipes.webp"
                                        class="card-img-top" alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Antibacterial Wet Wipes <span>100's
                                            pack</span></a>
                                    <p class="product-type">Baby Care</p>
                                    <a href="#" class="generic-name">Wipes</a>
                                    <p class="company-name">ACI Limited</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 200.00 <span class="main-price d-none">৳ 150.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Antibacterial Wet Wipes.webp"
                                        class="card-img-top" alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Savlon Antibacterial Wet Wipes <span>60's
                                            pack</span></a>
                                    <p class="product-type">Baby Care</p>
                                    <a href="#" class="generic-name">Wipes</a>
                                    <p class="company-name">ACI Limited</p>
                                </div>
                                <div class="product-price">
                                    <p class="">৳ 150.00 <span class="main-price">৳ 150.00</span></p>
                                </div>
                                <div class="text-center mx-2 my-1">
                                    <div class="out-of-stock">Out Of Stock</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- Baby Care Choice Products End -->

            <!--Dental Care Product Start -->
            {{-- <section id="dentalCare" class="products container owl-carousel owl-theme owl-loaded my-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="fw-semibold">Dental Care</h5>
                    <a class="btn-primary" href="#">See All</a>
                </div>
                <div class="owl-stage-outer">
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 owl-stage g-3">
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Orostar Plus.webp"
                                        class="card-img-top" alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Orostar Plus <span>120 ml</span></a>
                                    <p class="product-type">Mouthwash</p>
                                    <a href="#" class="generic-name">Eucalyptol + Menthol + Methyl
                                        Salicylate</a>
                                    <p class="company-name">Square Pharmaceuticals PLC.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 76.73 <span class="main-price">৳ 85.26</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 5% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Mediplus DS.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Mediplus DS <span>140 gm</span></a>
                                    <p class="product-type">Toothpaste</p>
                                    <a href="#" class="generic-name">Toothpaste</a>
                                    <p class="company-name">Anfords</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 128.25 <span class="main-price">৳ 135.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 5% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Sensodyne Repair.webp"
                                        class="card-img-top" alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Sensodyne Repair & Protect <span>70
                                            gm</span></a>
                                    <p class="product-type">Oral Paste</p>
                                    <a href="#" class="generic-name">Long Lasting Protection</a>
                                    <p class="company-name">GSK</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 323.00 <span class="main-price">৳ 340.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 5% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Mediplus Toothbrush.webp"
                                        class="card-img-top" alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Mediplus Toothbrush</a>
                                    <p class="product-type">Toothbrush</p>
                                    <a href="#" class="generic-name">Toothbrush</a>
                                    <p class="company-name">Anfords</p>
                                </div>
                                <div class="product-price">
                                    <p class="">৳ 85.50 <span class="main-price">৳ 90.00</span></p>
                                </div>
                                <div class="text-center mx-2 my-1">
                                    <div class="out-of-stock">Out Of Stock</div>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Orostar Plus.webp"
                                        class="card-img-top" alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Orostar Plus <span>120 ml</span></a>
                                    <p class="product-type">Mouthwash</p>
                                    <a href="#" class="generic-name">Eucalyptol + Menthol + Methyl
                                        Salicylate</a>
                                    <p class="company-name">Square Pharmaceuticals PLC.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 76.73 <span class="main-price">৳ 85.26</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 5% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Mediplus DS.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Mediplus DS <span>140 gm</span></a>
                                    <p class="product-type">Toothpaste</p>
                                    <a href="#" class="generic-name">Toothpaste</a>
                                    <p class="company-name">Anfords</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 128.25 <span class="main-price">৳ 135.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 5% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Sensodyne Repair.webp"
                                        class="card-img-top" alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Sensodyne Repair & Protect <span>70
                                            gm</span></a>
                                    <p class="product-type">Oral Paste</p>
                                    <a href="#" class="generic-name">Long Lasting Protection</a>
                                    <p class="company-name">GSK</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 323.00 <span class="main-price">৳ 340.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 5% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Mediplus Toothbrush.webp"
                                        class="card-img-top" alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Mediplus Toothbrush</a>
                                    <p class="product-type">Toothbrush</p>
                                    <a href="#" class="generic-name">Toothbrush</a>
                                    <p class="company-name">Anfords</p>
                                </div>
                                <div class="product-price">
                                    <p class="">৳ 85.50 <span class="main-price">৳ 90.00</span></p>
                                </div>
                                <div class="text-center mx-2 my-1">
                                    <div class="out-of-stock">Out Of Stock</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Dental Care Choice Products End -->

            <!--Personal Care Product Start -->
            <section id="personalCare" class="products container owl-carousel owl-theme owl-loaded my-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="fw-semibold">Personal Care</h5>
                    <a class="btn-primary" href="#">See All</a>
                </div>
                <div class="owl-stage-outer">
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 owl-stage g-3">
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Sunmask.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Sunmask <span>60gm Tube</span></a>
                                    <p class="product-type">Cream</p>
                                    <a href="#" class="generic-name">Sunmask Cream</a>
                                    <p class="company-name">Square Pharmaceuticals PLC.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 225.00 <span class="main-price">৳ 250.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Moov Cream.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Moov Cream <span>20 gm</span></a>
                                    <p class="product-type">Cream</p>
                                    <a href="#" class="generic-name">Pain Relief Specialist</a>
                                    <p class="company-name">Astra Biopharmaceuticals Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 180.00 <span class="main-price">৳ 200.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Alcohol Pad.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Alcohol Pad <span>100 PCS</span></a>
                                    <p class="product-type">Pad</p>
                                    <a href="#" class="generic-name">Alcohol Pad</a>
                                    <p class="company-name">Mundipharma (BD) Pvt. Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 90.00 <span class="main-price">৳ 100.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Isabgul Plus.webp"
                                        class="card-img-top" alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Isabgul Plus <span>4 gm</span></a>
                                    <p class="product-type">Sachet</p>
                                    <a href="#" class="generic-name">Isabgul Spicy</a>
                                    <p class="company-name">Ibn-Sina Pharmaceuticals Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p class="">৳ 324.00 <span class="main-price">৳ 360.00</span></p>
                                </div>
                                <div class="text-center mx-2 my-1">
                                    <div class="out-of-stock">Out Of Stock</div>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Sunmask.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Sunmask <span>60gm Tube</span></a>
                                    <p class="product-type">Cream</p>
                                    <a href="#" class="generic-name">Sunmask Cream</a>
                                    <p class="company-name">Square Pharmaceuticals PLC.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 225.00 <span class="main-price">৳ 250.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Moov Cream.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Moov Cream <span>20 gm</span></a>
                                    <p class="product-type">Cream</p>
                                    <a href="#" class="generic-name">Pain Relief Specialist</a>
                                    <p class="company-name">Astra Biopharmaceuticals Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 180.00 <span class="main-price">৳ 200.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Alcohol Pad.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Alcohol Pad <span>100 PCS</span></a>
                                    <p class="product-type">Pad</p>
                                    <a href="#" class="generic-name">Alcohol Pad</a>
                                    <p class="company-name">Mundipharma (BD) Pvt. Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 90.00 <span class="main-price">৳ 100.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Isabgul Plus.webp"
                                        class="card-img-top" alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Isabgul Plus <span>4 gm</span></a>
                                    <p class="product-type">Sachet</p>
                                    <a href="#" class="generic-name">Isabgul Spicy</a>
                                    <p class="company-name">Ibn-Sina Pharmaceuticals Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p class="">৳ 324.00 <span class="main-price">৳ 360.00</span></p>
                                </div>
                                <div class="text-center mx-2 my-1">
                                    <div class="out-of-stock">Out Of Stock</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- Personal Care Choice Products End -->

            <!--Devices Product Start -->
            {{-- <section id="devices" class="products container owl-carousel owl-theme owl-loaded my-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="fw-semibold">Devices</h5>
                    <a class="btn-primary" href="#">See All</a>
                </div>
                <div class="owl-stage-outer">
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 owl-stage g-3">
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 30% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Thermometer.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Thermometer <span>Digital</span></a>
                                    <p class="product-type">Digital</p>
                                    <a href="#" class="generic-name">Digital Thermometer</a>
                                    <p class="company-name">Mundipharma (BD) Pvt. Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 185.50 <span class="main-price">৳ 265.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 5% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/ACCU-CHEK Instant S.webp"
                                        class="card-img-top" alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">ACCU-CHEK Instant S <span>Small</span></a>
                                    <p class="product-type">Glucometer</p>
                                    <a href="#" class="generic-name">Blood glucose monitoring device</a>
                                    <p class="company-name">Radiant Pharmaceuticals Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 2491.85 <span class="main-price">৳ 2623.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 15% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Blood Pressure Machine.webp"
                                        class="card-img-top" alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Blood Pressure Machine
                                        <span>Special</span></a>
                                    <p class="product-type">Analog</p>
                                    <a href="#" class="generic-name">Blood Pressure Machine With Stethoscope</a>
                                    <p class="company-name">Made in Japan</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 2184.50 <span class="main-price">৳ 2570.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 20% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Blood Pressure Machine Digital.webp"
                                        class="card-img-top" alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Blood Pressure Machine Digital <span>JPD HA
                                            200</span></a>
                                    <p class="product-type">Surgical Kit</p>
                                    <a href="#" class="generic-name">Electronic Blood Pressure Monitor</a>
                                    <p class="company-name">Made in China</p>
                                </div>
                                <div class="product-price">
                                    <p class="">৳ 2000.00 <span class="main-price">৳ 2500.00</span></p>
                                </div>
                                <div class="text-center mx-2 my-1">
                                    <div class="out-of-stock">Out Of Stock</div>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 30% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Thermometer.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Thermometer <span>Digital</span></a>
                                    <p class="product-type">Digital</p>
                                    <a href="#" class="generic-name">Digital Thermometer</a>
                                    <p class="company-name">Mundipharma (BD) Pvt. Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 185.50 <span class="main-price">৳ 265.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 5% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/ACCU-CHEK Instant S.webp"
                                        class="card-img-top" alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">ACCU-CHEK Instant S <span>Small</span></a>
                                    <p class="product-type">Glucometer</p>
                                    <a href="#" class="generic-name">Blood glucose monitoring device</a>
                                    <p class="company-name">Radiant Pharmaceuticals Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 2491.85 <span class="main-price">৳ 2623.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 15% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Blood Pressure Machine.webp"
                                        class="card-img-top" alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Blood Pressure Machine
                                        <span>Special</span></a>
                                    <p class="product-type">Analog</p>
                                    <a href="#" class="generic-name">Blood Pressure Machine With Stethoscope</a>
                                    <p class="company-name">Made in Japan</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 2184.50 <span class="main-price">৳ 2570.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 20% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Blood Pressure Machine Digital.webp"
                                        class="card-img-top" alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Blood Pressure Machine Digital <span>JPD HA
                                            200</span></a>
                                    <p class="product-type">Surgical Kit</p>
                                    <a href="#" class="generic-name">Electronic Blood Pressure Monitor</a>
                                    <p class="company-name">Made in China</p>
                                </div>
                                <div class="product-price">
                                    <p class="">৳ 2000.00 <span class="main-price">৳ 2500.00</span></p>
                                </div>
                                <div class="text-center mx-2 my-1">
                                    <div class="out-of-stock">Out Of Stock</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Devices Choice Products End -->

            <!--Prescription Medicine Product Start -->
            <section id="prescriptionMedicine"
                class="products container owl-carousel owl-theme owl-loaded my-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="fw-semibold">Prescription Medicine</h5>
                    <a class="btn-primary" href="#">See All</a>
                </div>
                <div class="owl-stage-outer">
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 owl-stage g-3">
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Ecosprin.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Ecosprin <span>75 mg</span></a>
                                    <p class="product-type">Tablet</p>
                                    <a href="#" class="generic-name">Aspirin</a>
                                    <p class="company-name">ACME Laboratories Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 7.20 <span class="main-price">৳ 8.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Bizoran.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Bizoran <span>5 mg+20 mg</span></a>
                                    <p class="product-type">Tablet</p>
                                    <a href="#" class="generic-name">Amlodipine + Olmesartan Medoxomil</a>
                                    <p class="company-name">Beximco Pharmaceuticals Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 162.08 <span class="main-price">৳ 180.09</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Thyrox.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Thyrox <span>50 mcg</span></a>
                                    <p class="product-type">Tablet</p>
                                    <a href="#" class="generic-name">Levothyroxine Sodium</a>
                                    <p class="company-name">Renata Limited</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 59.40 <span class="main-price">৳ 66.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Osartil.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Osartil <span>50 mg</span></a>
                                    <p class="product-type">Tablet</p>
                                    <a href="#" class="generic-name">Losartan Potassium</a>
                                    <p class="company-name">Incepta Pharmaceuticals Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p class="">৳ 90.00 <span class="main-price">৳ 100.00</span></p>
                                </div>
                                <div class="text-center mx-2 my-1">
                                    <div class="out-of-stock">Out Of Stock</div>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Ecosprin.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Ecosprin <span>75 mg</span></a>
                                    <p class="product-type">Tablet</p>
                                    <a href="#" class="generic-name">Aspirin</a>
                                    <p class="company-name">ACME Laboratories Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 7.20 <span class="main-price">৳ 8.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Bizoran.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Bizoran <span>5 mg+20 mg</span></a>
                                    <p class="product-type">Tablet</p>
                                    <a href="#" class="generic-name">Amlodipine + Olmesartan Medoxomil</a>
                                    <p class="company-name">Beximco Pharmaceuticals Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 162.08 <span class="main-price">৳ 180.09</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Thyrox.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Thyrox <span>50 mcg</span></a>
                                    <p class="product-type">Tablet</p>
                                    <a href="#" class="generic-name">Levothyroxine Sodium</a>
                                    <p class="company-name">Renata Limited</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 59.40 <span class="main-price">৳ 66.00</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col owl-item">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{ asset('FrontEnd') }}/assect/img/product/Osartil.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Osartil <span>50 mg</span></a>
                                    <p class="product-type">Tablet</p>
                                    <a href="#" class="generic-name">Losartan Potassium</a>
                                    <p class="company-name">Incepta Pharmaceuticals Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p class="">৳ 90.00 <span class="main-price">৳ 100.00</span></p>
                                </div>
                                <div class="text-center mx-2 my-1">
                                    <div class="out-of-stock">Out Of Stock</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- Prescription Medicine Choice Products End -->



            <!-- Articles Part Start -->
            <section class="articles container my-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="fw-semibold">Health Articles</h5>
                    <a class="btn-primary" href="{{ route('all-health-article') }}">See All</a>
                </div>
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 g-3">
                    @foreach ($home_banners as $home_banner )
                    <div class="col">
                        <div class="card h-100">
                            <a href="{{ route('details-health-article',$home_banner->id) }}"> <img src="{{ asset($home_banner->banner_img) }}" class="card-img-top"
                                    alt="Articles Image"></a>
                            <div class="articles-name">
                                <a href="{{ route('details-health-article',$home_banner->id) }}">{{$home_banner->title_en}}</a>
                            </div>
                            <div class="articles-text">
                                <p>
                                  {{Str::limit($home_banner->description_en,300,'...')}}<a href="{{ route('details-health-article',$home_banner->id) }}">Read More <i
                                            class="fa-solid fa-angle-right"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>
            <!-- Articles Part End -->

            <!-- Testimonials Part Start -->
            <section class="testimonials container my-4 d-none">
                <div class="mb-3">
                    <h5 class="fw-semibold">Testimonials</h5>
                </div>
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 g-3">
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('FrontEnd') }}/assect/img/categories/baby-boy.webp" class="card-img-top"
                                alt="Articles Image">
                            <small class="testimonials-ratings">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </small>
                            <div class="testimonials-name">
                                <p>Nando Ghosh</p>
                                <span>25 April 2024</span>
                            </div>
                            <div class="testimonials-text">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis,
                                    perferendis impedit, quidem necessitatibus quisquam ipsum error qui sint
                                    optio suscipit deserunt!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('FrontEnd') }}/assect/img/categories/baby-boy.webp" class="card-img-top"
                                alt="Articles Image">
                            <small class="testimonials-ratings">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </small>
                            <div class="testimonials-name">
                                <p>Nando Ghosh</p>
                                <span>25 April 2024</span>
                            </div>
                            <div class="testimonials-text">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis,
                                    perferendis impedit, quidem necessitatibus quisquam ipsum error qui sint
                                    optio suscipit deserunt!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('FrontEnd') }}/assect/img/categories/baby-boy.webp" class="card-img-top"
                                alt="Articles Image">
                            <small class="testimonials-ratings">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </small>
                            <div class="testimonials-name">
                                <p>Nando Ghosh</p>
                                <span>25 April 2024</span>
                            </div>
                            <div class="testimonials-text">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis,
                                    perferendis impedit, quidem necessitatibus quisquam ipsum error qui sint
                                    optio suscipit deserunt!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('FrontEnd') }}/assect/img/categories/baby-boy.webp" class="card-img-top"
                                alt="Articles Image">
                            <small class="testimonials-ratings">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </small>
                            <div class="testimonials-name">
                                <p>Nando Ghosh</p>
                                <span>25 April 2024</span>
                            </div>
                            <div class="testimonials-text">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis,
                                    perferendis impedit, quidem necessitatibus quisquam ipsum error qui sint
                                    optio suscipit deserunt!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimonials Part End -->

            <!-- About Part Start -->

            <section class="about container px-3 my-4">
                <div class="mb-3">
                    <h5 class="fw-semibold">Best Online Pharmacy Platform in Bangladesh</h5>
                </div>
                @foreach ($pharmacies as $pharmacy )
                <div>
                    <img src="{{ asset($pharmacy->pharmacy_img) }}" alt="pharmacy Image">
                    <p class="py-2">
                        {!! $pharmacy->description !!}
                    </p>
                </div>
                @endforeach
            </section>

            <!-- About Part End -->


            </section>
            <!-- Benefits Part End -->

            <!-- Service System Part Start -->
            <section class=" my-4">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-6 border p-4">
                            <a class="text-reset text-center d-block" href="#">
                                <img src="{{ asset('FrontEnd') }}/assect/img/icon/car.png">
                                <h4 class="h6">Fast &amp; Prompt Shipping</h4>
                            </a>
                        </div>
                        <div class="col-lg-3 col-6 border p-4">
                            <a class="text-reset text-center d-block" href="#">
                                <img src="{{ asset('FrontEnd') }}/assect/img/icon/phone-call.png">
                                <h4 class="h6">Customer Support</h4>
                            </a>
                        </div>
                        <div class="col-lg-3 col-6 border p-4">
                            <a class="text-reset text-center d-block" href="#">
                                <img src="{{ asset('FrontEnd') }}/assect/img/icon/safe.png">
                                <h4 class="h6">Secured Payment</h4>
                            </a>
                        </div>
                        <div class="col-lg-3 col-6 border p-4">
                            <a class="text-reset text-center d-block" href="#">
                                <img src="{{ asset('FrontEnd') }}/assect/img/icon/back.png">
                                <h4 class="h6">Money Back Guarantee</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Service System Part End -->

        </div>
        <!-- Right Side End -->
    </div>
</section>
<!-- Desktop Option & Slider Part End -->
@endsection
