@extends('FrontEnd.master')
@section('content')
<section class="option-slider container-fluid mt-lg-4">
    <div class="row">
        <!--Left Side Menu Start -->
        @include('FrontEnd.include.side-cat')

        <!-- Left Side Menu End -->

        <!-- Right Side Start -->
        <div class="col-lg-9">
            <!-- Product Information Start -->
            <section class="container product-info p-4 p-lg-0">
                <div class="row">
                    <div class="col-md-7">
                        <div class="product-thumbnail">
                            <img src="{{asset($product->product_thumbnail)}}" alt="">
                        </div>
                    </div>

                    {{-- @php
                        dd($product->id)
                    @endphp --}}

                    <div class="col-md-5 mt-4 mt-lg-0">
                        <?php $discount = calculateDiscount($product->id) ?>
                        <input type="hidden" id="product_id" value="{{ $product->id }}"  min="1">
                        <input type="hidden" id="discount_type" value="{{ $product->discount_type }}"  min="1">
                        <input type="hidden" id="discount" value="{{ $product->discount_price }}"  min="0">
                        <input type="hidden" id="discounted_price" value=""  min="0">

                        <input type="hidden" id="pname" value="{{ $product->name_en }}">

                        <input type="hidden" id="product_price" value="{{ $discount['discount'] }}">

                        <input type="hidden" id="minimum_buy_qty" value="{{ $product->minimum_buy_qty }}" >
                        <input type="hidden" id="stock_qty" value="{{ $product->stock_qty }}">

                        <input type="hidden" id="buyNowCheck" value="0">
                        <input type="hidden" name="" id="discount_amount" value="{{$product->regular_price - $discount['discount']}}">
                        {{-- @php
                            dd($product->regular_price - $discount['discount'] );
                        @endphp --}}
                        <div class="product-description border p-3">
                            <div>
                                <h2 class="product-title">{{ $product->name_en }} <span>{{ $product->unit_weight }} {{ $product->unit->name }}</span></h2>
                                <p class="product-type">{{ $product->type->name }}</p>
                                <a href="#" class="generic-name">{{ $product->group->name }}</a>
                                <p class="company-name">{{ $product->brand->name_en }}</p>
                                <div>
                                    @if($product->discount_price != 0)
                                <p class="main-price">
                                    <span id=main_price> ৳{{$product->regular_price}}</span>
                                    {{$discount['text']}}
                                </p>
                                @endif
                                <p class="product-price">Best Price: ৳<span id=product_current_price>{{$discount['discount']}}</span>/<span
                                class="quantity" id=variant_type>Piece</span></p>
                                </div>
                            </div>
                            <div>

                                {{-- @if ($product->is_varient == 1)
                                @php
                                    $variants = App\Models\ProductStock::where('product_id', $product->id)->get();
                                    // dd($variants);
                                @endphp
                                <select class="form-select" id="variant" aria-label="Default select example" onchange="selectAttribute('{{ $attribute->attribute_id }}{{ $attr->name }}', '{{ $value }}', '{{ $product->id }}', '{{ $i }}')"
                                    name="option_{{$i}}>
                                    @foreach ($variants as $key=> $variant)
                                    <option value="{{ $variant->varient }}" {{ $key == 0 ? 'selected':'' }}>{{ $variant->varient }}</option>
                                    @endforeach


                                </select>
                                @endif --}}
                                <form id="choice_form">
                                    <div class="row " id="choice_attributes">
                                        @php
                                            $variants = App\Models\ProductStock::where('product_id', $product->id)->get();
                                            // dd($variants);
                                        @endphp
                                        <input type="hidden" id="pvarient" value="{{ $variants[0]->varient }}">
                                        @if($product->is_varient)
                {{--                            @php dd($product->attribute_values->attribute_id)  @endphp--}}
                                            @php $i=0; @endphp
                                            @php
                                                $firstAttr = '';
                                                $firstVal = '';
                                                $position = 1;
                                            @endphp
                                            @foreach(json_decode($product->attribute_values) as $key => $attribute)
                                                @php
                                                    $attr = get_attribute_by_id($attribute->attribute_id);
                                                    if($key==0){
                                                        $firstAttr = $attribute->attribute_id.$attr->name;
                                                    }
                                                    $i++;
                //                                    dd($attribute->attribute_id, $attr->name, $attribute->values[0], $product->id, 1)
                                                @endphp
                                                {{-- <input type="hidden" name="" onload="selectAttribute('{{$attribute->attribute_id}}', '{{$attr->name}}', '{{$attribute->values[0]}}', '{{$product->id}}', '1')"> --}}
                                                <div class="attr-detail attr-size mb-3 col-12">
                                                    {{-- <strong class="mr-10">{{ $attr->name }}: </strong> --}}
                                                    <input type="hidden" name="attribute_ids[]" id="attribute_id_{{ $i }}" value="{{ $attribute->attribute_id }}">
                                                    <input type="hidden" name="attribute_names[]" id="attribute_name_{{ $i }}" value="{{ $attr->name }}">
                                                    <input type="hidden" id="attribute_check_{{ $i }}" value="1">
                                                    <input type="hidden" id="attribute_check_attr_{{ $i }}" value="1">
                                                    <div class="list-filter size-filter font-p">

                                                        <select class="form-select" id="variant" aria-label="Default select example"
                                                            name="option_{{$i}}" onchange="selectAttribute('{{ $attribute->attribute_id }}{{ $attr->name }}', this.options[this.selectedIndex].value, '{{ $product->id }}', '{{ $i }}')">
                                                            @foreach ($attribute->values as $key=> $value)
                                                                @if ($key == 0)
                                                                    <option value="{{ $value }}" selected>{{$value}}</option>
                                                                    @php
                                                                        $firstVal = $value;
                                                                    @endphp
                                                                @else
                                                                    <option value="{{ $value }}" >{{$value}}</option>
                                                                @endif
                                                            @endforeach

                                                        </select>
                                                        <input type="hidden" name="attribute_options[]" id="{{ $attribute->attribute_id }}{{ $attr->name }}" class="attr_value_{{ $i }}">
                                                    </div>
                                                </div>
                                            @endforeach
                                            <input type="hidden" id="firstSelectAttr" value="{{ $firstAttr }}">
                                            <input type="hidden" id="firstSelectAttrVal" value="{{ $firstVal }}">
                                            <input type="hidden" id="firstSelectAttrPosition" value="{{ $position }}">
                                            <input type="hidden" id="total_attributes" value="{{ count(json_decode($product->attribute_values)) }}">
                                        @endif
                                    </div>
                                </form>

                            </div>

                            <div class="qty-container">
                                <button class="qty-btn-minus" type="button"><i
                                        class="fa-solid fa-minus"></i></button>
                                <input type="text" name="quantity" value="{{$product->minimum_buy_qty}}" min="{{$product->minimum_buy_qty}}" id="qty" class="input-qty input-rounded" />
                                <button class="qty-btn-plus" type="button"><i
                                        class="fa-solid fa-plus"></i></button>
                            </div>

                            <div class="text-center">
                                {{-- <button type="submit" class="product_page_buy_now" type="button">Buy
                                    Now</button> --}}
                                <button type="submit" onclick="test()" class="product_page_add_to_cart" style="width: 100%;" type="button">Add to
                                    cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- @php
                dd($product->id)
            @endphp --}}
            <!-- Product Information End -->

            <!--Similar Product Start -->
            <section id="otcMedicine" class="products container owl-carousel owl-theme owl-loaded my-5">
                <div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="fw-semibold">Alternatives</h5>
                        {{-- <a class="btn-primary" href="#">See All</a> --}}
                    </div>
                    <div class="owl-stage-outer">
                        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 owl-stage g-3">
                            @foreach ($alternatives as $altproduct )
                            @php $data = calculateDiscount($altproduct->id) @endphp
                                <div class="col owl-item">
                                    <div class="card h-100">
                                        @if($altproduct->discount_price != 0)
                                        <div class="offer"> {{$data['text']}}</div>
                                        @endif
                                        <a href="{{route('product.details', $altproduct->slug)}}"> <img src="{{asset($altproduct->product_thumbnail)}}" class="card-img-top"
                                                alt="Products Image"></a>
                                        <div class="card-body">
                                            <a class="product-name" href="{{route('product.details', $altproduct->slug)}}">{{ $altproduct->name_en }}<span>{{ $altproduct->unit_weight }} {{ $altproduct->unit->name }}</span></a>
                                            <p class="product-type">{{ $altproduct->type->name }}</p>
                                            <a href="{{route('product.details', $altproduct->slug)}}" class="generic-name">{{$altproduct->group->name }}</a>
                                            <p class="company-name">{{ $altproduct->brand->name_en }}</p>
                                        </div>
                                        <div class="product-price">
                                            @if($altproduct->discount_price != 0)
                                            <p>
                                                ৳{{$data['discount']}}
                                                <span class="main-price">
                                                    ৳{{$altproduct->regular_price}}
                                                </span>
                                            </p>
                                            @endif
                                        </div>
                                        @if($altproduct->stock_qty == 0)
                                            <div class="d-flex justify-content-between mx-lg-2 my-1">
                                                <div class="out-of-stock">Out Of Stock</div>
                                            </div>
                                        @elseif($altproduct->is_varient == 1)
                                            <div class="d-flex justify-content-between mx-lg-2 my-1">
                                                <button type="submit" id="{{ $altproduct->id }}" onclick="window.location='{{ URL::route('product.details',$altproduct->slug); }}'" class="buy_now">Buy Now</button>
                                                <button type="submit" id="{{ $altproduct->id }}" onclick="window.location='{{ URL::route('product.details',$altproduct->slug); }}'" class="add_to_cart">Add to Cart</button>
                                            </div>
                                        @else
                                            <div class="d-flex justify-content-between mx-lg-2 my-1">
                                                <input type="hidden" id="pfrom" value="direct">
                                                <input type="hidden" id="product_product_id" value="{{ $altproduct->id }}" min="1">
                                                <input type="hidden" id="{{ $altproduct->id }}-product_pname" value="{{ $product->name_en }}">
                                                <button type="submit"  onclick="buyNow({{ $altproduct->id }})" class="buy_now">Buy Now</button>
                                                <button type="submit" onclick="addToCartDirect({{ $altproduct->id }})" class="add_to_cart">Add to Cart</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <!-- Similar Products End -->

            <!--Medicine overview Start -->
            <section class="medicine-overview container my-4 page">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="fw-semibold"><i class="fa-solid fa-notes-medical"></i> Medicine Overview</h5>
                    <!-- <a class="btn-primary" href="#">See All</a> -->
                </div>
                <hr>
                <div class="mt-2">
                    {!! $product->description_en !!}
                </div>

            </section>
            <!-- Medicine overview End -->

            <!-- Service System Part Start -->
            <section class="my-4">
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
                <input type="hidden" id="product_regular_price" value="{{ $product->regular_price }}">
            </section>
            <!-- Service System Part End -->
        </div>
        <!-- Right Side End -->
    </div>
