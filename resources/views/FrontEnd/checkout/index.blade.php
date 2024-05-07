@extends('FrontEnd.master')
@section('content')
<section class="option-slider container-fluid mt-lg-4">
    <div class="row">
        <!--Left Side Menu Start -->
        @include('FrontEnd.include.side-cat')
        <!-- Left Side Menu End -->

        <!-- Right Side Start -->
        <div class="col-lg-9">
            <!-- Check Out Information Start -->


            <section class="container check-out-info mt-5 mt-lg-0 p-4 p-md-0">
                <div class="row g-4 flex-md-row flex-column-reverse">
                    <div class="col-md-7 p-4 border address">
                        {{-- <form class="my-2" action="{{ route('apply-coupon') }} method="post">
                            @csrf
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Coupon Code">
                                <input type="hidden" name="cart_value" value="{{ $cartTotal }}">
                                <div class="ms-2">
                                    <button type="submit" class="btn btn-primary py-2">Apply</button>
                                </div>
                            </div>
                        </form> --}}
                        <div class="box-cart-right cpn-m ">
                            <h5 class="font-md-bold mb-10">Apply Coupon</h5>
                            <div class="form-group" style="margin-top: 11px;margin-bottom: 20px;">
                              <form action="{{ route('apply-coupon') }}" class="d-flex" method="post">
                                @csrf
                              <input class="form-control mr-15" name="apply_coupon" placeholder="Enter Your Coupon" style="width: 195px;">
                              <input type="hidden" name="cart_value" value="{{ $cartTotal }}">
                              {{-- <button type="submit" style="margin-left: 7px" class="btn btn-primary py-2">Submit</button> --}}
                              <button type="submit" style="margin-left: 7px" class="btn btn-primary py-2">Apply</button>
                            </form>
                            </div>
                          </div>
                        <br>
                        <form action="{{ route('checkout.payment') }}" method="Post">
                            @csrf
                        <h5 class="fw-semibold mb-4">Delivery Information</h5>
                        <div class="row g-3">
                            <div class="col-md-6 form-group">
                                <label>First Name</label>
                                <input class="form-control" type="text"  id="name" name="name" placeholder="Full Name" value="{{ Auth::user()->name ?? old('name') }}">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Mobile No</label>
                                <input class="form-control" required type="number" name="phone" placeholder="Phone" id="phone" value="{{ Auth::user()->phone ?? old('phone') }}">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Address</label>
                                <textarea name="address" id="address" class="form-control" placeholder="Address" required>{{ old('address') }}</textarea>
                                @error('address')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Devision</label><span class="text-danger">*</span>
                                  <select class="form-control font-sm select-style1 color-gray-700" name="division_id" id="division_id" required>
                                    <option value="">Select Division</option>

                                    @foreach(get_divisions() as $division)
                                      <option value="{{ $division->id }}">{{ ucwords($division->division_name_en) }}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-group">
                                    <label>District</label><span class="text-danger">*</span>
                                  <select class="form-control font-sm select-style1 color-gray-700"  name="district_id" id="district_id" required>
                                    <option selected=""  value="">Select District</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Upazila</label><span class="text-danger">*</span>
                                  <select class="form-control font-sm select-style1 color-gray-700" name="upazilla_id" id="upazilla_id" required>
                                    <option selected=""  value="">Select Upazilla</option>
                                  </select>
                                </div>
                              </div>
                            <div class="col-md-6 form-group">
                                <label>Product Shipping</label><span class="text-danger">*</span>
                                <select class="form-control" name="shipping_id" id="shipping_id" required>
                                    <option value="">Select Shipping</option>
                                                    @foreach ($shippings as $key => $shipping)
                                                        <option value="{{ $shipping->id }}">@if($shipping->type == 1) Inside Dhaka @else Outside Dhaka @endif </option>
                                                    @endforeach
                                  </select>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="exampleFormControlTextarea1" class="form-label">Note</label>
                                <textarea name="comment" class="form-control" id="comment" placeholder="Additional Information" rows="5">{{old('comment')}}</textarea>
                                @error('address')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-5">
                            <p>*Price shown includes of all applications taxes, fees and subject to
                                availability.
                            </p>
                            <p>*By Proceeding order you are committed to show your prescription if we want for
                                certain medicine</p>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="billing border">
                            <h5 class="billing-title">Products</h5>
                            <div class="p-4">
                                <div class="select-products">
                                    @foreach ($carts as $cart)
                                    <div class="d-flex align-items-center">
                                        <img class="thumbnail" src="{{ $cart->options->image }}" alt="">
                                        <div class="d-flex flex-column">
                                            <p class="product-title">{{ $cart->name }}</p>
                                            <p class="title-small">{{ $cart->options->unit_weight }} {{ $cart->options->unit }}</p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between mb-1">
                                        <p class="product-price" >৳{{$cart->subtotal}}</p>
                                    </div>
                                    @endforeach
                                </div>
{{--
                                <div class="select-products">
                                    <div class="d-flex align-items-center">
                                        <img class="thumbnail" src="{{asset('FrontEnd')}}/assect/img/product/napa.webp" alt="">
                                        <div class="d-flex flex-column">
                                            <p class="product-title">Napa</p>
                                            <p class="title-small">20 mg</p>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <p class="product-price">৳ 150</p>
                                        <p class="main-price">৳ 150</p>
                                    </div>
                                </div>

                                <div class="select-products">
                                    <div class="d-flex align-items-center">
                                        <img class="thumbnail" src="{{asset('FrontEnd')}}/assect/img/product/napa.webp" alt="">
                                        <div class="d-flex flex-column">
                                            <p class="product-title">Napa</p>
                                            <p class="title-small">20 mg</p>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <p class="product-price">৳ 150</p>
                                        <p class="main-price">৳ 150</p>
                                    </div>
                                </div> --}}

                                <div class="price-info">
                                    <p>MRP Total</p>
                                    <p>৳ {{ $cartTotal }}</p>
                                </div>
                                <div class="price-info">
                                    <p>Delivery Charge</p>
                                    <p>৳<span id="ship_amount">0.00</span></p>
                                </div>
                                {{-- <div class="price-info">
                                    <p>Discount</p>
                                    <p>৳ 5</p>
                                </div> --}}

                                @if (Session::get('couponCode'))
                                <input type="hidden" name="coupon" value="{{ $cartTotal }}">
                                @endif
                                <div id="couponInformation" style="margin-top: 13px;">
                                </div>

                                <hr>
                                <div class="total-price">
                                    <input type="hidden" value="" name="shipping_charge" class="ship_amount" />
                                    <input type="hidden" value="" name="shipping_type" class="shipping_type" />
                                    <input type="hidden" value="" name="shipping_name" class="shipping_name" />
                                    <input type="hidden" value="{{ $cartTotal }}" name="sub_total" id="cartSubTotalShi" />
                                    <input type="hidden" value="" name="grand_total" id="grand_total" />
                                    <p>Total Amount</p>
                                    <p>৳<span id="grand_total_set">{{ $cartTotal }}</span></p>
                                </div>
                                {{-- <div class="custom-control">
                                    <input type="hidden" class="custom-control-input" name="name="payment_option"" id="paypal">
                                    <label class="custom-control-label" for="paypal">Cash On
                                        Delivery</label>
                                </div> --}}
                                <input type="hidden" class="custom-control-input" name="payment_option" id="cash_on_delivery" value="cod" >

                                <div class="custom-control d-none">
                                    <input type="radio" class="custom-control-input" name="payment"
                                        id="banktransfer">
                                    <label class="custom-control-label" for="banktransfer">Mobile
                                        Banking</label>
                                </div>
                                <div class="d-flex justify-content-end mt-3">
                                    <button class="btn btn-primary btn-lg d-block fw-semibold py-2 px-4">Place
                                        Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
            <!-- Check Out Information End-->

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
            </section>
            <!-- Service System Part End -->
        </div>
        <!-- Right Side End -->
    </div>
