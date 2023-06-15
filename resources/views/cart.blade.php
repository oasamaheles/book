@extends('admin.layout.common_area')

@section('content')
<!-- main area start here  -->
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
                        <h1 class="bd-breadcrumb-title">Cart</h1>
                        <div class="bd-breadcrumb-list">
                           <span><a href="index.html"><i class="flaticon-hut"></i>Kindedo</a></span>
                           <span>Cart</span>
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

   <!-- cart area start  -->

   <div class="cart-area pt-100 pb-100">
      <div class="container">
         <div class="row wow fadeInUp" data-wow-delay=".3s">
            <div class="col-12">
               <div class="table-content table-responsive">
                  <table class="table">
                     <thead>
                        <tr>
                           <th class="product-thumbnail">Images</th>
                           <th class="cart-product-name">name</th>
                           <th class="product-price">price</th>
                           <th class="cart-product-name">author</th>
                           <th class="product-subtotal">Description_book</th>

                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td class="product-thumbnail">
                              <div class="bd-class-details-thumb p-relative wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                                 <img style="height: 100px;width: 100px;" src="{{asset('storage/'.$books->image)}} " alt="img not found!">
                              </div>
                           </td>
                           <td class="product-name">
                              <a href="shop-details.html">{{$books->name}}</a>
                           </td>
                           <td class="product-price">
                              <span class="amount">{{$books->price}}</span>
                           </td>
                           <td class="product-name">
                              <a>{{$books->author}}</a>
                           </td>
                           <td class="product-subtotal">
                              <span class="amount">{{$books->Description_book}}</span>
                           </td>
                           <td class="product-remove">
                              <a href="#"><i class="fa fa-times"></i></a>
                           </td>
                        </tr>

                     </tbody>
                  </table>
               </div>
            </div>
         </div>


         <form action="Buy/{{$books->id}}" method="Post">
            @csrf
            <div style="margin-bottom: 100px;" class="class-btn">
               <button type="submit" class="default-btn">شراء</button>

            </div>
         </form>
      </div>
   </div>
   </div>
   </div>

   </div>
   </div>
   <!-- cart area end  -->

   <!-- newsletter area start here  -->
   <section class="bd-newsletter-area ">
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