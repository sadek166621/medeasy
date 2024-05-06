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
                        {{-- <form class="ms-auto d-flex" action="{{ route('product.search')}}" method="Post">
                            @csrf --}}
                            <div class="ms-auto d-flex">
                                <input class=" form-control search-box search" onfocus="search_result_show()" onblur="search_result_hide()" type="search" placeholder="Search"
                                aria-label="Search" name="search">
                            <button class="btn search-icon" type=""><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        {{-- </form> --}}
                        <div class="m-auto searchProducts" style="position: absolute;left: 524px;top: 59px;width: 500px;z-index: 99999;"></div>
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item me-2">
                                <a class="nav-link" href="#"><i class="fa-regular fa-user"></i> Sign
                                    In</a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="nav-link" href="#" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i
                                        class="fa-solid fa-cart-plus "><span class="cartQty">0</span></i></a>
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
                            aria-controls="offcanvasScrolling"><span><i class="fa-solid fa-cart-plus cartQty"></i>
                                <small>0</small></span>
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
                    <button id="clearAllButton" class="btn fw-normal"><i class="fa-regular fa-trash-can"></i> Clear All</button>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
            </div>
            <div class="offcanvas-body">
                <div class="cart-products">
                    <div class="p-2" id="miniCart">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Information Off Canvas End-->