</section>

@endsection
@push('js')
<script>
    $(document).ready(function () {
        var variant = $('#variant').val();
        var product_id = {{ $product->id }};
        var discount_type = parseInt($('#discount_type').val());
        var discount = parseFloat($('#discount').val());
        var current_price = 0;
        var product_quantity = $('#qty').val();
        console.log(variant,product_id,discount_type, discount,current_price,product_quantity);
        $.ajax({
            type: 'GET',
                url: '/varient-price/'+ product_id +'/'+variant,
                dataType:'json',

                success:function(response){
                    console.log(response);
                    $('#main_price').text(response.price);
                     if(discount_type == 1){
                        current_price = response.price - discount;
                     }
                     else{
                        current_price = response.price - (response.price*discount/100);
                     }
                    $('#product_current_price').text(current_price *product_quantity);
                    $('#variant_type').text(variant);
                    $('#discount_amount').val(current_price);
                }

        });

        var paramAttr = $('#firstSelectAttr').val();
        var paramAttrVal = $('#firstSelectAttrVal').val();
        var paramAttrPosition = $('#firstSelectAttrPosition').val();
        selectAttribute(paramAttr, paramAttrVal, product_id, paramAttrPosition);
    });
    $('#variant').change(function(){
        var variant = $('#variant').val();
        var product_id = {{ $product->id }};
        var discount_type = parseInt($('#discount_type').val());
        var discount = parseFloat($('#discount').val());
        var current_price = 0;
        var product_quantity = $('#qty').val();
        console.log(discount_type, discount);
        $.ajax({

            type: 'GET',
                url: '/varient-price/'+ product_id +'/'+variant,
                dataType:'json',

                success:function(response){
                    // console.log(response);



                    $('#main_price').text(response.price);
                     if(discount_type == 1){
                        current_price = response.price - discount;
                     }
                     else{
                        current_price = response.price - (response.price*discount/100);
                     }
                    $('#product_current_price').text(current_price *product_quantity);
                    $('#variant_type').text(variant);
                    $('#discount_amount').val(current_price)
                }

        });
    })

    $('.qty-btn-plus').click(function(){
        var product_quantity = $('#qty').val();
        var product_price = parseFloat($('#discount_amount').val());
        $('#product_current_price').text(product_quantity * product_price);
    })

    $('.qty-btn-minus').click(function(){
        var product_quantity = $('#qty').val();
        var product_price = parseFloat($('#discount_amount').val());
        $('#product_current_price').text(product_quantity * product_price);
    })

</script>
@endpush
