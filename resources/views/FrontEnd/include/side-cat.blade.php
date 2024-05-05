<div class="col-lg-3">
    <div class="sidemenu d-none d-lg-block ">
        <ul class="py-1">
            <h5 class="ps-4 fw-semibold">Categories</h5>
            <hr>
            {{-- @php $i =1; @endphp --}}
            @foreach($menu_featured_categories as $category)

                    <li class="py-2">
                        <a href="{{route('product.category', $category->slug)}}"><img src="{{asset($category->image)}}" alt="">
                            {{ $category->name_en }}
                            <span>
                                <i class="fa-solid fa-angle-right"></i>
                            </span>
                        </a>
                    </li>

           @endforeach

            {{-- <li class="py-2"><a href="category-page.html"><img src="{{ asset('FrontEnd') }}/assect/img/icon/woman.webp" alt="">
                    Women's
                    Choice <span><i class="fa-solid fa-angle-right"></i></span></a></li>
            <li class="py-2"><a href="category-page.html"><img src="{{ asset('FrontEnd') }}/assect/img/icon/contraceptive.webp"
                        alt="">
                    Sexual Wellness <span><i class="fa-solid fa-angle-right"></i></span></a></li>
            <li class="py-2"><a href="category-page.html"><img src="{{ asset('FrontEnd') }}/assect/img/icon/Diabetics-Care.webp"
                        alt="">
                    Diabetic Care <span><i class="fa-solid fa-angle-right"></i></span></a></li>
            <li class="py-2"><a href="category-page.html"><img src="{{ asset('FrontEnd') }}/assect/img/icon/baby-boy.webp"
                        alt=""> Baby Care
                    <span><i class="fa-solid fa-angle-right"></i></span></a></li>
            <li class="py-2"><a href="category-page.html"><img
                        src="{{ asset('FrontEnd') }}/assect/img/icon/dental_care_1SkbT7S.webp" alt="">
                    Dental Care <span><i class="fa-solid fa-angle-right"></i></span></a></li>
            <li class="py-2"><a href="category-page.html"><img src="{{ asset('FrontEnd') }}/assect/img/icon/Personal-Care.webp"
                        alt="">
                    Personal Care <span><i class="fa-solid fa-angle-right"></i></span></a></li>
            <li class="py-2"><a href="category-page.html"><img src="{{ asset('FrontEnd') }}/assect/img/icon/medical device.webp"
                        alt="">
                    Devices <span><i class="fa-solid fa-angle-right"></i></span></a></li>
            <li class="py-2"><a href="category-page.html"><img
                        src="{{ asset('FrontEnd') }}/assect/img/icon/medical-prescription.webp" alt="">
                    Prescription Medicine <span><i class="fa-solid fa-angle-right"></i></span></a></li> --}}
        </ul>
    </div>
</div>
