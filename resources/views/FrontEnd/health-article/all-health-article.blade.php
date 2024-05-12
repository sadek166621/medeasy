@extends('FrontEnd.master')
@section('content')
<section class="option-slider container-fluid mt-lg-4">
    <div class="row">
        <!--Left Side Menu Start -->
        @include('FrontEnd.include.side-cat')
        <!-- Left Side Menu End -->

        <!-- Right Side Start -->
        <div class="col-lg-9">
            <!-- Breadcrumb Start -->
            <nav class="px-3 px-lg-0 mt-5 mt-lg-0"
                style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Health Articles</li>
                </ol>
            </nav>
            <!-- Breadcrumb End -->
            <!-- Articles Part Start -->
            <section class="articles container my-4">
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-3">
                    @foreach ($articles as $article )
                    <div class="col">
                        <div class="card h-100">
                            <a href="{{ route('details-health-article',$article->id) }}"> <img src="{{ asset($article->banner_img) }}" class="card-img-top"
                                    alt="Articles Image"></a>
                            <div class="articles-name">
                                <a href="{{ route('details-health-article',$article->id) }}">{{$article->title_en}}</a>
                            </div>
                            <div class="articles-text">
                                <p>
                                  {{Str::limit($article->description_en,300,'...')}}<a href="{{ route('details-health-article',$article->id) }}">Read More <i
                                            class="fa-solid fa-angle-right"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </section>
            <!-- Articles Part End -->

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
