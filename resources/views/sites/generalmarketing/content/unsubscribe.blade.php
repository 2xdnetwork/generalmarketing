<div class="breadcrumb__area theme-bg pt-120 pb-120" data-background="{{$app->request->get('api_shortname')}}/img/hero/breadcrumb-bg.png">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="breadcrumb__content p-relative z-index-1">
                        <div class="breadcrumb__list mb-10">
                           <span><a href="/">Home</a></span>
                           <span class="dvdr dvdr-line"></span>
                           <span class="tp-bc-acive-menu">Unsubscribe</span>
                        </div>
                        <h3 class="breadcrumb__title">Unsubscribe</h3>
                     </div>
                  </div>
               </div>
            </div>
         </div>

      <div class="contact-page-area pt-120 pb-120">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-6" >
                  <div class="mb-30">
                     <div class="it-cta__title">
                        <div class="section-title-wraper">
                           <div class="tp-section">
                              <div class="pb-40"><img src="assets/img/icons/red-what-icon.png" alt=""></div>
                              <h2 class="tp-section__title text-black text-capitalize mb-25">We are sorry to see you go.</h2>
                              <p class="pr-45">We will always remember the good times we had. Please allow 2 days for us to come to terms with this change and update our email list.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6" >
                  <div class="it-cta-form about-cta-form">

         <form method="POST" id="contactForm3" validate>
                     @csrf
            <div class="row">
                  <div class="col-lg-12">
                     <div class="input-item">
                     <input type="email" name="email" class="form-control" id="email" placeholder="Please enter your email to unsubscribe" required autocomplete="off">                    
                     </div>
                  </div>             
            </div>									
            <p id="success-message3" class="d-block"></p>
            <button class="it-cta-form-submit border-0" type="submit">
                  <span class="spinner spinner-border spinner-border-sm submit-button" role="status" aria-hidden="true" style="display: none"></span>
                  <span class="button-text" id="submit-button-text">Unsubscribe Now :(</span>
            </button>
         </form>
      </div>