</header>
@push('js')
    <script>
        // function cart() {
        //     $.ajax({
        //         type: 'GET',
        //         url: '/get-cart-product',
        //         dataType: 'json',
        //         success: function(response) {
        //             var rows = "";
        //             $('#total_cart_qty').text(Object.keys(response.carts).length);
        //             if (Object.keys(response.carts).length > 0) {
        //                 $.each(response.carts, function(key, value) {
        //                     var slug = value.options.slug;
        //                     var base_url = window.location.origin;
        //                     rows += `
        //                         <div class="select-products">
        //                             <div class="thumbnail">
        //                                 <img src="/${value.options.image}" alt="">
        //                             </div>
        //                             <div class="d-flex">
        //                                 <div class="me-2">
        //                                     <div class="d-flex flex-column">
        //                                         <a class="product-title" href="${base_url}/product-details/${slug}">${value.name}<span>500 mg</span></a>
        //                                         <a href="#" class="generic-name"></a>
        //                                     </div>
        //                                     <div class="d-flex mt-2">
        //                                         <div class="me-2">
        //                                             <select class="form-select" aria-label="Default select example">
        //                                                 <option selected>Piece</option>
        //                                                 <option value="1">1's Strip</option>
        //                                                 <option value="2">5's Strip</option>
        //                                                 <option value="3">10's Strip</option>
        //                                             </select>
        //                                         </div>
        //                                         <div class="qty-container">
        //                                             <button class="qty-btn-minus" type="button" id="${value.rowId}" onclick="cartDecrement(this.id)"><i
        //                                                     class="fa-solid fa-minus"></i></button>
        //                                             <input type="text" name="qty" value="${value.qty}"
        //                                                 class="input-qty input-rounded" />
        //                                             <button class="qty-btn-plus" type="submit" id="${value.rowId}" onclick="cartIncrement(this.id)"><i
        //                                                     class="fa-solid fa-plus"></i></button>
        //                                         </div>
        //                                     </div>
        //                                 </div>
        //                                 <div class="d-flex flex-column">
        //                                     <p class="product-price">৳${value.price}</p>
        //                                 </div>
        //                             </div>
        //                         </div>
        //                         <div style="margin-bottom: 150px;"></div>
        //                         <!-- Proceed To Check Out Start -->
        //                         <div class="proceed-to mt-5">
        //                             <hr>
        //                             <div class="sub-total-price">
        //                                 <p>Total Amount</p>
        //                                 <p>৳${value.subtotal}</p>
        //                             </div>
        //                             <div class="d-flex mt-3">
        //                                 <button class="btn btn-primary btn-lg d-block fw-semibold w-100 py-2">Proceed
        //                                     To Checkout</button>
        //                             </div>
        //                         </div>`;
        //                 });
        //                 $('#cartPage').html(rows);
        //             } else {
        //                 html = '<tr><td class="text-center" colspan="6" style="font-size: 18px; font-weight: bold;">Cart empty!</td></tr>';
        //                 $('#cartPage').html(html);
        //             }
        //         }
        //     });
        // }
        // cart();
        function miniCart(){
            $.ajax({
                type: 'GET',
                url: '/product/mini/cart',
                dataType:'json',
                success:function(response){
                    // alert(response);
                    //checkout();
                    $('span[id="cartSubTotal"]').text(response.cartTotal);
                    $('#cartSubTotalShi').val(response.cartTotal);
                    $('.cartQty').text(Object.keys(response.carts).length);
                    $('#total_cart_qty').text(Object.keys(response.carts).length);

                    var miniCart = "";

                    if(Object.keys(response.carts).length > 0){
                        $.each(response.carts, function(key,value){
                            //console.log(value);
                            var slug = value.options.slug;
                            var group_name = value.options.group_name;
                            var unit_weight = value.options.unit_weight;
                            var unit = value.options.unit;
                            var base_url = window.location.origin;
                          miniCart += `
                          <div class="select-products">
                                     <div class="thumbnail">
                                         <img src="/${value.options.image}" alt="">
                                     </div>
                                     <div class="d-flex">
                                         <div class="me-2">
                                             <div class="d-flex flex-column">
                                                 <a class="product-title" href="${base_url}/product-details/${slug}">${value.name} <span>${unit_weight} ${unit}</span></a>
                                                 <span  class="generic-name">${group_name}</span>
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
                                                     <button class="qty-btn-minus" type="button" id="${value.rowId}" onclick="cartDecrement(this.id)"><i
                                                             class="fa-solid fa-minus"></i></button>
                                                     <input type="text" name="qty" value="${value.qty}"
                                                         class="input-qty input-rounded" />
                                                     <button class="qty-btn-plus" type="submit" id="${value.rowId}" onclick="cartIncrement(this.id)"><i
                                                             class="fa-solid fa-plus"></i></button>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="d-flex flex-column">
                                             <p class="product-price">৳${value.price}</p>
                                         </div>
                                     </div>
                                 </div>
                                 <div style="margin-bottom: 150px;"></div>
                                 <!-- Proceed To Check Out Start -->
                                 <div class="proceed-to mt-5">
                                     <hr>
                                     <div class="sub-total-price">
                                         <p>Total Amount</p>
                                         <p>৳${value.subtotal}</p>
                                     </div>
                                     <div class="d-flex mt-3">
                                         <button class="btn btn-primary btn-lg d-block fw-semibold w-100 py-2">Proceed
                                             To Checkout</button>
                                     </div>
                                 </div>`
                        });

                        $('#miniCart').html(miniCart);
                        $('#miniCart_empty_btn').hide();
                        $('#miniCart_btn').show();
                    }else{
                        html = '<h4 class="text-center">Cart empty!</h4>';
                        $('#miniCart').html(html);
                        $('#miniCart_btn').hide();
                        $('#miniCart_empty_btn').show();
                    }
                }
            });
        }
        /* ============ Function Call ========== */
        miniCart();

        /* ==================== Start  cartIncrement ================== */
        /* ==================== Start  cartIncrement ================== */
    function cartIncrement(rowId){
      $.ajax({
          type:'GET',
          url: "/cart-increment/"+rowId,
          dataType:'json',
          success:function(data){
            // console.log(data)

            miniCart();

            const Toast = Swal.mixin({
                toast:true,
                position: 'top-end',
                icon: 'success',
                showConfirmButton: false,
                timer: 1200
            })
            Toast.fire({
              type:'success',
              title: data.success
            })

            if($.isEmptyObject(data.error)){
                const Toast = Swal.mixin({
                    toast:true,
                    position: 'top-end',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1200
                })

                Toast.fire({
                  type:'success',
                  title: data.success
                })

            }else{
                const Toast = Swal.mixin({
                    toast:true,
                    position: 'top-end',
                    icon: 'error',
                    showConfirmButton: false,
                    timer: 1200
                })

                Toast.fire({
                  type:'error',
                  title: data.error
                })
            }

          }
      });
    }
    /* ==================== End  cartIncrement ================== */

    /* ==================== Start  Cart Decrement ================== */
        function cartDecrement(rowId){
          $.ajax({
              type:'GET',
              url: "/cart-decrement/"+rowId,
              dataType:'json',
              success:function(data){
                // console.log(data)
                //console.log(data);
                // if(data == 2){
                //     alert("#"+rowId);
                //     $("#"+rowId).attr("disabled", "true");
                // }

                miniCart();
              }
          });
        }
    /* ==================== End  Cart Decrement ================== */
        /* ================ Start My Cart Remove Product =========== */

        /* ==================== End  Cart Decrement ================== */

        function cartCheck() {
            $.ajax({
                type:'GET',
                url: "/checkout",
                dataType:'json',
                success:function(data){
                    console.log(data.error)
                    const Toast = Swal.mixin({
                        toast:true,
                        position: 'top-end',
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 1200
                    })
                    Toast.fire({
                        type:'error',
                        title: data.error
                    })
                }
            });
        }
    </script>
    <script>
        $('.place_order').click(function () {
            // Start Message
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000
            })
            if($('#cart_products').val() ==0){
                $('.place_order').prop('disabled', true);
                event.preventDefault();
                Toast.fire({
                    type: 'error',
                    icon: 'error',
                    title: 'Cart is Empty!!'
                })
            }
            else{
                $('.place_order').prop('disabled', false);
            }
        })

    </script>
    <script>
        function clearCart() {
    // Get the CSRF token value from the meta tag
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                type: 'POST',
                url: '/clear-cart',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the headers
                },
                success: function(response) {
                    if (response.success) {
                        // If cart is cleared successfully, update the cart content
                        miniCart();
                        // Show alert to notify the user
                        alert('All products cleared from the cart.');
                    } else {
                        // Handle the case where clearing the cart fails
                        alert('Failed to clear the cart.');
                    }
                },
                error: function(xhr, textStatus, errorThrown) {
                    // Log any errors for debugging
                    console.error(xhr.responseText);
                }
            });
        }

        // Attach click event handler to the "Clear All" button
        $('#clearAllButton').on('click', function(e) {
            e.preventDefault();
            if (confirm('Are you sure you want to clear all products from the cart?')) {
                // Call clearCart function to clear all products from the cart
                clearCart();
            }
        });
    </script>
@endpush

