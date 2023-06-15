@extends('admin.layout.common_area')

@section('content')

<main>
   <!-- breadcrumb area start here -->
   <section class="bd-breadcrumb-area p-relative fix theme-bg">
      <!-- breadcrumb background image -->
      <div class="bd-breadcrumb-bg" data-background="assets/img/bg/breadcrumb-bg.jpg"></div>
      <div class="bd-breadcrumb-wrapper mb-60 p-relative">
         <div class="container">
            <div class="bd-breadcrumb-shape d-none d-sm-block p-relative">
               <div class="bd-breadcrumb-shape-1">
                  <img src="assets/img/shape/curved-line-2.png" alt="img not found!">
               </div>
               <div class="bd-breadcrumb-shape-2">
                  <img src="assets/img/shape/white-curved-line.png" alt="img not found!">
               </div>
            </div>
            <div class="row justify-content-center">
               <div class="col-xl-10">
                  <div class="bd-breadcrumb d-flex align-items-center justify-content-center">
                     <div class="bd-breadcrumb-content text-center">
                        <h1 class="bd-breadcrumb-title">Classes</h1>
                        <div class="bd-breadcrumb-list">
                           <span><a href="index.html"><i class="flaticon-hut"></i>Kindedo</a></span>
                           <span>Classes</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="bd-wave-wrapper bd-wave-wrapper-3">
         <div class="bd-wave bd-wave-3"></div>
         <div class="bd-wave bd-wave-3"></div>
      </div>
   </section>
   <!-- breadcrumb area end here  -->



   <!-- class area start here -->
   <section class="bd-class-area pt-110 pb-120">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-8">
               <div class="bd-section-title-wrapper text-center mb-55 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                  <h2 class="bd-section-title mb-0">View books </h2>

               </div>
            </div>
         </div>
         <div class="example mb-10">

            <form action="/classes" method="get" novalidate="novalidate">

               <div class="row">
                  <div class="col-md-3" style="margin-left: 190px; margin-top:50px;">
                     <div class="form-group">

                        <label for="">Book name</label>
                        <input value="" class="form-control m-input m-input--square" name="name" type="text">
                     </div>
                  </div>
                  <div class="col-md-2" style="margin-top: 80px;">
                     <div class="form-group">
                        <button type="submit" class="btn btn-dinger">
                           <i class="fas fa-search"></i>
                        </button>

                     </div>




                  </div>


               </div>

            </form>

         </div>











         <section class="bd-shop-cat-area pb-90">

            <div class="container">
               <div class="row justify">

                  @foreach($books as $book)
                  <div class="col-lg-5 col-md-9 col-sm-9 ">

                     <div class="bd-shop" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="bd-class-3 fix radius-24 p-relative mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                           <div class="bd-class-thumb">

                              <img src="{{asset('storage/'.$book->image) }}" alt="رولا">
                           </div>
                           <div class="bd-class-content-3 theme-bg-6 ">
                              <h3>{{$book->name}}</h3>
                              <p class="mb-20">{{$book->Description_book}}</p>
                              <div class="bd-class-meta-wrapper d-inline-block justify-">
                                 <div class="bd-class-meta d- align-items-center flex-wrap">
                                    <div class="bd-class-meta-thumb">
                                       <a href="teacher-details.html">
                                          <img src="assets/img/teacher/small-1.png" alt="image not found!">
                                       </a>
                                    </div>
                                    <span>{{$book->author}}</span>
                                 </div>
                                 <div class="bd-class-meta">
                                    <div class="bd-class-meta-price">
                                       <span>{{$book->price}}</span>price
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="bd-class-btn-3 theme-bg-2 text-center">
                              <a href="view-details/{{$book->id}}">Details</a>
                           </div>

                        </div>
                        <div class="bd-header-meta-item d-none bd-header-menu-meta d-xxl-flex align-items-center">
                           <div class="bd-header-meta-icon-3 bd-header-cart">
                              <a href="cart/{{$book->id}}" class="fa-regular fa-cart-shopping">
                              </a>
                              <div class="bd-header-cart-wrapper">
                                 <div class="bd-header-cart-item">

                                 </div>

                              </div>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
               @endforeach


            </div>




         </section>




         <!-- class area end here -->

         <!-- testimonial area start here  -->

         <!-- testimonial area end here  -->

         <!-- promotion area start here  -->

         <!-- promotion area end here  -->

         <!-- newsletter area start here -->
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
         <!-- newsletter area end here -->
</main>

@endsection