</section>
@endsection
@push('js')
<!--  Division To District Show Ajax -->
<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="division_id"]').on('change', function(){
            var division_id = $(this).val();
            if(division_id) {
                $.ajax({
                    url: 'division-district/ajax/',
                    type:"GET",
                    data:{'division_id':division_id},
                    dataType:"json",
                    success:function(data) {
                        // Reset district selection
                        $('select[name="district_id"]').html('<option value="" selected="" disabled="">Select District</option>');
                        // Populate district options
                        $.each(data, function(key, value){
                            $('select[name="district_id"]').append('<option value="'+ value.id +'">' + capitalizeFirstLetter(value.district_name_en) + '</option>');
                        });
                        $('select[name="upazilla_id"]').html('<option value="" selected="" disabled="">Select Upazila</option>');
                    },
                });
            } else {
                // Reset district selection if division is not selected
                $('select[name="district_id"]').html('<option value="" selected="" disabled="">Select District</option>');
                $('select[name="upazilla_id"]').html('<option value="" selected="" disabled="">Select Upazila</option>');
            }
        });

        // Function to capitalize first letter of a string
        function capitalizeFirstLetter(string) {
            return string.charAt(0).toUpperCase() + string.slice(1);
        }

        // Address Relationship Division/District/Upazilla Show Data Ajax
        $('select[name="address_id"]').on('change', function(){
            var address_id = $(this).val();
            $('.selected_address').removeClass('d-none');
            if(address_id) {
                $.ajax({
                    url: "{{  url('/address/ajax') }}/"+address_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                        $('#dynamic_division').text(capitalizeFirstLetter(data.division_name_en));
                        $('#dynamic_division_input').val(data.division_id);
                        $("#dynamic_district").text(capitalizeFirstLetter(data.district_name_en));
                        $('#dynamic_district_input').val(data.district_id);
                        $("#dynamic_upazilla").text(capitalizeFirstLetter(data.upazilla_name_en));
                        $('#dynamic_upazilla_input').val(data.upazilla_id);
                        $("#dynamic_address").text(data.address);
                        $('#dynamic_address_input').val(data.address);
                    },
                });
            } else {
                alert('danger');
            }
        });
    });
