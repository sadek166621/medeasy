<header>
    <!-- Desktop Nav Star-->
    <section class="d-none d-lg-block">
        <div class="header-top d-none">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 left-item">
                        <ul>
                            <li><a href="#">Need Help ?</a></li>
                            <li><a href="#">Call Us: +88 01700 000000 </a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 right-item">
                        <ul>
                            <li><a href="#">Order Tracking</a></li>
                            <li>|</li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa-solid fa-globe"></i> EN
                                </a>
                                <ul class="dropdown-menu px-3 py-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Bangla
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            English
                                        </label>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="desktop-nav">
            <nav id="navbar_top" class="navbar navbar-expand-lg nav-bg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('FrontEnd') }}/assect/img/logo/logo.png" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <form class="ms-auto d-flex" action="{{ route('product.search')}}" method="Post">
                            @csrf
                            <input class="form-control search-box" onfocus="search_result_show()" onblur="search_result_hide()" type="search" placeholder="Search"
                                aria-label="Search" name="search">
                            <button class="btn search-icon" type="submit"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                        <div class="m-auto searchProducts" style="position: absolute;z-index: 99999;"></div>

                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item me-2">
                                <a class="nav-link" href="#"><i class="fa-regular fa-user"></i> Sign
                                    In</a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="nav-link" href="#" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i
                                        class="fa-solid fa-cart-plus"><span>12</span></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="header-down d-none">
            <div class="container">
                <div class="menu">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>|</li>
                        <li><a href="#">Shop</a></li>
                        <li>|</li>
                        <li><a href="#">Categories</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Desktop Nav End-->

    <!-- Mobile Nav Start -->
    <section class="d-block d-lg-none">
        <div class="mobile-nav">
            <nav id="mobile_navbar_top" class="navbar py-2 nav-bg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.html"><img src="{{ asset('FrontEnd') }}/assect/img/logo/logo.png" alt="logo"
                            style="width: 200px"></a>

                    <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                        aria-controls="offcanvasExample">
                        <span style="font-size: 25px;"><i class="fa-solid fa-bars text-light"></i></span>
                    </button>
                </div>
            </nav>
        </div>

        <!-- Mobile Menu Off Canvas Start -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <a href="index.html"><img src="{{ asset('FrontEnd') }}/assect/img/logo/logo.png" alt=""></a>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav">
                    <li class="nav-item py-2"><a class="nav-link" href="category-page.html"><img
                                src="{{ asset('FrontEnd') }}/assect/img/icon/drugs.webp" alt=""> OTC Medicine
                            <span><i class="fa-solid fa-angle-right"></i></span></a></li>
                    <li class="nav-item py-2"><a class="nav-link" href="category-page.html"><img
                                src="{{ asset('FrontEnd') }}/assect/img/icon/woman.webp" alt=""> Women's
                            Choice <span><i class="fa-solid fa-angle-right"></i></span></a></li>
                    <li class="nav-item py-2"><a class="nav-link" href="category-page.html"><img
                                src="{{ asset('FrontEnd') }}/assect/img/icon/contraceptive.webp" alt="">
                            Sexual Wellness <span><i class="fa-solid fa-angle-right"></i></span></a></li>
                    <li class="nav-item py-2"><a class="nav-link" href="category-page.html"><img
                                src="{{ asset('FrontEnd') }}/assect/img/icon/Diabetics-Care.webp" alt="">
                            Diabetic Care <span><i class="fa-solid fa-angle-right"></i></span></a></li>
                    <li class="nav-item py-2"><a class="nav-link" href="category-page.html"><img
                                src="{{ asset('FrontEnd') }}/assect/img/icon/baby-boy.webp" alt=""> Baby Care
                            <span><i class="fa-solid fa-angle-right"></i></span></a></li>
                    <li class="nav-item py-2"><a class="nav-link" href="category-page.html"><img
                                src="{{ asset('FrontEnd') }}/assect/img/icon/dental_care_1SkbT7S.webp" alt="">
                            Dental Care <span><i class="fa-solid fa-angle-right"></i></span></a></li>
                    <li class="nav-item py-2"><a class="nav-link" href="category-page.html"><img
                                src="{{ asset('FrontEnd') }}/assect/img/icon/Personal-Care.webp" alt="">
                            Personal Care <span><i class="fa-solid fa-angle-right"></i></span></a></li>
                    <li class="nav-item py-2"><a class="nav-link" href="category-page.html"><img
                                src="{{ asset('FrontEnd') }}/assect/img/icon/medical device.webp" alt="">
                            Devices <span><i class="fa-solid fa-angle-right"></i></span></a></li>
                    <li class="nav-item py-2"><a class="nav-link" href="category-page.html"><img
                                src="{{ asset('FrontEnd') }}/assect/img/icon/medical-prescription.webp" alt="">
                            Prescription Medicine <span><i class="fa-solid fa-angle-right"></i></span></a></li>
                </ul>
            </div>
        </div>
        <!--Mobile Menu Off Canvas End -->

        <!-- Search Bar Start-->
        <div class="container">
            <form class="d-flex search-box" role="search">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <button class="btn search-icon" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
        <!-- Search Bar End-->

        <!-- Button Menu Start -->
        <div>
            <nav class='mobile'>
                <ul>
                    <li><a href='index.html'><span><i class="fa-solid fa-house-chimney"></i>
                            </span><span>Home</span></a></li>

                    <li><a type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                            aria-controls="offcanvasExample" href='#'><span><i class="fa-solid fa-list"></i>
                            </span><span>Categories</span></a></li>

                    <li><a href='#' data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
                            aria-controls="offcanvasScrolling"><span><i class="fa-solid fa-cart-plus"></i>
                                <small>12</small></span>
                            <span>Cart</span></a> </li>

                    <li><a href='#'><span><i class="fa-regular fa-user"></i></span>
                            <span>Profile</span></a></li>
                </ul>
            </nav>
        </div>
        <!-- Button Menu End -->
    </section>
    <!-- Mobile Nav End -->
    <!-- Cart Information Off Canvas Start -->
    <section class="container cart-info">
        <div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
            id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Items</h5>
                <div>
                    <button class="btn fw-normal"><i class="fa-regular fa-trash-can"></i> Clear All</button>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
            </div>
            <div class="offcanvas-body">
                <div class="cart-products">
                    <div class="p-2">
                        <!-- single cart product Start -->
                        <div class="select-products">
                            <div class="thumbnail">
                                <img src="{{ asset('FrontEnd') }}/assect/img/product/napa.webp" alt="">
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <div class="d-flex flex-column">
                                        <a class="product-title" href="#">Napa <span>500 mg</span></a>
                                        <a href="#" class="generic-name">Paracetamol</a>
                                    </div>
                                    <div class="d-flex mt-2">
                                        <div class="me-2">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Piece</option>
                                                <option value="1">1's Strip</option>
                                                <option value="2">5's Strip</option>
                                                <option value="3">10's Strip</option>
                                            </select>
                                        </div>
                                        <div class="qty-container">
                                            <button class="qty-btn-minus" type="button"><i
                                                    class="fa-solid fa-minus"></i></button>
                                            <input type="text" name="qty" value="0"
                                                class="input-qty input-rounded" />
                                            <button class="qty-btn-plus" type="button"><i
                                                    class="fa-solid fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <p class="product-price">৳ 150</p>
                                    <p class="main-price">৳ 150</p>
                                </div>
                            </div>
                        </div>
                        <!-- single cart product End -->
                        <!-- single cart product Start -->
                        <div class="select-products">
                            <div class="thumbnail">
                                <img src="{{ asset('FrontEnd') }}/assect/img/product/napa.webp" alt="">
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <div class="d-flex flex-column">
                                        <a class="product-title" href="#">Napa <span>500 mg</span></a>
                                        <a href="#" class="generic-name">Paracetamol</a>
                                    </div>
                                    <div class="d-flex mt-2">
                                        <div class="me-2">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Piece</option>
                                                <option value="1">1's Strip</option>
                                                <option value="2">5's Strip</option>
                                                <option value="3">10's Strip</option>
                                            </select>
                                        </div>
                                        <div class="qty-container">
                                            <button class="qty-btn-minus" type="button"><i
                                                    class="fa-solid fa-minus"></i></button>
                                            <input type="text" name="qty" value="0"
                                                class="input-qty input-rounded" />
                                            <button class="qty-btn-plus" type="button"><i
                                                    class="fa-solid fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <p class="product-price">৳ 150</p>
                                    <p class="main-price">৳ 150</p>
                                </div>
                            </div>
                        </div>
                        <!-- single cart product End -->
                        <!-- single cart product Start -->
                        <div class="select-products">
                            <div class="thumbnail">
                                <img src="{{ asset('FrontEnd') }}/assect/img/product/napa.webp" alt="">
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <div class="d-flex flex-column">
                                        <a class="product-title" href="#">Napa <span>500 mg</span></a>
                                        <a href="#" class="generic-name">Paracetamol</a>
                                    </div>
                                    <div class="d-flex mt-2">
                                        <div class="me-2">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Piece</option>
                                                <option value="1">1's Strip</option>
                                                <option value="2">5's Strip</option>
                                                <option value="3">10's Strip</option>
                                            </select>
                                        </div>
                                        <div class="qty-container">
                                            <button class="qty-btn-minus" type="button"><i
                                                    class="fa-solid fa-minus"></i></button>
                                            <input type="text" name="qty" value="0"
                                                class="input-qty input-rounded" />
                                            <button class="qty-btn-plus" type="button"><i
                                                    class="fa-solid fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <p class="product-price">৳ 150</p>
                                    <p class="main-price">৳ 150</p>
                                </div>
                            </div>
                        </div>
                        <!-- single cart product End -->

                        <!-- single cart product Start -->
                        <div class="select-products">
                            <div class="thumbnail">
                                <img src="{{ asset('FrontEnd') }}/assect/img/product/napa.webp" alt="">
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <div class="d-flex flex-column">
                                        <a class="product-title" href="#">Napa <span>500 mg</span></a>
                                        <a href="#" class="generic-name">Paracetamol</a>
                                    </div>
                                    <div class="d-flex mt-2">
                                        <div class="me-2">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Piece</option>
                                                <option value="1">1's Strip</option>
                                                <option value="2">5's Strip</option>
                                                <option value="3">10's Strip</option>
                                            </select>
                                        </div>
                                        <div class="qty-container">
                                            <button class="qty-btn-minus" type="button"><i
                                                    class="fa-solid fa-minus"></i></button>
                                            <input type="text" name="qty" value="0"
                                                class="input-qty input-rounded" />
                                            <button class="qty-btn-plus" type="button"><i
                                                    class="fa-solid fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <p class="product-price">৳ 1500</p>
                                    <p class="main-price">৳ 150</p>
                                </div>
                            </div>
                        </div>
                        <!-- single cart product End -->
                        <!-- single cart product Start -->
                        <div class="select-products">
                            <div class="thumbnail">
                                <img src="{{ asset('FrontEnd') }}/assect/img/product/napa.webp" alt="">
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <div class="d-flex flex-column">
                                        <a class="product-title" href="#">Napa <span>500 mg</span></a>
                                        <a href="#" class="generic-name">Paracetamol</a>
                                    </div>
                                    <div class="d-flex mt-2">
                                        <div class="me-2">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Piece</option>
                                                <option value="1">1's Strip</option>
                                                <option value="2">5's Strip</option>
                                                <option value="3">10's Strip</option>
                                            </select>
                                        </div>
                                        <div class="qty-container">
                                            <button class="qty-btn-minus" type="button"><i
                                                    class="fa-solid fa-minus"></i></button>
                                            <input type="text" name="qty" value="0"
                                                class="input-qty input-rounded" />
                                            <button class="qty-btn-plus" type="button"><i
                                                    class="fa-solid fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <p class="product-price">৳ 150</p>
                                    <p class="main-price">৳ 150</p>
                                </div>
                            </div>
                        </div>
                        <!-- single cart product End -->

                        <div style="margin-bottom: 150px;"></div>

                        <!-- Proceed To Check Out Start -->
                        <div class="proceed-to mt-5">
                            <hr>
                            <div class="sub-total-price">
                                <p>Total Amount</p>
                                <p>৳ 1600</p>
                            </div>
                            <div class="save-price">
                                <p>MRP Total</p>
                                <p><span>৳ 150</span></p>
                            </div>
                            <div class="d-flex mt-3">
                                <button class="btn btn-primary btn-lg d-block fw-semibold w-100 py-2">Proceed
                                    To Checkout</button>
                            </div>
                        </div>
                        <!-- Proceed To Check Out End -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Information Off Canvas End-->
</header>
