@extends('admin.layout.common_area')

@section('content')
<main>
   <!-- breadcrumb area start here -->
   <section class="bd-breadcrumb-area p-relative fix theme-bg">
      <!-- breadcrumb background image -->
      <div class="bd-breadcrumb-bg" data-background="{{asset('img/bg/breadcrumb-bg.jpg')}}"></div>
      <div class="bd-breadcrumb-wrapper mb-60 p-relative">
         <div class="container">
            <div class="bd-breadcrumb-shape d-none d-sm-block p-relative">
               <div class="bd-breadcrumb-shape-1">
                  <img src="assets/img/shape/curved-line-2.png" alt="img not found!">
               </div>
               <div class="bd-breadcrumb-shape-2">
               </div>
            </div>
            <div class="row justify-content-center">
               <div class="col-xl-10">
                  <div class="bd-breadcrumb d-flex align-items-center justify-content-center">
                     <div class="bd-breadcrumb-content text-center">
                        <h1 class="bd-breadcrumb-title">Class Details</h1>
                        <div class="bd-breadcrumb-list">
                           <span><a href="index.html"><i class="flaticon-hut"></i>Kindedo</a></span>
                           <span>Class Details</span>
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

   <!-- class details area start here  -->

   <section class="bd-class-details-widget pt-120 pb-7">
      <div class="container">
         <div class="row">

            <div class="col-xl-6 col-lg-12 mb-10">
               <div class="bd-class-details-thumb p-relative wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                  <img src="{{asset('storage/'.$books->image) }}" alt="رولا">


               </div>
            </div>

            <div class="col-xl-6 col-lg-12 mb-10">
               <div class="bd-class-details-widget-content theme-bg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                  <h3 class="bd-class-details-widget-title mb-20">{{$books->name}}</h3>
                  <p class="mb-25">{{$books->Description_book}}</p>

                  <div class="bd-class-details-author-wrapper mt-35">
                     <div class="bd-class-details-author">
                        <div class="bd-class-details-author-thumb"><img src="{{asset('admin-asstes//img/program/author-1.png')}}" alt="img not found!">
                        </div>
                        <div class="bd-class-details-author-name">
                           <span>Author</span>
                           <h5>{{$books->author}}</h5>
                        </div>
                     </div>
                     <div class="bd-class-details-cat">
                        <span>Category</span>
                        <h5>{{$books->category->name}}</h5>
                     </div>
                     <div class="bd-class-details-cat">
                        <span>price</span>
                        <h5>{{$books->price}}</h5>
                     </div>
                     <div class="bd-class-details-cat">
                        <span>Release Date</span>
                        <h5>{{$books->Release_Date}}</h5>
                     </div>


                     <!-- <div class="bd-class-details-cat-wrapper">
                        </div> -->
                  </div>
               </div>
            </div>

         </div>


      </div>
   </section>
   <!-- class details area end here  -->

   <!-- shop category area start here -->
   <section class="bd-shop-cat-area pb-90">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-6">
               <div class="bd-shop-cat-wrap mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                  <div class="bd-shop-cat">
                     <div class="bd-shop-cat-content">
                        <div class="bd-shop-cat-title cat-1">
                           <div class="bd-shop-cat-icon">
                              <i class="flaticon-clock-2"></i>
                           </div>
                        </div>
                        <h6>2 - 3 Months</h6>
                        <span>Duration</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
               <div class="bd-shop-cat-wrap mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                  <div class="bd-shop-cat">
                     <div class="bd-shop-cat-content">
                        <div class="bd-shop-cat-title cat-2">
                           <div class="bd-shop-cat-icon">
                              <i class="flaticon-sand-clock"></i>
                           </div>
                        </div>
                        <h6>3 hours/day</h6>
                        <span>Class Duration</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
               <div class="bd-shop-cat-wrap mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                  <div class="bd-shop-cat">
                     <div class="bd-shop-cat-content">
                        <div class="bd-shop-cat-title cat-3">
                           <div class="bd-shop-cat-icon">
                              <i class="flaticon-volume-control"></i>
                           </div>
                        </div>
                        <h6>Class Size</h6>
                        <span>24</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
               <div class="bd-shop-cat-wrap mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                  <div class="bd-shop-cat">
                     <div class="bd-shop-cat-content">
                        <div class="bd-shop-cat-title cat-4">
                           <div class="bd-shop-cat-icon">
                              <i class="flaticon-class"></i>
                           </div>
                        </div>
                        <h6>All Level</h6>
                        <span>Level</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- shop category area end here-->

   <!-- program details area start here  -->
   <section class="bd-program-details-widget pb-70">
      <div class="container">
         <div class="row">

            <div class="col-lg-6 mb-50">
               <div class="bd-program-details-widget-content theme-bg-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                  <h3 class="bd-program-details-widget-title mb-20">Way to Learn</h3>
                  <p class="mb-25">As a result, the child should have a reasonable amount of freedom to do as they
                     please, while at the same time being wholly immersed in an environment which stimulates their
                     senses as well as exercising their creativity. Literally their classroom is their world,
                     providing exposure to materials and experiences that foster greater intellectual growth. You
                     will love it.</p>
                  <p class="mb-25">Please take a moment to read this website, and I’m sure that you will come to
                     agree that there would be better place. </p>
                  <div class="bd-program-details-btn">
                     <a href="about.html" class="bd-btn">
                        <span class="bd-btn-inner">
                           <span class="bd-btn-normal">Know More</span>
                           <span class="bd-btn-hover">Know More</span>
                        </span>
                     </a>
                  </div>
               </div>
            </div>

            <div class="col-lg-6 mb-50">
               <div class="bd-program-details-slider p-relative wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                  <div class="bd-program-details-slider-thumb p-relative">
                     <img src="{{asset('admin-asstes//img/program/details-1.jpg')}}" alt="img not found!">
                     <div class="panel-2 wow"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- program details area end here  -->

   <!-- routine area start here  -->
   <section class="bd-routine-2-area pb-95">
      <div class="container">
         <div class="row">
            <div class="row justify-content-center">
               <div class="col-lg-8">
                  <div class="bd-section-title-wrapper text-center mb-55 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                     <h2 class="bd-section-title mb-0">Class Time Table Weekly</h2>
                     <p>Our multi-level kindergarten programs cater to the age group of 2-5 years<br> with a
                        curriculum
                        focussing children.</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="bd-routine-2-wrapper wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
            <div class="row">
               <div class="col-12">
                  <div class="bd-routine-2">
                     <div class="table-responsive d-none d-md-block">
                        <table class="table">
                           <thead>
                              <tr>
                                 <th scope="col" class="clr-4">Sunday</th>
                                 <th scope="col" class="clr-5">Monday</th>
                                 <th scope="col" class="clr-4">Tuesday</th>
                                 <th scope="col" class="clr-5">Wednessday</th>
                                 <th scope="col" class="clr-4">Thursday</th>
                                 <th scope="col" class="clr-5">Friday</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td class="clr-5"></td>
                                 <td class="clr-1">
                                    8:00am - 8:30am
                                    <span> Play Class</span>
                                 </td>
                                 <td class="clr-5"></td>
                                 <td class="clr-4"></td>
                                 <td class="clr-5"></td>
                                 <td class="clr-4"></td>
                              </tr>
                              <tr>
                                 <td class="clr-1">
                                    8:00am - 8:30am
                                    <span> Play Class</span>
                                 </td>
                                 <td class="clr-5"></td>
                                 <td class="clr-1">
                                    8:00am - 8:30am
                                    <span> Play Class</span>
                                 </td>
                                 <td class="clr-4"></td>
                                 <td class="clr-5"></td>
                                 <td class="clr-4"></td>
                              </tr>
                              <tr>
                                 <td class="clr-5"></td>
                                 <td class="clr-4">
                                 </td>
                                 <td class="clr-5"></td>
                                 <td class="clr-4"></td>
                                 <td class="clr-1">
                                    8:00am - 8:30am
                                    <span> Play Class</span>
                                 </td>
                                 <td class="clr-1">
                                    8:00am - 8:30am
                                    <span> Play Class</span>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="clr-4"></td>
                                 <td class="clr-5"></td>
                                 <td class="clr-4"></td>
                                 <td class="clr-1">
                                    8:00am - 8:30am
                                    <span> Play Class</span>
                                 </td>
                                 <td class="clr-4"></td>
                                 <td class="clr-5"></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div class="bd-routine-list-wrap d-md-none">
                        <div class="bd-routine-list">
                           <h4 class="bd-routine-day">Monday</h4>
                           <ul>
                              <li>
                                 <span class="class-title">Sports Class</span>
                                 <span>8:00am - 8:30am </span>
                              </li>
                           </ul>
                        </div>
                        <div class="bd-routine-list">
                           <h4 class="bd-routine-day">Tuesday</h4>
                           <ul>
                              <li>
                                 <span class="class-title">Sports Class</span>
                                 <span>8:00am - 8:30am </span>
                              </li>
                           </ul>
                        </div>
                        <div class="bd-routine-list">
                           <h4 class="bd-routine-day">Wednesday</h4>
                           <ul>
                              <li>
                                 <span class="class-title">Sports Class</span>
                                 <span>8:00am - 8:30am </span>
                              </li>
                           </ul>
                        </div>
                        <div class="bd-routine-list">
                           <h4 class="bd-routine-day">Thursday</h4>
                           <ul>
                              <li>
                                 <span class="class-title">Sports Class</span>
                                 <span>8:00am - 8:30am </span>
                              </li>
                           </ul>
                        </div>
                        <div class="bd-routine-list">
                           <h4 class="bd-routine-day">Friday</h4>
                           <ul>
                              <li>
                                 <span class="class-title">Sports Class</span>
                                 <span>8:00am - 8:30am </span>
                              </li>
                           </ul>
                        </div>
                        <div class="bd-routine-list">
                           <h4 class="bd-routine-day">Saturday</h4>
                           <ul>
                              <li>
                                 <span class="class-title">Sports Class</span>
                                 <span>8:00am - 8:30am </span>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- routine area end here  -->

   <!-- program details area start here  -->
   <section class="bd-class-details-widget pb-70">
      <div class="container">
         <div class="row">
            <div class="col-lg-6  mb-50">
               <div class="bd-class-details-thumb p-relative wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                  <img src="{{asset('admin-asstes//img/program/details-2.jpg')}}" alt="img not found!">
                  <div class="panel wow"></div>
               </div>
            </div>
            <div class="col-lg-6 mb-50">
               <div class="bd-class-details-widget-content theme-bg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                  <h3 class="bd-class-details-widget-title mb-20">More Information</h3>
                  <p class="mb-25">The past thirteen years have been memorable for the free kinder garten movement in
                     the United States. Previous to that time, the work was largely private, experimental</p>
                  <div class="bd-class-details-list">
                     <ul>
                        <li>Semester start and end dates, holidays</li>
                        <li>Accreditation & Bear Facts</li>
                        <li>Graduate Division</li>
                        <li>Research at Our School</li>
                        <li>Textbooks: Cal Student Store</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- program details area end here  -->

   <!-- joining area start here  -->
   <section class="bd-joining-area-wrap">
      <div class="container">
         <div class="bd-joining-area radius-24 fix pt-100 pb-95 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
            <!-- joiniong bg -->
            <div class="bd-joining-bg" data-background="{{asset('admin-asstes//img/bg/joining-area.png')}}"></div>
            <!-- joining bg overlay -->
            <div class="bd-joining-bg-overlay"></div>
            <div class="bd-joining">
               <div class="bd-joining-shape-wrapper d-none d-md-block">
                  <div class="bd-joining-shape-1 p-absolute">
                     <img src="{{asset('admin-asstes//img/shape/white-curved-line.png')}}" alt="img not found!">
                  </div>
                  <div class="bd-joining-shape-2 p-absolute">
                     <img src="{{asset('admin-asstes//img/shape/white-curved-line.png')}}" alt="img not found!">
                  </div>
               </div>
               <div class="row justify-content-center">
                  <div class="col-md-8">
                     <div class="bd-joining-content text-center">
                        <div class="bd-section-title-wrapper is-white mb-45">
                           <h2 class="bd-section-title mb-0">Join Our New Session</h2>
                           <p>Kindedo believes that good questions drive good answers. Whether it's a query<br> about
                              the world around us or a challenge.</p>
                        </div>
                        <div class="bd-joining-btn">
                           <a href="classes.html" class="bd-btn btn-white">
                              <span class="bd-btn-inner">
                                 <span class="bd-btn-normal">Apply now</span>
                                 <span class="bd-btn-hover">Apply now</span>
                              </span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- bd-joining-bottom-line -->
            <div class="bd-joining-line"></div>
            <div class="bd-joining-line-2"></div>
         </div>
      </div>
   </section>
   <!-- joining area end here  -->

   <!-- program area start here  -->
   <section class="bd-program-area pt-120 pb-120">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-8">
               <div class="bd-section-title-wrapper text-center mb-55 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                  <h2 class="bd-section-title mb-0">More Programs</h2>
                  <p>Kindedo opened its doors in 1984 with a unique vision to provide its students<br> with a
                     globally focused study of arts.</p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-12">
               <div class="bd-program-active swiper-container wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <div class="bd-program clr-4">
                           <div class="bd-program-thumb-wrapper">
                              <a href="program-details.html">
                                 <div class="bd-program-thumb">
                                    <img src="{{asset('admin-asstes//img/program/home-program-5.jpg')}}" alt="Image not found">
                                 </div>
                              </a>
                              <div class="bd-program-shape">

                                 <svg width="97" height="61" viewBox="0 0 97 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M64.6716 54.1604C66.9487 53.8135 68.0029 53.176 70.1655 51.8716C72.687 50.3497 74.6533 48.7547 76.851 46.7751C81.5182 42.5716 85.6125 37.7759 88.3885 32.1351C89.3558 30.1686 90.1276 27.6273 90.1313 25.5758C90.1315 25.3005 90.1117 25.0277 90.0918 24.7549C90.0265 23.8818 90.2031 25.3139 90.0405 24.4639C89.9925 24.2075 89.5555 22.9191 89.7728 23.4319C89.2072 22.1159 89.0297 21.9948 87.919 21.0408C88.3994 21.4535 87.6126 20.8359 87.5796 20.8122C87.3117 20.6295 87.0241 20.4728 86.742 20.3146C86.1464 19.9801 86.0413 19.952 85.2752 19.7431C84.1901 19.448 82.8104 19.4448 81.687 19.6363C78.5001 20.1766 75.6296 21.8098 72.9716 23.5842C68.3495 26.675 64.3591 30.7652 60.7083 34.9302C57.6486 38.419 54.7864 42.1477 52.4483 46.1651C50.7786 49.0329 45.5641 47.1191 46.89 43.8848C51.1259 33.5329 58.2673 24.4618 60.3324 13.286C60.5123 12.3117 60.5829 11.5264 60.5346 10.2197C60.5086 9.53722 60.3305 8.76235 60.0088 8.17986C59.9287 8.03562 59.4795 7.46359 59.9681 8.0724C59.8265 7.8973 59.6603 7.74064 59.4975 7.586C58.9409 7.05461 60.0584 7.95649 59.4036 7.52241C59.2016 7.38715 58.978 7.28138 58.7599 7.17412C59.5708 7.57229 57.6109 6.91683 58.1827 6.98555C57.3018 6.87835 57.1842 6.93649 56.5835 7.0797C54.2764 7.62392 52.1345 9.91104 50.3687 12.0559C48.1084 14.8068 46.3554 18.0372 44.7495 21.1985C42.4766 25.6689 40.4435 30.4271 39.1985 35.2997C38.3627 38.5742 33.0058 38.039 33.2313 34.5522C33.5916 28.9728 33.2617 22.5516 29.4062 18.2114C26.7668 15.2407 23.0084 14.0789 19.1031 14.0364C15.4058 13.9974 11.8239 14.9631 8.76894 16.835C8.46428 17.0232 8.16959 17.2264 7.8819 17.4337C8.43815 17.0361 7.48374 17.7919 7.35335 17.9126C7.12532 18.1217 6.91976 18.3484 6.71218 18.5786C6.49139 18.8478 6.52116 18.8043 6.8015 18.4481C6.67742 18.6145 6.57085 18.791 6.46227 18.971C6.33953 19.1755 6.03656 19.9994 6.36393 19.1009C6.3243 19.2181 6.28817 19.3372 6.26107 19.4569C6.09281 20.0879 6.30183 18.7477 6.25786 19.3897C6.20414 20.1941 6.07556 18.8971 6.28012 19.6826C6.38155 19.9839 6.34925 19.9186 6.18121 19.4902C6.25911 19.6705 6.36665 19.8399 6.47068 20.0073C8.54804 23.3209 3.27758 26.3221 1.20373 23.0105C-1.32813 18.9724 1.35314 14.7891 4.67051 12.3172C8.5432 9.43318 13.6276 8.1448 18.3911 7.97801C23.9493 7.78467 29.5454 9.6761 33.4772 13.6823C38.7859 19.0949 39.7676 27.2972 39.2968 34.507C37.3071 34.259 35.3194 34.0075 33.3296 33.7595C34.8894 27.6545 37.5757 21.6679 40.5532 16.1388C43.6956 10.3081 48.0598 3.42806 54.7197 1.29441C60.5782 -0.583104 65.8989 3.60425 66.5299 9.38255C67.1754 15.2812 64.4622 21.4763 62.1681 26.7512C60.4793 30.6302 58.5384 34.3961 56.561 38.1364C55.7379 39.6914 54.9022 41.2438 54.0826 42.8009C53.7803 43.3731 53.4869 43.9458 53.1986 44.5261C53.0443 44.8337 52.3024 46.5149 52.7585 45.4015C50.9044 44.6437 49.0523 43.8824 47.2002 43.1212C50.572 37.3296 54.9473 32.0148 59.5792 27.1934C64.7323 21.8329 70.81 16.6656 77.9757 14.3106C84.0554 12.3087 90.9808 13.9268 94.5512 19.4886C97.6943 24.3837 95.8393 30.7009 93.4918 35.4782C90.5195 41.5238 85.8091 46.8692 80.8339 51.3476C76.879 54.9076 71.7076 59.1841 66.2523 60.0156C64.6203 60.2635 63.0014 59.5995 62.5384 57.8713C62.1353 56.4111 63.0341 54.4098 64.6716 54.1604Z" fill="#FF577B" />
                                 </svg>

                              </div>
                           </div>
                           <div class="bd-program-content mb-40">
                              <h3 class="bd-program-title"><a href="program-details.html" class="hover-clr-4">Nursery</a>
                              </h3>
                              <p>With connection with local licensed child care providers and other.</p>
                           </div>
                           <div class="bd-program-info-wrapper theme-bg-9">
                              <div class="bd-program-info">
                                 <h5 class="bd-program-info-title">4-5 Yrs <br><span>age</span></h5>
                              </div>
                              <div class="bd-program-info">
                                 <h5 class="bd-program-info-title">5 Days <br><span>weekly</span></h5>
                              </div>
                              <div class="bd-program-info">
                                 <h5 class="bd-program-info-title">3.30 Hrs<br><span>period</span></h5>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="bd-program clr-5">
                           <div class="bd-program-thumb-wrapper">
                              <a href="program-details.html">
                                 <div class="bd-program-thumb">
                                    <img src="{{asset('admin-asstes//img/program/home-program-4.jpg')}}" alt="Image not found">
                                 </div>
                              </a>
                              <div class="bd-program-shape">

                                 <svg width="97" height="61" viewBox="0 0 97 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M64.6716 54.1604C66.9487 53.8135 68.0029 53.176 70.1655 51.8716C72.687 50.3497 74.6533 48.7547 76.851 46.7751C81.5182 42.5716 85.6125 37.7759 88.3885 32.1351C89.3558 30.1686 90.1276 27.6273 90.1313 25.5758C90.1315 25.3005 90.1117 25.0277 90.0918 24.7549C90.0265 23.8818 90.2031 25.3139 90.0405 24.4639C89.9925 24.2075 89.5555 22.9191 89.7728 23.4319C89.2072 22.1159 89.0297 21.9948 87.919 21.0408C88.3994 21.4535 87.6126 20.8359 87.5796 20.8122C87.3117 20.6295 87.0241 20.4728 86.742 20.3146C86.1464 19.9801 86.0413 19.952 85.2752 19.7431C84.1901 19.448 82.8104 19.4448 81.687 19.6363C78.5001 20.1766 75.6296 21.8098 72.9716 23.5842C68.3495 26.675 64.3591 30.7652 60.7083 34.9302C57.6486 38.419 54.7864 42.1477 52.4483 46.1651C50.7786 49.0329 45.5641 47.1191 46.89 43.8848C51.1259 33.5329 58.2673 24.4618 60.3324 13.286C60.5123 12.3117 60.5829 11.5264 60.5346 10.2197C60.5086 9.53722 60.3305 8.76235 60.0088 8.17986C59.9287 8.03562 59.4795 7.46359 59.9681 8.0724C59.8265 7.8973 59.6603 7.74064 59.4975 7.586C58.9409 7.05461 60.0584 7.95649 59.4036 7.52241C59.2016 7.38715 58.978 7.28138 58.7599 7.17412C59.5708 7.57229 57.6109 6.91683 58.1827 6.98555C57.3018 6.87835 57.1842 6.93649 56.5835 7.0797C54.2764 7.62392 52.1345 9.91104 50.3687 12.0559C48.1084 14.8068 46.3554 18.0372 44.7495 21.1985C42.4766 25.6689 40.4435 30.4271 39.1985 35.2997C38.3627 38.5742 33.0058 38.039 33.2313 34.5522C33.5916 28.9728 33.2617 22.5516 29.4062 18.2114C26.7668 15.2407 23.0084 14.0789 19.1031 14.0364C15.4058 13.9974 11.8239 14.9631 8.76894 16.835C8.46428 17.0232 8.16959 17.2264 7.8819 17.4337C8.43815 17.0361 7.48374 17.7919 7.35335 17.9126C7.12532 18.1217 6.91976 18.3484 6.71218 18.5786C6.49139 18.8478 6.52116 18.8043 6.8015 18.4481C6.67742 18.6145 6.57085 18.791 6.46227 18.971C6.33953 19.1755 6.03656 19.9994 6.36393 19.1009C6.3243 19.2181 6.28817 19.3372 6.26107 19.4569C6.09281 20.0879 6.30183 18.7477 6.25786 19.3897C6.20414 20.1941 6.07556 18.8971 6.28012 19.6826C6.38155 19.9839 6.34925 19.9186 6.18121 19.4902C6.25911 19.6705 6.36665 19.8399 6.47068 20.0073C8.54804 23.3209 3.27758 26.3221 1.20373 23.0105C-1.32813 18.9724 1.35314 14.7891 4.67051 12.3172C8.5432 9.43318 13.6276 8.1448 18.3911 7.97801C23.9493 7.78467 29.5454 9.6761 33.4772 13.6823C38.7859 19.0949 39.7676 27.2972 39.2968 34.507C37.3071 34.259 35.3194 34.0075 33.3296 33.7595C34.8894 27.6545 37.5757 21.6679 40.5532 16.1388C43.6956 10.3081 48.0598 3.42806 54.7197 1.29441C60.5782 -0.583104 65.8989 3.60425 66.5299 9.38255C67.1754 15.2812 64.4622 21.4763 62.1681 26.7512C60.4793 30.6302 58.5384 34.3961 56.561 38.1364C55.7379 39.6914 54.9022 41.2438 54.0826 42.8009C53.7803 43.3731 53.4869 43.9458 53.1986 44.5261C53.0443 44.8337 52.3024 46.5149 52.7585 45.4015C50.9044 44.6437 49.0523 43.8824 47.2002 43.1212C50.572 37.3296 54.9473 32.0148 59.5792 27.1934C64.7323 21.8329 70.81 16.6656 77.9757 14.3106C84.0554 12.3087 90.9808 13.9268 94.5512 19.4886C97.6943 24.3837 95.8393 30.7009 93.4918 35.4782C90.5195 41.5238 85.8091 46.8692 80.8339 51.3476C76.879 54.9076 71.7076 59.1841 66.2523 60.0156C64.6203 60.2635 63.0014 59.5995 62.5384 57.8713C62.1353 56.4111 63.0341 54.4098 64.6716 54.1604Z" fill="#00B9F1" />
                                 </svg>

                              </div>
                           </div>
                           <div class="bd-program-content mb-40">
                              <h3 class="bd-program-title"><a href="program-details.html" class="hover-clr-5">Junior
                                    Kg</a>
                              </h3>
                              <p>Kindedo not only for all our dedica 2023 reunion year groups.</p>
                           </div>
                           <div class="bd-program-info-wrapper theme-bg-8">
                              <div class="bd-program-info">
                                 <h5 class="bd-program-info-title">4-5 Yrs <br><span>age</span></h5>
                              </div>
                              <div class="bd-program-info">
                                 <h5 class="bd-program-info-title">5 Days <br><span>weekly</span></h5>
                              </div>
                              <div class="bd-program-info">
                                 <h5 class="bd-program-info-title">3.30 Hrs<br><span>period</span></h5>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="bd-program clr-6">
                           <div class="bd-program-thumb-wrapper">
                              <a href="program-details.html">
                                 <div class="bd-program-thumb">
                                    <img src="{{asset('admin-asstes//img/program/home-program-1.jpg')}}" alt="Image not found">
                                 </div>
                              </a>
                              <div class="bd-program-shape">

                                 <svg width="97" height="61" viewBox="0 0 97 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M64.6716 54.1604C66.9487 53.8135 68.0029 53.176 70.1655 51.8716C72.687 50.3497 74.6533 48.7547 76.851 46.7751C81.5182 42.5716 85.6125 37.7759 88.3885 32.1351C89.3558 30.1686 90.1276 27.6273 90.1313 25.5758C90.1315 25.3005 90.1117 25.0277 90.0918 24.7549C90.0265 23.8818 90.2031 25.3139 90.0405 24.4639C89.9925 24.2075 89.5555 22.9191 89.7728 23.4319C89.2072 22.1159 89.0297 21.9948 87.919 21.0408C88.3994 21.4535 87.6126 20.8359 87.5796 20.8122C87.3117 20.6295 87.0241 20.4728 86.742 20.3146C86.1464 19.9801 86.0413 19.952 85.2752 19.7431C84.1901 19.448 82.8104 19.4448 81.687 19.6363C78.5001 20.1766 75.6296 21.8098 72.9716 23.5842C68.3495 26.675 64.3591 30.7652 60.7083 34.9302C57.6486 38.419 54.7864 42.1477 52.4483 46.1651C50.7786 49.0329 45.5641 47.1191 46.89 43.8848C51.1259 33.5329 58.2673 24.4618 60.3324 13.286C60.5123 12.3117 60.5829 11.5264 60.5346 10.2197C60.5086 9.53722 60.3305 8.76235 60.0088 8.17986C59.9287 8.03562 59.4795 7.46359 59.9681 8.0724C59.8265 7.8973 59.6603 7.74064 59.4975 7.586C58.9409 7.05461 60.0584 7.95649 59.4036 7.52241C59.2016 7.38715 58.978 7.28138 58.7599 7.17412C59.5708 7.57229 57.6109 6.91683 58.1827 6.98555C57.3018 6.87835 57.1842 6.93649 56.5835 7.0797C54.2764 7.62392 52.1345 9.91104 50.3687 12.0559C48.1084 14.8068 46.3554 18.0372 44.7495 21.1985C42.4766 25.6689 40.4435 30.4271 39.1985 35.2997C38.3627 38.5742 33.0058 38.039 33.2313 34.5522C33.5916 28.9728 33.2617 22.5516 29.4062 18.2114C26.7668 15.2407 23.0084 14.0789 19.1031 14.0364C15.4058 13.9974 11.8239 14.9631 8.76894 16.835C8.46428 17.0232 8.16959 17.2264 7.8819 17.4337C8.43815 17.0361 7.48374 17.7919 7.35335 17.9126C7.12532 18.1217 6.91976 18.3484 6.71218 18.5786C6.49139 18.8478 6.52116 18.8043 6.8015 18.4481C6.67742 18.6145 6.57085 18.791 6.46227 18.971C6.33953 19.1755 6.03656 19.9994 6.36393 19.1009C6.3243 19.2181 6.28817 19.3372 6.26107 19.4569C6.09281 20.0879 6.30183 18.7477 6.25786 19.3897C6.20414 20.1941 6.07556 18.8971 6.28012 19.6826C6.38155 19.9839 6.34925 19.9186 6.18121 19.4902C6.25911 19.6705 6.36665 19.8399 6.47068 20.0073C8.54804 23.3209 3.27758 26.3221 1.20373 23.0105C-1.32813 18.9724 1.35314 14.7891 4.67051 12.3172C8.5432 9.43318 13.6276 8.1448 18.3911 7.97801C23.9493 7.78467 29.5454 9.6761 33.4772 13.6823C38.7859 19.0949 39.7676 27.2972 39.2968 34.507C37.3071 34.259 35.3194 34.0075 33.3296 33.7595C34.8894 27.6545 37.5757 21.6679 40.5532 16.1388C43.6956 10.3081 48.0598 3.42806 54.7197 1.29441C60.5782 -0.583104 65.8989 3.60425 66.5299 9.38255C67.1754 15.2812 64.4622 21.4763 62.1681 26.7512C60.4793 30.6302 58.5384 34.3961 56.561 38.1364C55.7379 39.6914 54.9022 41.2438 54.0826 42.8009C53.7803 43.3731 53.4869 43.9458 53.1986 44.5261C53.0443 44.8337 52.3024 46.5149 52.7585 45.4015C50.9044 44.6437 49.0523 43.8824 47.2002 43.1212C50.572 37.3296 54.9473 32.0148 59.5792 27.1934C64.7323 21.8329 70.81 16.6656 77.9757 14.3106C84.0554 12.3087 90.9808 13.9268 94.5512 19.4886C97.6943 24.3837 95.8393 30.7009 93.4918 35.4782C90.5195 41.5238 85.8091 46.8692 80.8339 51.3476C76.879 54.9076 71.7076 59.1841 66.2523 60.0156C64.6203 60.2635 63.0014 59.5995 62.5384 57.8713C62.1353 56.4111 63.0341 54.4098 64.6716 54.1604Z" fill="#7C81FF" />
                                 </svg>

                              </div>
                           </div>
                           <div class="bd-program-content mb-40">
                              <h3 class="bd-program-title"><a href="program-details.html" class="hover-clr-6">Senior
                                    Kg</a>
                              </h3>
                              <p>Jean-Jacques Rousseau’s belief in the inherent goodness of children.</p>
                           </div>
                           <div class="bd-program-info-wrapper theme-bg-10">
                              <div class="bd-program-info">
                                 <h5 class="bd-program-info-title">4-5 Yrs <br><span>age</span></h5>
                              </div>
                              <div class="bd-program-info">
                                 <h5 class="bd-program-info-title">5 Days <br><span>weekly</span></h5>
                              </div>
                              <div class="bd-program-info">
                                 <h5 class="bd-program-info-title">3.30 Hrs<br><span>period</span></h5>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- program slider dots pagination  -->
         <div class="bd-program-pagination bd-dots-pagination wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s"></div>
      </div>
   </section>
   <!-- program area end here -->

   <!-- newsletter area start here  -->
   <section class="bd-newsletter-area">
      <div class="container">
         <div class="bd-newsletter pt-100 pb-100 theme-bg">
            <div class="bd-newsletter-bg" data-background="{{asset('admin-asstes//img/bg/newsletter-bg.jpg')}}"></div>
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
   <div class="bd-search-overlay"></div>
   <!-- serach popup area end here  -->

   <!-- JS here -->
   <script src="assets/js/vendor/jquery.js"></script>
   <script src="assets/js/vendor/waypoints.js"></script>
   <script src="assets/js/bootstrap-bundle.js"></script>
   <script src="assets/js/meanmenu.js"></script>
   <script src="assets/js/swiper-bundle.js"></script>
   <script src="assets/js/slick.js"></script>
   <script src="assets/js/nouislider.js"></script>
   <script src="assets/js/magnific-popup.js"></script>
   <script src="assets/js/parallax.js"></script>
   <script src="assets/js/backtotop.js"></script>
   <script src="assets/js/nice-select.js"></script>
   <script src="assets/js/wow.min.js"></script>
   <script src="assets/js/isotope-pkgd.js"></script>
   <script src="assets/js/imagesloaded-pkgd.js"></script>
   <script src="assets/js/ajax-form.js"></script>
   <script src="assets/js/jquery.appear.js"></script>
   <script src="assets/js/jquery.odometer.min.js"></script>
   <script src="assets/js/main.js"></script>

</main>
@endsection