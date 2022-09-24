      <div class="breadcrumb__area theme-bg pt-120 pb-120" data-background="img/hero/breadcrumb-bg.png">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="breadcrumb__content p-relative z-index-1">
                        <div class="breadcrumb__list mb-10">
                           <span><a href="/">Home</a></span>
                           <span class="dvdr dvdr-line"></span>
                           <span class="tp-bc-acive-menu">Contact</span>
                        </div>
                        <h3 class="breadcrumb__title">Get Started</h3>
                     </div>
                  </div>
               </div>
            </div>
         </div>



      <div class="contact-page-area pt-120 pb-90 wow tpfadeUp">
         <div class="container">
                        <div class="row">
               <div class="col-lg-2">
                  <span class="say-hello">Get a Quote</span>
               </div>
               <div class="col-lg-10">
                  <div class="tp-contact-page-info ">
                     <h3 class="tp-section__title pb-60 mb-60 tp-border-bottom">Are you ready to transform your company? Lets start the conversation.</h3>
                  </div>

                  <?php $sales = 'sales@' . $app->request->get('api_domain');  $contact = 'contact@' . $app->request->get('api_domain');?> 
                  <div class="row">
                     <div class="col-lg-4">
                        <div class="contact-cta-item mb-30">
                           <b>Our Address:</b> <br>
                           <p style="font-size: 20px;  color: var(--tp-grey-1);">{{$app->request->get('api_address')}}</p>
                        </div>
                     </div> 
                     <div class="col-lg-4">
                        <div class="contact-cta-item mb-30">
                           <b>Sales Department</b> <br>
                           <a  href="mailto:{{$sales}}">
                              {{$sales}}
                           </a> <br>
                           <a href="tel:{{$app->request->get('api_phone')}}">
                              {{$app->request->get('api_phone')}}
                           </a>
                        </div>
                     </div>

                     <div class="col-lg-4">
                        <div class="contact-cta-item mb-30">
                           <b>General Questions</b> <br>
                           <a  href="mailto:{{$contact}}">
                              {{$contact}}
                           </a> <br>
                           <a href="tel:{{$app->request->get('api_phone')}}">
                              {{$app->request->get('api_phone')}}
                           </a>
                        </div>
                     </div>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>


      <div class="it-cta-area law-cta-area about-me-cta-area pt-120 pb-85 theme-bg"
         data-background="assets/img/cta/sv-detials-cta-bg.png">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-6" >
                  <div class="mb-30">
                     <div class="it-cta__title wow tpfadeUp">
                        <div class="section-title-wraper">
                           <div class="tp-section">
                              <div class="pb-40"><img src="assets/img/icons/red-what-icon.png" alt=""></div>
                              <h2 class="tp-section__title text-black text-capitalize mb-25">Any project on your
                                 mind. Let us know.</h2>
                              <p class="pr-45">We bring to the table win-win survival strategies to ensure proactive
                                 domination. At the end of the day, going forward, a new normal that
                                 has evolved from generation X is on the runway heading towards.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6" >
                  <div class="it-cta-form about-cta-form wow tpfadeUp">

         <form method="POST" id="contactForm1" validate>
                     @csrf
            <div class="row">
                  <div class="col-lg-6">
                     <div class="input-item">
                     <input name="full_name" type="text" class="form-control" id="full_name" placeholder="* Full Name" required autocomplete="off">                   
                     </div>
                  </div>


                  <div class="col-lg-6">
                     <div class="input-item">
                     <input type="email" name="email" class="form-control" id="email" placeholder="* Email" required autocomplete="off">                    
                     </div>
                  </div>

                  <div class="col-lg-6">
                     <div class="input-item">
                     <input name="phone_number" type="text" class="form-control" id="phone_number" placeholder="Phone Number" autocomplete="off">                   
                     </div>
                  </div>

                  <div class="col-lg-6">
                     <div class="input-item">
                     <input name="website" type="text" class="form-control" id="website" placeholder="Website" autocomplete="off">                   
                     </div>
                  </div>
            </div>									

            <div class="input-item-textarea">
                  <textarea class="form-control" name="message" id="message" placeholder="* Enter Your Message..." required></textarea>	
            </div>
            <!-- <p id="success-message1" style="color:green;"></p> -->
            <p id="success-message1" class="d-block"> * By submitting this form, you agree to our <a href="privacy-policy"><u>Privacy Policy</u></a> and <a href="terms-and-conditions"><u>Terms and Conditions</u></a>. </p>
            <button class="it-cta-form-submit border-0" type="submit">
                  <span class="spinner spinner-border spinner-border-sm submit-button" role="status" aria-hidden="true" style="display: none"></span>
                  <span class="button-text" id="submit-button-text">Submit</span>
            </button>
         </form>
      </div>