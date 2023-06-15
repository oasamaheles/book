@extends('admin.layout.common_area')

@section('content')
<main>
   <!-- hero area start here  -->
   <section class="bd-hero-area bd-hero-area-3 fix">

      <!-- hero area bg here  -->
      <div class="bd-gradient-bg"></div>

      <!-- hero area side social  -->
      <div class="bd-hero-social-wrapper">
         <div class="bd-hero-social">
            <a href="#"><i class="fa-brands fa-facebook-f"></i>facebook</a>
         </div>
         <div class="bd-hero-social">
            <a href="#"><i class="fa-brands fa-twitter"></i>twitter</a>
         </div>
         <div class="bd-hero-social">
            <a href="#"><i class="fa-brands fa-youtube"></i>youtube</a>
         </div>
      </div>
      <div class="container">
         <div class="bd-hero-inner-3">
            <div class="bd-hero-shape-wrapper d-none d-lg-block">
               <!-- <div class="bd-hero-3-shape-2">
                  <img src="assets/img/logo/svg.svg" alt="Shape not found">
               </div> -->
            </div>
            <div class="row align-items-center">
               <div class="col-lg-7 col-md-6">
                  <div class="bd-hero-content">
                     <span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">Library to display books</span>
                     <h1 class="bd-hero-title wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        Best books to read </h1>
                     <!-- <div class="bd-hero-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
                        <a href="programs.html" class="bd-btn">
                           <span class="bd-btn-inner">
                              <span class="bd-btn-normal">Admission open 22-23</span>
                              <span class="bd-btn-hover">Admission open 22-23</span>
                           </span>
                        </a>
                     </div> -->
                  </div>
               </div>
               <div class="col-lg-5 col-md-6">
                  <div id="scene">
                     <div class="bd-hero-thumb-3-wrapper p-relative z-index-1" data-depth=".4">
                        <div class="bd-hero-thumb-3 p-relative">
                           <div class="bd-hero-thumb-3-mask">
                              <img src="aassets/img/shape/curved-line-1.png" alt="">
                           </div>
                        </div>
                        <div class="bd-hero-thumb-3-shape d-none d-md-block">
                           <div class="bd-hero-thumb-3-shape-1 p-absolute">
                              <img src="assets/img/shape/curved-line-1.png" alt="img not found!">
                           </div>
                           <div class="bd-hero-thumb-3-shape-2 p-absolute">
                              <img src="assets/img/shape/curved-line-2.png" alt="">
                           </div>
                           <div class="bd-hero-thumb-3-shape-3 p-absolute">
                              <img src="assets/img/shape/curved-line-1.png" alt="">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="bd-hero-3-shape d-none d-lg-block" id="scene2">
         <img data-depth=".5" src="assets/img/logo/svg.svg" alt="img not found!">
      </div>
   </section>
   <!-- hero area end here  -->

   <!-- class area start here -->
   <section class="bd-class-area pt-110 pb-120">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-8">
               <div class="bd-section-title-wrapper text-center mb-55 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                  <h2 class="bd-section-title mb-0">Latest books</h2>

               </div>
            </div>
         </div>
         <div class="row">
            @foreach($books as $book)
            <div class="col-12">
               <div class="bd-class-active swiper-container wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <div class="bd-class-wrapper text-center">
                           <!-- bd-class-bg here -->
                           <div class="bd-class-bg">
                              <img src="assets/img/bg/bg-shape.jpg" alt="img not found!">
                           </div>
                           <div class="bd-class">
                              <div class="bd-class-icon">
                                 <i class="flaticon-sports"></i>
                              </div>
                              <div class="bd-class-content">
                                 <h3>
                                    <a href="#">{{$book->name}}</a>
                                 </h3>
                                 <p>{!!$book->Description_book!!}</p>
                                 <div class="bd-class-btn">
                                    <a href="/view-details/{{$book->id}}" class="bd-btn bd-btn-grey">
                                       <span class="bd-btn-inner">
                                          <span class="bd-btn-normal">View Details</span>
                                          <span class="bd-btn-hover">View Details</span>
                                       </span>
                                    </a>
                                 </div>

                              </div>


                           </div>
                        </div>
                     </div>
                     @endforeach

                  </div>
               </div>
               <!-- slider dots pagination -->
               <div class="bd-class-pagination bd-dots-pagination"></div>
            </div>
         </div>
      </div>
      <div class="bd-class-btn">
         <a href="{{route('classes')}}" class="bd-btn bd-btn-grey">
            <span class="bd-btn-inner">
               <span class="bd-btn-normal">View More</span>
               <span class="bd-btn-hover">View More</span>
            </span>
         </a>
      </div>
   </section>
   <!-- class area end here -->

   <!-- promotion area start here  -->

   <!-- promotion area end here  -->

   <!-- program area start here  -->

   <!-- program area end here -->

   <!-- faq area start here  -->

   <!-- faq area end here  -->

   <!-- joining area start here  -->

   <!-- joining area end here  -->

   <!-- teacher area start here  -->

   <!-- teacher area end here  -->

   <!-- testimonial area start here  -->

   <!-- testimonial area end here  -->

   <!-- blog area start here  -->

   <!-- blog area end here  -->

   <!-- newsletter area start here  -->
   <section class="bd-newsletter-area">
      <div class="container">
         <div class="bd-newsletter pt-100 pb-100 theme-bg">
            <div class="bd-newsletter-bg" data-background="assets/img/bg/newsletter-bg.jpg"></div>
            <div class="row justify-content-center">
               <div class="col-xl-8 col-lg-10">
                  <div class="bd-newsletter-content">
                     <div class="bd-section-title-wrapper text-center is-white mb-45">
                        <h2 class="bd-section-title mb-0">Join Our Newsletter</h2>
                        <p>Subscribe our newsletter to get our latest update & news.</p>
                     </div>
                     <div class="bd-newsletter-form">
                        <form action="#">
                           <div class="bd-newsletter-input">
                              <input type="text" placeholder="your email">
                              <button type="submit" class="bd-btn">
                                 <span class="bd-btn-inner">
                                    <span class="bd-btn-normal"><i class="fa-sharp fa-solid fa-paper-plane"></i>Subscribe now</span>
                                    <span class="bd-btn-hover"><i class="fa-sharp fa-solid fa-paper-plane"></i>Subscribe now</span>
                                 </span>
                              </button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- newsletter area end here  -->
</main>
@endsection