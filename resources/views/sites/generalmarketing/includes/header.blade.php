    <!-- header area start -->
    <header>
        <div id="header-sticky" class="tp-da-header pl-200 pr-200 p-relative">
            <div class="container-fluid">
                <div class="tp-da-header__main">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-3">
                            <div class="logo">
                                <a href="/"> <img src="{{$app->request->get('api_shortname')}}/img/logo/{{$app->request->get('api_shortname')}}-logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-9 d-none d-xl-block">
                            <div class="main-menu da-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                       <li>
                                          <a href="/">Home</a>                                         
                                       </li>
                                       <li>
                                          <a href="about">About</a>
                                       </li>
                                       <li class="has-dropdown">
                                          <a href="#">Services</a>
                                          <ul class="submenu">
                                             <li><a href="paid-advertising">Paid Advertising</a></li>
                                             <li><a href="social-media-management">Social Media</a></li>
                                             <li><a href="website-development">Website Development</a></li>
                                             <li><a href="search-engine-optimization">SEO</a></li>
                                             <li><a href="brand-strategy">Brand Strategy</a></li>
                                             <li><a href="email-marketing">Email Marketing</a></li>
                                          </ul>
                                       </li>
                                       <li>
                                          <a href="contact">Contact</a>
                                       </li>
                                    </ul>
                                 </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 d-none d-xl-block">
                            <div class="da-header-cta-btn float-end mt-35">
                                <a href="contact" class="tp-grd-btn">
                                    Get Quote
                                    <span class="ml-10">
                                        <i class="fal fa-long-arrow-right"></i>
                                        <i class="fal fa-long-arrow-right"></i>
                                    </span>
                                </a>
                                <p class="mt-10 mb-0">or <b>call: </b><a href="tel:{{$app->request->get('api_phone')}}">{{$app->request->get('api_phone')}}</a></p>
                            </div>
                        </div>

                        <div class="col-9 d-xl-none d-block">
                            <div class="tp-header-search-nav d-flex justify-content-end">
                                <div class="tp-header-nav">
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <!-- header area end -->

    <div class="tp-offcanvas-wrapper">
        <div class="tp-offcanvas white-bg">
            <div class="offc-top-pattern">
                <img src="{{$app->request->get('api_shortname')}}/img/hero/nav-parrten-top.png" alt="">
            </div>
            <div class="tp-offcanvas__top tp-border-bottom pb-30 mb-30">
                <div class="tp-offcanvas-close">
                    <span><i class="fal fa-times"></i></span>
                </div>
                <div class="tp-offcanvas__logo mb-50">
                    <a href="/"> <img src="{{$app->request->get('api_shortname')}}/img/logo/{{$app->request->get('api_shortname')}}-logo.png" alt="sticky-logo"></a>
                </div>
                <p> We design, build, and grow your business or brand. Contact us for a quote.</p>
                <!-- <div class="tp-offcanvas__social">
                    <span> <a href="index-3#"><i class="fab fa-facebook-f"></i></a></span>
                    <span> <a href="index-3#"><i class="fab fa-twitter"></i></a></span>
                    <span> <a href="index-3#"><i class="fab fa-behance"></i></a></span>
                    <span> <a href="index-3#"><i class="fab fa-youtube"></i></a></span>
                </div> -->
            </div>
            <div class="tp-offcanvas__widget mb-40 d-none d-xl-block">
                <h3 class="tp-footer__widget-title mb-35">
                    Get In Touch
                </h3>
                <div class="tp-offcanvas-cta d-flex align-items-center tp-border-bottom pb-20  mb-30">
                    <span class="icon mr-20"> <img src="{{$app->request->get('api_shortname')}}/img/icons/ofp-phone.png" alt=""></span>
                    <span>
                        <span class="d-block mb-0">Phone number</span>
                        <b><a href="callto:{{$app->request->get('api_phone')}}"> Call Us: {{$app->request->get('api_phone')}} </a></b>
                    </span>
                </div>

                <div class="tp-offcanvas-cta d-flex align-items-center tp-border-bottom pb-20 mb-30">
                    <span class="icon mr-20"> <img src="{{$app->request->get('api_shortname')}}/img/icons/ofc-mail-icon.png" alt=""></span>
                    <span>
                        <span class="d-block mb-0">Email address</span>
                        <b><a href="mailto:{{$app->request->get('api_email')}}"> {{$app->request->get('api_email')}} </a></b>
                    </span>
                </div>
                <div class="tp-offcanvas-cta d-flex align-items-center pb-20  mb-30">
                    <span class="icon mr-20"> <img src="{{$app->request->get('api_shortname')}}/img/icons/ofc-locaiton.png" alt=""></span>
                    <span>
                         <span class="d-block mb-0">{{$app->request->get('api_address')}}</span>
                        <b><a href="callto:{{$app->request->get('api_phone')}}"> Call Us: {{$app->request->get('api_phone')}} </a></b>
                    </span>
                </div>
            </div>
            <div class="tp-mobile-menu">
            </div>
            <div class="tp-offcanvas__bottom mt-80 d-none d-lg-block">
                <p>Our team applies its wide ranging in
                    experience to determining.</p>
                <div class="tp-offcanvas-btn-wrapper">
                    <a href="contact" class="tp-common-btn">get in touch
                        <span>
                            <i class="fal fa-long-arrow-right"></i>
                            <i class="fal fa-long-arrow-right"></i>
                        </span>
                    </a>
                </div>
            </div>

            <div class="offc-bottom-pattern">
                <img src="{{$app->request->get('api_shortname')}}/img/hero/nav-parrten-botoom.png" alt="">
            </div>
        </div>
    </div>
    <div class="body-overlay"></div>

    <!-- back to top start  -->
    <a href="#main-wrapper" id="tp-backto-top" class="tp-back-to-top show">
        <span>
            <i class="fal fa-angle-double-up"></i>
        </span>
    </a>
    <!-- back to top end  -->
