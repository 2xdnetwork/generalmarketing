<footer>
        <div class="bs-footer da-footer-bg da-footer">
            <div class="container">
                <div class="bs-footer__main pb-10 pt-80 ">
                    <div class="row justify-content-center">

                    <div class="col-xl-2 col-md-6">
                            <div class="tp-footer__widget mb-40">
                                <h3 class="tp-footer__widget-title mb-35">
                                    Company
                                </h3>
                                <ul>
                                    <li><a href="about">About</a></li>
                                    <li><a href="privacy-policy">Privacy Policy</a></li>
                                    <li><a href="terms-and-conditions">Terms and Conditions</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="tp-footer__widget mb-40">
                                <h3 class="tp-footer__widget-title mb-35">
                                Services
                                </h3>
                                <ul id="company">
                                <li><a href="paid-advertising">Paid Advertising</a></li>
                                    <li><a href="social-media-management">Social Media</a></li>
                                    <li><a href="website-development">Web Development</a></li>
                                    <li><a href="search-engine-optimization">SEO</a></li>
                                    <li><a href="brand-strategy">Brand Strategy</a></li>
                                    <li><a href="email-marketing">Email Marketing</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-xl-3 col-md-6">
                            <div class="tp-footer__widget mb-40">
                                <h3 class="tp-footer__widget-title mb-35">
                                    Get In Touch
                                </h3>
                                <div class="tp-footer-cta d-flex align-items-center mb-30">
                                    <span class="call-icon"> <img src="{{$app->request->get('api_shortname')}}/img/footer/footer-rbg-call.png"
                                            alt=""></span>
                                    <span>
                                         <span class="d-block mb-0">Mon-Fri: 7am-5pm</span>
                                        <b><a href="callto:0002229090"> Call Us: {{$app->request->get('api_phone')}} </a></b>
                                    </span>
                                </div>
                                <div class="tp-footer-cta d-flex align-items-center mb-30">
                                    <span class="call-icon"> <img src="{{$app->request->get('api_shortname')}}/img/footer/message-rgb-ison.png"
                                            alt=""></span>
                                    <span>
                                        <span class="d-block mb-0">{{$app->request->get('api_address')}}</span>
                                        <b><a href="mailto:{{$app->request->get('api_email')}}"> {{$app->request->get('api_email')}} </a></b>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="tp-footer__widget bs-pl-60 mb-40">
                                <h3 class="tp-footer__widget-title mb-35">
                                    Subscribe Now
                                </h3>
                                <p>Subscribe to get the latest news from us</p>

                                <div class="tp-footer-from mb-5 p-relative">

                    <form method="POST" id="contactForm2" validate>
                    @csrf
                        <span><i class="fas fa-envelope-open"></i></span>
                        <input type="email" name="email" id="email" placeholder="Enter your mail">
                        <button type="submit" id="submit"><i class="fas fa-paper-plane"></i>
                        </button>
                    </form> 
                                </div>
                                <span id="success-message2" class="d-block" style="color: grey;"> * By subscribing, you agree to our <a href="privacy-policy"><u>Privacy Policy</u></a> and <a href="terms-and-conditions"><u>Terms and Conditions</u></a>. </span>
                                <!-- <div class="da-ft-social">
                                    <b> Connect Here:</b>
                                    <span> <a href="index-3.html#"><i class="fab fa-facebook-f"></i></a></span>
                                    <span> <a href="index-3.html#"><i class="fab fa-twitter"></i></a></span>
                                    <span> <a href="index-3.html#"><i class="fab fa-behance"></i></a></span>
                                    <span> <a href="index-3.html#"><i class="fab fa-youtube"></i></a></span>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tp-footer__bottom pt-25 pb-25 da-ft-copyright-bg">
                    <div class="row align-items-center">
                        <div class="col-md-8 col-12">
                            <div class="tp-copyrigh-text">
                                <span>Copyright @ {{$app->request->get('api_name')}},  {{date('Y')}}</span>
                            </div>
                        </div>
                        <!-- <div class="col-md-4 d-none d-lg-block">
                            <div class="tp-footer-menu text-end">
                                <ul>
                                    <li><a href="faq.html">FAQ</a> </li>
                                    <li><a href="about.html">Insights</a></li>
                                </ul>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </footer>