</script>

<!--  District To Upazilla Show Ajax -->
<script type="text/javascript">
$(document).ready(function() {
    $('select[name="district_id"]').on('change', function(){
        var district_id = $(this).val();
        if(district_id) {
            $.ajax({
                url: '/district-upazilla/ajax/',
                type:"GET",
                data:{'district_id': district_id},
                dataType:"json",
                success:function(data) {
                   var d =$('select[name="upazilla_id"]').empty();
                    $.each(data, function(key, value){
                        $('select[name="upazilla_id"]').append('<option value="'+ value.id +'">' + value.name_en + '</option>');
                    });
                },
            });
        } else {
            alert('danger');
        }
    });
});
</script>

<!-- create address ajax -->
<script type="text/javascript">
$(document).ready(function() {
    $('#addressStore').on('click', function() {
        var division_id = $('#division_id').val();
        var district_id = $('#district_id').val();
        var upazilla_id = $('#upazilla_id').val();
        var address     = $('#address').val();
        var is_default  = $('#is_default').val();
        var status      = $('#status').val();

        $.ajax({
            url: '{{ route('address.ajax.store') }}',
            type: "POST",
            data: {
              _token: $("#csrf").val(),
              division_id: division_id,
              district_id: district_id,
              upazilla_id: upazilla_id,
              address: address,
              is_default: is_default,
              status: status,
            },
            dataType:'json',
            success: function(data){
                // console.log(data);
                $('#address').val(null);

                $('select[name="address_id"]').html('<option value="" selected="" disabled="">Select Address</option>');
                $.each(data, function(key, value){
                    $('select[name="address_id"]').append('<option value="'+ value.id +'">' + value.address + '</option>');
                });
                $('select[name="division_id"]').html('<option value="" selected="" disabled="">Select Division</option>');
                $('select[name="district_id"]').html('<option value="" selected="" disabled="">Select District</option>');
                $('select[name="upazilla_id"]').html('<option value="" selected="" disabled="">Select Upazila</option>');

                // Start Message
                const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      icon: 'success',
                      showConfirmButton: false,
                      timer: 2000
                    })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        title: data.success
                    })
                }else{
                    Swal.fire({
                        type: 'error',
                        title: data.error
                    })
                }

                // End Message
                $('#Close').click();
            }
        });
     });
});
</script>
<script>
    var couponApplied = false; // Declare couponApplied variable
    $(document).ready(function() {
        // Your existing AJAX code for applying the coupon
        $('form[action="{{ route('apply-coupon') }}"]').submit(function(event) {
            event.preventDefault();
            if (couponApplied) {
                const errorToast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 2000
                    });
                    errorToast.fire({
                        title: 'Coupon Already Used'
                    });
                return;
            }
            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: $(this).serialize(),
                dataType: 'json',
                success: function(data) {
                    console.log(data)
                    if (data.discount) {
                    let couponDiscount = parseInt(data.discount);

                    // Set coupon discount as an attribute for later use
                    $('#grand_total_set').attr('data-coupon-discount', couponDiscount);

                    // Set couponApplied to true after applying the coupon
                    couponApplied = true;

                    // Update the displayed coupon amount
                    $('#coupon_amount').text('৳' + couponDiscount);

                    // Update the total price after applying the coupon
                    updateTotalPrice();
                    showCouponInformation(data);
                }
                    const successToast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 2000
                    });

                    // Create error Toast mixin
                    const errorToast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 2000
                    });

                    // Check if there is an error or success message in the data
                    if ($.isEmptyObject(data.error)) {
                        // Display success Toast
                        successToast.fire({
                            title: data.success
                        });
                    } else {
                        // Display error Toast
                        errorToast.fire({
                            title: data.error
                        });
                    }

                    // End Message
                    $('#Close').click();
                    // Handle other messages or actions if needed
                },
                error: function(xhr, status, error) {
                    // Handle errors if necessary
                    const errorToast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    icon: 'error',
                    showConfirmButton: false,
                    timer: 2000
                });

                // Check if there is an error message in the response
                if (xhr.responseJSON && xhr.responseJSON.error) {
                    // Display error Toast with the error message
                    errorToast.fire({
                        title: xhr.responseJSON.error
                    });
                } else {
                    // Display a generic error Toast
                    errorToast.fire({
                        title: 'Invalid Coupon Code'
                    });
                }
                            }
                        });
                    });
        function showCouponInformation(data) {
        // Assuming you have an element to display the coupon information
        // Update the element with the coupon details
        $('#couponInformation').html('<div class="d-flex justify-content-between">' +
            '<h6 class="font-weight-medium">Coupon</h6>' +
            '<h6 class="font-weight-medium">৳<span>' + data.discount + '</span></h6>' +
            '</div>' +
            '<input type="hidden" value="" name="shipping_charge" class="ship_amount" />' +
            '<input type="hidden" value="" name="shipping_type" class="shipping_type" />' +
            '<input type="hidden" value="" name="shipping_name" class="shipping_name" />');
    }

        // Your existing AJAX code for updating shipping information
        $('select[name="shipping_id"]').on('change', function() {
            var shipping_id = $(this).val();

            if (shipping_id) {
                $.ajax({
                    url: "{{ url('/checkout/shipping/ajax') }}/" + shipping_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('#ship_amount').text(data.shipping_charge);
                        $('.ship_amount').val(data.shipping_charge);
                        $('.shipping_name').val(data.name);
                        $('.shipping_type').val(data.type);

                        updateTotalPrice(); // Update the total price after selecting shipping
                    },
                });
            } else {
                // Reset the elements if no shipping option is selected
                $('#ship_amount').text('0');
                $('.ship_amount').val('0');
                $('.shipping_name').val('');
                $('.shipping_type').val('');

                updateTotalPrice(); // Update the total price after resetting shipping
            }
        });

        // Function to update the total price based on coupon and shipping
        function updateTotalPrice() {
            let couponDiscount = couponApplied ? parseInt($('#grand_total_set').attr('data-coupon-discount')) : 0;
            let shipping_price = parseInt($('#ship_amount').text());
            let product_price = parseInt($('#cartSubTotalShi').val());
            let grand_total_price = product_price + shipping_price - couponDiscount;
            // Update the displayed total
            $('#grand_total_set').text(grand_total_price);
            $('#grand_total').val(grand_total_price);
        }
    });

</script>

@endpush
