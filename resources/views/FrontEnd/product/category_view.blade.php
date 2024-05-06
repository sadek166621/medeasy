@extends('FrontEnd.master')
@section('content')
<section class="option-slider container-fluid mt-lg-4">
    <div class="row">
        <!--Left Side Menu Start -->
        @include('FrontEnd.include.side-cat')
        <!-- Left Side Menu End -->

        <!-- Right Side Start -->
        <div class="col-lg-9">
            <!--Category Product Start -->

            <section id="otcMedicine" class="products container owl-carousel owl-theme owl-loaded my-4">
                <div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="fw-semibold">{{$category->name_en}}</h5>
                        {{-- <a class="btn-primary" href="#">See All</a> --}}
                    </div>
                    <div class="owl-stage-outer">
                        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 owl-stage g-3">
                            @php $cat_products = get_tab_category_products($category->slug) @endphp
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
                                            <a class="product-name" href="{{route('product.details', $product->slug)}}">{{ $product->name_en }}<span>{{ $product->unit_weight }} {{ $product->unit->name }}</span></a>
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
                                                <button type="submit" onclick="addToCartDirect({{ $product->id }})" class="buy_now">Buy Now</button>
                                                <button type="submit" onclick="buyNow({{ $product->id }})" class="add_to_cart">Add to Cart</button>
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


            {{-- <section class="category container my-4 page">
                <div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="fw-semibold">OTC Medicine</h5>
                    </div>
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 owl-stage g-3">
                        <div class="col">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{asset('FrontEnd')}}/assect/img/product/napa.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Napa <span>500 mg</span></a>
                                    <p class="product-type">Tablet</p>
                                    <a href="#" class="generic-name">Paracetamol</a>
                                    <p class="company-name">Beximco Pharmaceuticals Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 1.08 <span class="main-price">৳ 1.20</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{asset('FrontEnd')}}/assect/img/product/monas.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Monas <span>10 mg</span></a>
                                    <p class="product-type">Tablet</p>
                                    <a href="#" class="generic-name">Montelukast</a>
                                    <p class="company-name">ACME Laboratories Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 10.8 <span class="main-price">৳ 12</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{asset('FrontEnd')}}/assect/img/product/surgel.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Sergel <span>20 mg</span></a>
                                    <p class="product-type">Capsule</p>
                                    <a href="#" class="generic-name">Esomeprazole Magnesium Trihydrate</a>
                                    <p class="company-name">Square Pharmaceuticals PLC.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 6.3 <span class="main-price">৳ 7</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{asset('FrontEnd')}}/assect/img/product/cevit.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Ceevit <span>250 mg</span></a>
                                    <p class="product-type">Chewable Tablet</p>
                                    <a href="#" class="generic-name">Vitamin C [Ascorbic acid]</a>
                                    <p class="company-name">Square Pharmaceuticals PLC.</p>
                                </div>
                                <div class="product-price">
                                    <p class="">৳ 1.71 <span class="main-price">৳ 1.90</span></p>
                                </div>
                                <div class="text-center mx-2 my-1">
                                    <div class="out-of-stock">Out Of Stock</div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{asset('FrontEnd')}}/assect/img/product/napa.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Napa <span>500 mg</span></a>
                                    <p class="product-type">Tablet</p>
                                    <a href="#" class="generic-name">Paracetamol</a>
                                    <p class="company-name">Beximco Pharmaceuticals Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 1.08 <span class="main-price">৳ 1.20</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{asset('FrontEnd')}}/assect/img/product/monas.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Monas <span>10 mg</span></a>
                                    <p class="product-type">Tablet</p>
                                    <a href="#" class="generic-name">Montelukast</a>
                                    <p class="company-name">ACME Laboratories Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 10.8 <span class="main-price">৳ 12</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{asset('FrontEnd')}}/assect/img/product/surgel.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Sergel <span>20 mg</span></a>
                                    <p class="product-type">Capsule</p>
                                    <a href="#" class="generic-name">Esomeprazole Magnesium Trihydrate</a>
                                    <p class="company-name">Square Pharmaceuticals PLC.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 6.3 <span class="main-price">৳ 7</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{asset('FrontEnd')}}/assect/img/product/cevit.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Ceevit <span>250 mg</span></a>
                                    <p class="product-type">Chewable Tablet</p>
                                    <a href="#" class="generic-name">Vitamin C [Ascorbic acid]</a>
                                    <p class="company-name">Square Pharmaceuticals PLC.</p>
                                </div>
                                <div class="product-price">
                                    <p class="">৳ 1.71 <span class="main-price">৳ 1.90</span></p>
                                </div>
                                <div class="text-center mx-2 my-1">
                                    <div class="out-of-stock">Out Of Stock</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="category container my-4 page">
                <div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="fw-semibold">OTC Medicine</h5>
                    </div>
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 owl-stage g-3">
                        <div class="col">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{asset('FrontEnd')}}/assect/img/product/napa.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Napa <span>500 mg</span></a>
                                    <p class="product-type">Tablet</p>
                                    <a href="#" class="generic-name">Paracetamol</a>
                                    <p class="company-name">Beximco Pharmaceuticals Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 1.08 <span class="main-price">৳ 1.20</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{asset('FrontEnd')}}/assect/img/product/monas.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Monas <span>10 mg</span></a>
                                    <p class="product-type">Tablet</p>
                                    <a href="#" class="generic-name">Montelukast</a>
                                    <p class="company-name">ACME Laboratories Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 10.8 <span class="main-price">৳ 12</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{asset('FrontEnd')}}/assect/img/product/surgel.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Sergel <span>20 mg</span></a>
                                    <p class="product-type">Capsule</p>
                                    <a href="#" class="generic-name">Esomeprazole Magnesium Trihydrate</a>
                                    <p class="company-name">Square Pharmaceuticals PLC.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 6.3 <span class="main-price">৳ 7</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{asset('FrontEnd')}}/assect/img/product/cevit.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Ceevit <span>250 mg</span></a>
                                    <p class="product-type">Chewable Tablet</p>
                                    <a href="#" class="generic-name">Vitamin C [Ascorbic acid]</a>
                                    <p class="company-name">Square Pharmaceuticals PLC.</p>
                                </div>
                                <div class="product-price">
                                    <p class="">৳ 1.71 <span class="main-price">৳ 1.90</span></p>
                                </div>
                                <div class="text-center mx-2 my-1">
                                    <div class="out-of-stock">Out Of Stock</div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{asset('FrontEnd')}}/assect/img/product/napa.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Napa <span>500 mg</span></a>
                                    <p class="product-type">Tablet</p>
                                    <a href="#" class="generic-name">Paracetamol</a>
                                    <p class="company-name">Beximco Pharmaceuticals Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 1.08 <span class="main-price">৳ 1.20</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{asset('FrontEnd')}}/assect/img/product/monas.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Monas <span>10 mg</span></a>
                                    <p class="product-type">Tablet</p>
                                    <a href="#" class="generic-name">Montelukast</a>
                                    <p class="company-name">ACME Laboratories Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 10.8 <span class="main-price">৳ 12</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{asset('FrontEnd')}}/assect/img/product/surgel.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Sergel <span>20 mg</span></a>
                                    <p class="product-type">Capsule</p>
                                    <a href="#" class="generic-name">Esomeprazole Magnesium Trihydrate</a>
                                    <p class="company-name">Square Pharmaceuticals PLC.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 6.3 <span class="main-price">৳ 7</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="category container my-4 page">
                <div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="fw-semibold">OTC Medicine</h5>
                    </div>
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 owl-stage g-3">
                        <div class="col">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{asset('FrontEnd')}}/assect/img/product/napa.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Napa <span>500 mg</span></a>
                                    <p class="product-type">Tablet</p>
                                    <a href="#" class="generic-name">Paracetamol</a>
                                    <p class="company-name">Beximco Pharmaceuticals Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 1.08 <span class="main-price">৳ 1.20</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{asset('FrontEnd')}}/assect/img/product/monas.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Monas <span>10 mg</span></a>
                                    <p class="product-type">Tablet</p>
                                    <a href="#" class="generic-name">Montelukast</a>
                                    <p class="company-name">ACME Laboratories Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 10.8 <span class="main-price">৳ 12</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{asset('FrontEnd')}}/assect/img/product/surgel.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Sergel <span>20 mg</span></a>
                                    <p class="product-type">Capsule</p>
                                    <a href="#" class="generic-name">Esomeprazole Magnesium Trihydrate</a>
                                    <p class="company-name">Square Pharmaceuticals PLC.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 6.3 <span class="main-price">৳ 7</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{asset('FrontEnd')}}/assect/img/product/cevit.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Ceevit <span>250 mg</span></a>
                                    <p class="product-type">Chewable Tablet</p>
                                    <a href="#" class="generic-name">Vitamin C [Ascorbic acid]</a>
                                    <p class="company-name">Square Pharmaceuticals PLC.</p>
                                </div>
                                <div class="product-price">
                                    <p class="">৳ 1.71 <span class="main-price">৳ 1.90</span></p>
                                </div>
                                <div class="text-center mx-2 my-1">
                                    <div class="out-of-stock">Out Of Stock</div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{asset('FrontEnd')}}/assect/img/product/napa.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Napa <span>500 mg</span></a>
                                    <p class="product-type">Tablet</p>
                                    <a href="#" class="generic-name">Paracetamol</a>
                                    <p class="company-name">Beximco Pharmaceuticals Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 1.08 <span class="main-price">৳ 1.20</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="category container my-4 page">
                <div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="fw-semibold">OTC Medicine</h5>
                    </div>
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 owl-stage g-3">
                        <div class="col">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{asset('FrontEnd')}}/assect/img/product/napa.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Napa <span>500 mg</span></a>
                                    <p class="product-type">Tablet</p>
                                    <a href="#" class="generic-name">Paracetamol</a>
                                    <p class="company-name">Beximco Pharmaceuticals Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 1.08 <span class="main-price">৳ 1.20</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{asset('FrontEnd')}}/assect/img/product/monas.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Monas <span>10 mg</span></a>
                                    <p class="product-type">Tablet</p>
                                    <a href="#" class="generic-name">Montelukast</a>
                                    <p class="company-name">ACME Laboratories Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 10.8 <span class="main-price">৳ 12</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{asset('FrontEnd')}}/assect/img/product/surgel.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Sergel <span>20 mg</span></a>
                                    <p class="product-type">Capsule</p>
                                    <a href="#" class="generic-name">Esomeprazole Magnesium Trihydrate</a>
                                    <p class="company-name">Square Pharmaceuticals PLC.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 6.3 <span class="main-price">৳ 7</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{asset('FrontEnd')}}/assect/img/product/cevit.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Ceevit <span>250 mg</span></a>
                                    <p class="product-type">Chewable Tablet</p>
                                    <a href="#" class="generic-name">Vitamin C [Ascorbic acid]</a>
                                    <p class="company-name">Square Pharmaceuticals PLC.</p>
                                </div>
                                <div class="product-price">
                                    <p class="">৳ 1.71 <span class="main-price">৳ 1.90</span></p>
                                </div>
                                <div class="text-center mx-2 my-1">
                                    <div class="out-of-stock">Out Of Stock</div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{asset('FrontEnd')}}/assect/img/product/napa.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Napa <span>500 mg</span></a>
                                    <p class="product-type">Tablet</p>
                                    <a href="#" class="generic-name">Paracetamol</a>
                                    <p class="company-name">Beximco Pharmaceuticals Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 1.08 <span class="main-price">৳ 1.20</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class="offer"> 10% off</div>
                                <a href="#"> <img src="{{asset('FrontEnd')}}/assect/img/product/monas.webp" class="card-img-top"
                                        alt="Products Image"></a>
                                <div class="card-body">
                                    <a class="product-name" href="#">Monas <span>10 mg</span></a>
                                    <p class="product-type">Tablet</p>
                                    <a href="#" class="generic-name">Montelukast</a>
                                    <p class="company-name">ACME Laboratories Ltd.</p>
                                </div>
                                <div class="product-price">
                                    <p>৳ 10.8 <span class="main-price">৳ 12</span></p>
                                </div>
                                <div class="d-flex justify-content-between mx-lg-2 my-1">
                                    <button type="submit" class="buy_now">Buy Now</button>
                                    <button type="submit" class="add_to_cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- Category Products End -->

            <!-- Pagination Part Start -->
            {{-- <section class="pagination">
                <button id="prevPage">Prev</button>
                <div class="num__btns">
                    <button class="num__btn num__btn--active">1</button>
                    <button class="num__btn">2</button>
                    <button class="num__btn">3</button>
                    <button class="num__btn">4</button>
                    <button class="num__btn">5</button>
                    <div class="active__indicator"></div>
                </div>
                <button id="nextPage">Next</button>
            </section> --}}
            <!-- Pagination Part End -->

            <!-- Featured Brands Part Start -->
            <div class="featured-brands container owl-carousel owl-theme owl-loaded my-4">
                <div class="mb-3">
                    <h5 class="fw-semibold">Featured Brands</h5>
                </div>
                <div class="owl-stage-outer">
                    <div class="row owl-stage g-1">
                        <div class="col owl-item">
                            <a class="card" href="#"><img src="{{asset('FrontEnd')}}/assect/img/brand/square ltd..webp"
                                    alt="Featured Brands"></a>
                        </div>
                        <div class="col owl-item">
                            <a class="card" href="#"><img src="{{asset('FrontEnd')}}/assect/img/brand/smc ltd..webp"
                                    alt="Featured Brands"></a>
                        </div>
                        <div class="col owl-item">
                            <a class="card" href="#"><img src="{{asset('FrontEnd')}}/assect/img/brand/skf ltd..webp"
                                    alt="Featured Brands"></a>
                        </div>
                        <div class="col owl-item">
                            <a class="card" href="#"><img src="{{asset('FrontEnd')}}/assect/img/brand/renata ltd..webp"
                                    alt="Featured Brands"></a>
                        </div>
                        <div class="col owl-item">
                            <a class="card" href="#"><img src="{{asset('FrontEnd')}}/assect/img/brand/incepta ltd..webp"
                                    alt="Featured Brands"></a>
                        </div>
                        <div class="col owl-item">
                            <a class="card" href="#"><img src="{{asset('FrontEnd')}}/assect/img/brand/beximco ltd..webp"
                                    alt="Featured Brands"></a>
                        </div>
                        <div class="col owl-item">
                            <a class="card" href="#"><img src="{{asset('FrontEnd')}}/assect/img/brand/aristopharma ltd..webp"
                                    alt="Featured Brands"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Featured Brands Part End -->

            <!-- About Part Start -->
            <section class="about container px-3 my-4">
                <div class="mb-3">
                    <h5 class="fw-semibold">Best Online Pharmacy Platform in Bangladesh</h5>
                </div>
                <div>
                    <img src="{{asset('FrontEnd')}}/assect/img/branding/branding.jpg" alt="About Image">
                    <p class="py-2">Bangladesh is a developing nation with more than <span
                            class="fw-semibold">180 million</span> people. With the advent of
                        technology, Bangladesh's health care sector has shown tremendous expansion in the past
                        few years. As a result, several online pharmacies and health care platforms have been
                        developed to provide affordable access to quality healthcare services.
                    </p>
                    <p class="py-2">
                        <span class="fw-semibold">Medic</span> is Bangladesh's most trusted and reliable <span
                            class="fw-semibold">online pharmacy platform.</span> The secure and user-friendly
                        platform makes it easy to access the services
                        provided. Medic also offers discounts and deals to help make health care services more
                        affordable. The platform provides 24/7 customer service and support to ensure customers
                        get the best possible experience.
                    </p>
                    <p class="py-1">
                        Overall, Medic is the <span class="fw-semibold">best online pharmacy platform in
                            Bangladesh.</span> It
                        provides affordable access to quality health care services and offers the best customer
                        support. Medic is the best choice for anyone looking for quality health care services
                        in Bangladesh.
                    </p>
                </div>
            </section>
            <!-- About Part End -->

            <!-- Service System Part Start -->
            <section class=" my-4">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-6 border p-4">
                            <a class="text-reset text-center d-block" href="#">
                                <img src="{{asset('FrontEnd')}}/assect/img/icon/car.png">
                                <h4 class="h6">Fast &amp; Prompt Shipping</h4>
                            </a>
                        </div>
                        <div class="col-lg-3 col-6 border p-4">
                            <a class="text-reset text-center d-block" href="#">
                                <img src="{{asset('FrontEnd')}}/assect/img/icon/phone-call.png">
                                <h4 class="h6">Customer Support</h4>
                            </a>
                        </div>
                        <div class="col-lg-3 col-6 border p-4">
                            <a class="text-reset text-center d-block" href="#">
                                <img src="{{asset('FrontEnd')}}/assect/img/icon/safe.png">
                                <h4 class="h6">Secured Payment</h4>
                            </a>
                        </div>
                        <div class="col-lg-3 col-6 border p-4">
                            <a class="text-reset text-center d-block" href="#">
                                <img src="{{asset('FrontEnd')}}/assect/img/icon/back.png">
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
@endsection
