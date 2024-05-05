@extends('FrontEnd.master')
@section('content')
<section class="option-slider container-fluid mt-lg-4">
    <div class="row">
        <!--Left Side Menu Start -->
        <div class="col-lg-3">
            <div class="sidemenu d-none d-lg-block ">
                <ul class="py-1">
                    <h5 class="ps-4 fw-semibold">Categories</h5>
                    <hr>
                    <li class="py-2"><a href="category-page.html"><img src="{{asset('FrontEnd')}}/assect/img/icon/drugs.webp" alt="">
                            OTC
                            Medicine
                            <span><i class="fa-solid fa-angle-right"></i></span></a></li>
                    <li class="py-2"><a href="category-page.html"><img src="{{asset('FrontEnd')}}/assect/img/icon/woman.webp" alt="">
                            Women's
                            Choice <span><i class="fa-solid fa-angle-right"></i></span></a></li>
                    <li class="py-2"><a href="category-page.html"><img src="{{asset('FrontEnd')}}/assect/img/icon/contraceptive.webp"
                                alt="">
                            Sexual Wellness <span><i class="fa-solid fa-angle-right"></i></span></a></li>
                    <li class="py-2"><a href="category-page.html"><img src="{{asset('FrontEnd')}}/assect/img/icon/Diabetics-Care.webp"
                                alt="">
                            Diabetic Care <span><i class="fa-solid fa-angle-right"></i></span></a></li>
                    <li class="py-2"><a href="category-page.html"><img src="{{asset('FrontEnd')}}/assect/img/icon/baby-boy.webp"
                                alt="">
                            Baby Care
                            <span><i class="fa-solid fa-angle-right"></i></span></a></li>
                    <li class="py-2"><a href="category-page.html"><img
                                src="{{asset('FrontEnd')}}/assect/img/icon/dental_care_1SkbT7S.webp" alt="">
                            Dental Care <span><i class="fa-solid fa-angle-right"></i></span></a></li>
                    <li class="py-2"><a href="category-page.html"><img src="{{asset('FrontEnd')}}/assect/img/icon/Personal-Care.webp"
                                alt="">
                            Personal Care <span><i class="fa-solid fa-angle-right"></i></span></a></li>
                    <li class="py-2"><a href="category-page.html"><img src="{{asset('FrontEnd')}}/assect/img/icon/medical device.webp"
                                alt="">
                            Devices <span><i class="fa-solid fa-angle-right"></i></span></a></li>
                    <li class="py-2"><a href="category-page.html"><img
                                src="{{asset('FrontEnd')}}/assect/img/icon/medical-prescription.webp" alt="">
                            Prescription Medicine <span><i class="fa-solid fa-angle-right"></i></span></a></li>
                </ul>
            </div>
        </div>
        <!-- Left Side Menu End -->

        <!-- Right Side Start -->
        <div class="col-lg-9">
            <!-- Product Information Start -->
            <section class="container product-info p-4 p-lg-0">
                <div class="row">
                    <div class="col-md-7">
                        <div class="product-thumbnail">
                            <img src="{{asset('FrontEnd')}}/assect/img/product/napa.webp" alt="">
                        </div>
                    </div>

                    <div class="col-md-5 mt-4 mt-lg-0">
                        <div class="product-description border p-3">
                            <div>
                                <h2 class="product-title">Napa <span>500 mg</span></h2>
                                <p class="product-type">Tablet</p>
                                <a href="#" class="generic-name">Paracetamol</a>
                                <p class="company-name">Beximco Pharmaceuticals Ltd.</p>
                                <p class="main-price"><span>৳ 1.20</span> 10% off</p>
                                <p class="product-price">Best Price: <span>৳ 1.08</span> <span
                                        class="quantity">/Piece</span></p>
                            </div>
                            <div>
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
                                <input type="text" name="qty" value="0" class="input-qty input-rounded" />
                                <button class="qty-btn-plus" type="button"><i
                                        class="fa-solid fa-plus"></i></button>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="product_page_buy_now" type="button">Buy
                                    Now</button>
                                <button type="submit" class="product_page_add_to_cart" type="button">Add to
                                    cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Product Information End -->

            <!--Similar Product Start -->
            <section id="otcMedicine" class="products container owl-carousel owl-theme owl-loaded my-5">
                <div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="fw-semibold">OTC Medicine</h5>
                        <a class="btn-primary" href="#">See All</a>
                    </div>
                    <div class="owl-stage-outer">
                        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 owl-stage g-3">
                            <div class="col owl-item">
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
                            <div class="col owl-item">
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
                            <div class="col owl-item">
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
                            <div class="col owl-item">
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
                            <div class="col owl-item">
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
                            <div class="col owl-item">
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
                            <div class="col owl-item">
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
                            <div class="col owl-item">
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
                    <h6 class="mb-2 fw-semibold">Indications of Napa 500 mg</h6>
                    <p>Napa 500 mg is indicated for fever, common cold and influenza, headache,
                        toothache, earache, bodyache, myalgia, neuralgia, dysmenorrhoea, sprains, colic
                        pain, back pain, post-operative pain, postpartum pain, inflammatory pain and post
                        vaccination pain in children. It is also indicated for rheumatic & osteoarthritic
                        pain and stiffness of joints.</p>
                </div>
                <div class="mt-4">
                    <h6 class="mb-2 fw-semibold">Theropeutic Class</h6>
                    <p>Non opioid analgesics</p>
                </div>
                <div class="mt-4">
                    <h6 class="mb-2 fw-semibold">Pharmacology</h6>
                    <p>Napa 500 mg has analgesic and antipyretic properties with weak anti-inflammatory
                        activity. Napa 500 mg (Acetaminophen) is thought to act primarily in the CNS, increasing
                        the pain threshold by inhibiting both isoforms of cyclooxygenase, COX-1, COX-2, and
                        COX-3 enzymes involved in prostaglandin (PG) synthesis. Napa 500 mg is a para
                        aminophenol derivative, has analgesic and antipyretic properties with weak
                        anti-inflammatory activity. Napa 500 mg is one of the most widely used, safest and fast
                        acting analgesic. It is well tolerated and free from various side effects of aspirin.
                    </p>
                </div>
                <div class="mt-4">
                    <h6 class="mb-2 fw-semibold">Dosage & Administration of Napa 500 mg</h6>
                    <div>
                        <p>Tablet:</p>
                        <li><span>Adult:</span> 1-2 tablets every 4 to 6 hours up to a maximum of 4 gm (8
                            tablets) daily.</li>
                        <li><span>Children (6-12 years):</span> ½ to 1 tablet 3 to 4 times daily. For long
                            term
                            treatment it is wise not to exceed the dose beyond 2.6 gm/day.</li>
                    </div>
                    <div>
                        <p>Extended Release Tablet:</p>
                        <li><span>Adults & Children over 12 years:</span> Two tablets, swallowed whole, every
                            6 to 8 hours (maximum of 6 tablets in any 24 hours).The tablet must not be crushed.
                        </li>
                    </div>
                    <div>
                        <p>Syrup/Suspension:</p>
                        <li><span>Children under 3 months:</span> 10 mg/kg body weight (reduce to 5 mg/kg if
                            jaundiced) 3 to 4 times daily.
                        </li>
                        <li><span>3 months to below 1 year:</span> ½ to 1 teaspoonful 3 to 4 times daily.
                        </li>
                        <li><span>1-5 years:</span> 1 -2 teaspoonful 3 to 4 times daily.</li>
                        <li><span>6-12 years:</span> 2-A teaspoonful 3 to 4 times daily.</li>
                        <li><span>Adults:</span> 4-8 teaspoonful 3 to 4 times daily.</li>
                    </div>
                    <div>
                        <p>Suppository:</p>
                        <li><span>Children 3-12 months:</span> 60-120 mg,4 times daily.
                        </li>
                        <li><span>Children 1-5 years:</span> 125-250 mg 4 times daily.
                        </li>
                        <li><span>Children 6-12 years:</span> 250-500 mg 4 times daily.</li>
                        <li><span>Adults & children over 12 years:</span> 0.5-1 gm 4 times daily.</li>
                    </div>
                </div>
                <div class="mt-4">
                    <h6 class="mb-2 fw-semibold">Interaction of Napa 500 mg</h6>
                    <p>Patients who have taken barbiturates, tricyclic antidepressants and alcohol may show
                        diminished ability to metabolise large doses of Napa 500 mg. Alcohol can increase the
                        hepatotoxicity of Napa 500 mg overdosage. Chronic ingestion of anticonvulsants or oral
                        steroid contraceptives induce liver enzymes and may prevent attainment of therapeutic
                        Napa 500 mg levels by increasing first-pass metabolism or clearance.</p>
                </div>
                <div class="mt-4">
                    <h6 class="mb-2 fw-semibold">Contraindications</h6>
                    <p>It is contraindicated in known hypersensitivity to Napa 500 mg.</p>
                </div>
                <div class="mt-4">
                    <h6 class="mb-2 fw-semibold">Side Effects of Napa 500 mg</h6>
                    <p>Side effects of Napa 500 mg are usually mild, though haematological reactions including
                        thrombocytopenia, leucopenia, pancytopenia, neutropenia, and agranulocytosis have been
                        reported. Pancreatitis, skin rashes, and other allergic reactions occur occasionally.
                    </p>
                </div>
                <div class="mt-4">
                    <h6 class="mb-2 fw-semibold">Pregnancy & Lactation</h6>
                    <p>Pregnancy category B according to USFDA. This drug should be used during pregnancy only
                        if clearly needed.</p>
                </div>
                <div class="mt-4">
                    <h6 class="mb-2 fw-semibold">Precautions & Warnings</h6>
                    <p>Napa 500 mg should be given with caution to patients with impaired kidney or liver
                        function. Napa 500 mg should be given with care to patients taking other drugs that
                        affect the liver.</p>
                </div>
                <div class="mt-4">
                    <h6 class="mb-2 fw-semibold">Overdose Effects of Napa 500 mg</h6>
                    <p>Symptoms of Napa 500 mg overdose in the first 24 hours are pallor, nausea, vomiting,
                        anorexia and abdominal pain. Liver damage may become apparent 12-48 hours after
                        ingestion. Abnormalities of glucose metabolism and metabolic acidosis may occur.</p>
                </div>
                <div class="mt-4">
                    <h6 class="mb-2 fw-semibold">Storage Conditions</h6>
                    <p>Keep in a dry place away from light and heat. Keep out of the reach of children.</p>
                </div>
                <div class="mt-4">
                    <h6 class="mb-2 fw-semibold">Drug Classes</h6>
                    <p>Non opioid analgesics</p>
                </div>
                <div class="mt-4">
                    <h6 class="mb-2 fw-semibold">Mode Of Action</h6>
                    <p>Napa 500 mg has analgesic and antipyretic properties with weak anti-inflammatory
                        activity. Napa 500 mg (Acetaminophen) is thought to act primarily in the CNS, increasing
                        the pain threshold by inhibiting both isoforms of cyclooxygenase, COX-1, COX-2, and
                        COX-3 enzymes involved in prostaglandin (PG) synthesis. Napa 500 mg is a para
                        aminophenol derivative, has analgesic and antipyretic properties with weak
                        anti-inflammatory activity. Napa 500 mg is one of the most widely used, safest and fast
                        acting analgesic. It is well tolerated and free from various side effects of aspirin.
                    </p>
                </div>
                <div class="mt-4">
                    <h6 class="mb-2 fw-semibold">Pregnancy</h6>
                    <p>Pregnancy category B according to USFDA. This drug should be used during pregnancy only
                        if clearly needed. Napa 500 mg is excreted in breast milk. Maternal ingestion of Napa
                        500 mg in normal therapeutic doses does not appear to present a risk to the nursing
                        infant.</p>
                </div>
                <div class="mt-4 border border-danger p-2">
                    <h6 class="mb-2 fw-semibold"><i class="fa-solid fa-circle-exclamation"></i> Disclaimer</h6>
                    <p>The information provided is accurate to our best practices, but it does not replace
                        professional medical advice. We cannot guarantee its completeness or accuracy. The
                        absence of specific information about a drug should not be seen as an endorsement. We
                        are not responsible for any consequences resulting from this information, so consult a
                        healthcare professional for any concerns or questions.</p>
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
            </section>
            <!-- Service System Part End -->
        </div>
        <!-- Right Side End -->
    </div>
</section>

@endsection
