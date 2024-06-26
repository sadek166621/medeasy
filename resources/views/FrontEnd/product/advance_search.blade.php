<!-- <ul>
    @foreach($products as $item)
        <li>
            <img src="{{ asset($item->product_thumbnail) }}" style="width: 30px; height: 30px;">
            {{ $item->name_en }}</li>
    @endforeach
</ul> -->

<style>
    .card {
        background-color: #fff;
        padding: 15px;
        border: none
    }
    .input-box {
        position: relative
    }
    .input-box i {
        position: absolute;
        right: 13px;
        top: 15px;
        color: #ced4da
    }
    .form-control {
        height: 50px;
        background-color: #eeeeee69
    }
    .form-control:focus {
        background-color: #eeeeee69;
        box-shadow: none;
        border-color: #eee
    }
    .list {
        padding-top: 20px;
        padding-bottom: 10px;
        display: flex;
        align-items: center
    }
    .border-bottom {
        border-bottom: 2px solid #eee;
    }
    .list i {
        font-size: 19px;
        color: red
    }
    .list small {
        color: #dedddd

    }
    .price{
        font-size: 18px;
        font-weight: bold;
        color: #0cc5f3;
    }
    .old-price{
        font-size: 14px;
        color: #adadad;
        margin: 0 0 0 7px;
        text-decoration: line-through;
    }
    .advanced-nm{
        color: black;
        font-size: medium;
        position: relative;
        top: 15px;
    }
    /* @media (min-width: 576px) {
        .advanced-nm{
        color: black;
        font-size: medium;
    }
        } */

    </style>

    @if($products -> isEmpty())
        <div class="row">
            <div class="col-md-12" >
                <div class="card card-body">
                    <h5 class="text-center text-danger p-4">Product Not Found </h5>
                </div>
            </div>
        </div>
    @else


    <div class="">
        <div class="row">
            <div class="col-md-12">
                <div class="card"  style="background-color: #fdfdfd; padding-top: 0">
                    @php $i=1; @endphp
                    @foreach($products as $product)
                        @if($i<=5) @php $i++@endphp @else @php break; @endphp @endif
                    <a href="{{ route('product.details',$product->slug) }}">
                        {{-- @if($loop->index == (count($products) - 1))
                            <div class="list">
                                <img src="{{ asset($product->product_thumbnail) }}" style="width: 30px; height: 30px;">
                                <div class="d-flex flex-column ml-3" style="margin-left: 10px;"> <span style="color: black;">{{ $product->name_en }} </span>
                                </div>
                            </div>
                        @else --}}
                            <div class="list border-bottom">
                                <img src="{{ asset($product->product_thumbnail) }}" style="width: 30px; height: 30px;">
                                <div class="d-flex flex-column ml-3 advanced-nm" style="margin-left: 10px;"> <span >{{ $product->name_en }} </span>
                                    <!-- start product discount section -->
                                    @php
                                        if($product->discount_type == 1){
                                            $price_after_discount = $product->regular_price - $product->discount_price;
                                        }elseif($product->discount_type == 2){
                                            $price_after_discount = $product->regular_price - ($product->regular_price * $product->discount_price / 100);
                                        }
                                    @endphp

                                    @if ($product->discount_price > 0)
                                        <div class="product-price">
                                            <span class="price"> ৳{{ $price_after_discount }} </span>
                                            <span class="old-price">৳ {{ $product->regular_price }}</span>
                                        </div>
                                    @else
                                        <div class="product-price">
                                            <span class="price"> ৳{{ $product->regular_price }} </span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        {{-- @endif --}}
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endif
