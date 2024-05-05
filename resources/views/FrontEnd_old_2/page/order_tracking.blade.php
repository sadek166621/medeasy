@extends('FrontEnd.master')
@section('content')
    <section class="p-0">
        {{-- <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ route('home')}}" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                    <span></span> Page
                    <span></span> Order Tracking
                </div>
            </div>
        </div> --}}
        <div class="container">
            <div class="row">
                <div class="col-lg-11 mb-40 mx-auto">

                    <div class="card py-4 px-3 shadow-sm">
                        <div class="col-xl-10 col-lg-10 col-md-12 m-auto">
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block">
                                    <img class="border-radius-15" style="height: 336px; width: 400px" src="{{asset('FrontEnd/assect/img/logo/Captureimgae.PNG')}}" alt="" />
                                </div>
                                <div class="col-lg-6 col-md-8">
                                    <div class="login_wrap widget-taber-content background-white">
                                        <div class="padding_eight_all bg-white">
                                            <div class="heading_s1">
                                                <h3 class="text-center text-danger" id="error_msg">
                                                    {{session()->get('message')}}
                                                </h3>
                                                <h1 class="mb-5" style="font-size: 36px !important;">Track Your Order Status</h1>
                                                <p class="mb-3">To track your order Status please enter your Invoice No in the box below and press "Track" button. This was given to you on your receipt and in the confirmation phone you should have received.</p>
                                            </div>
                                            <form method="get" action="{{ route('order.track') }}" class="row g-3 needs-validation" novalidate>
                                                @csrf
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label>Invoice ID <span class="text-danger">*</span></label>
                                                        <input type="text" name="invoice_no" class="form-control" placeholder="Your Order Invoice ID." value="{{ old('invoice_no') }}" required/>
                                                        @error('invoice_no')
                                                        <div class="text-danger" style="font-weight: bold;">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Phone <span class="text-danger">*</span></label>
                                                        <input type="number" name="phone" class="form-control" placeholder="Phone you used during checkout" value="{{ old('phone')}}"  required/>
                                                        @error('phone')
                                                        <div class="text-danger" style="font-weight: bold;">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                        <button class="btn btn-dark py-3 px-5 form-control" type="submit">Track</button>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script>
        $(document).ready(function (){
           var msg = $('#error_msg').val();
           console.log('message:'+msg);
           if(msg) {
               console.log('empty');
           }
           else{
               setTimeout(function () {
                   $('#error_msg').empty();
               }, 1000);
           }
        });
    </script>
@endpush
