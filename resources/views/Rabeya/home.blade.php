@extends('Rabeya.layouts.main')
@section('main-container')

    <!-- Hero Section Begin -->
    <section class="hero spad set-bg ftco-animate" style="height: 100px; align-items:center" data-setbg="{{url('Rabeya/img/main_banner.png')}}">
        <h1 class="banner_write">Always Fresh and Delightful</h1>
    </section>
    <!-- Hero Section End -->

    <!-- Consultation Section Begin -->
    <hr size="8" color="black">
    <section class="ftco-section">
        <div class="container">
            <div class="row no-gutters ftco-services">
      <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services mb-md-0 mb-4">
          <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon-shipped"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Free Delivery</h3>
            <span>On order over 1000 TK</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services mb-md-0 mb-4">
          <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon-check"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Safe Delivery</h3>
            <span>Product well package</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services mb-md-0 mb-4">
          <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon-award"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Superior Quality</h3>
            <span>Quality Products</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services mb-md-0 mb-4">
          <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon-customer-service"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Support</h3>
            <span>24/7 Support</span>
          </div>
        </div>
      </div>
    </div>
        </div>
        <hr size="8" color="black">




        {{-- NOTICE --}}



        <!-------------------------------------------->



<section class="ftco-section ftco-cart">

    @if (session('success'))
    <div class="alert alert-success" id="alert">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{ session('success') }}
    </div>

    @endif
    <div class="container" >
        <div class="row"   >
        <div class="col-md-12 ftco-animate">
            <div class="cart-list"  style="overflow: auto; height:400px; width: 500px; float:left ">
                <table class="table ftco-animate" >
                    <thead class="thead-primary" >
                      <tr class="text-center">
                        {{-- <th>&nbsp;</th> --}}
                        <th>NOTICE</th>
                        {{-- <th>&nbsp;</th> --}}
                      </tr>
                    </thead>
                 
                      <tbody >
                        @foreach ($notice as $notice)
                            <tr class="text-center">
                                <td >
                                    <h3>
                                         {{ $notice->notice_head }}
                                    </h3>
                                     <div>
                                       <p>
                                        {{ $notice->notice }}
                                    </p>
                                     </div>
                                     <h6 style="text-align: right; font-size:10px; color:rgb(169, 169, 169)"> {{ $notice->notice_date}}</h6>

                                </td>
                              </tr>
                              @endforeach
                              <!-- END TR-->
                        </tbody>
                  </table>
              </div>


              <div class="cart-list"  style="overflow: auto; height:400px; width: 500px; float:right">
                <table class="table ftco-animate" >
                    <thead class="thead-primary" >
                      <tr class="text-center">
                        {{-- <th>&nbsp;</th> --}}
                        <th>OFFERS</th>
                        {{-- <th>&nbsp;</th> --}}
                      </tr>
                    </thead>
                    <tbody >
                        @foreach ($offer as $offer)
                            <tr class="text-center">
                                <td >
                                    <h3>
                                         {{ $offer->offer_head }}
                                    </h3>
                                     <div>
                                       <p>
                                        {{ $offer->offer }}
                                    </p>
                                     </div>
                                     <h6 style="text-align: right; font-size:10px; color:rgb(169, 169, 169)"> {{ $offer->offer_date}}</h6>

                                </td>
                              </tr>
                              @endforeach
                              <!-- END TR-->
                        </tbody>
                  </table>
              </div>

        </div>
    </div>



    </div>



</section>


 <hr size="8" color="black">




 <!-- SOME STUFF-->


 <section class="ftco-section ftco-category ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6 order-md-last align-items-stretch d-flex">
                        <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex set-bg"  data-setbg="{{url('Rabeya/img/shop.jpg')}}">
                            <div class="text text-center">
                                {{-- <h2>All Product</h2> --}}
                                <p>All Products</p>
                                <p><a href="#" class="btn btn-primary">Shop now</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end set-bg"  data-setbg="{{url('Rabeya/img/breakfast.jpg')}}">
                            <div class="text px-3 py-1">
                                <h2 class="mb-0"><a href="\medicinecategory">Breakfast</a></h2>
                            </div>
                        </div>
                        <div class="category-wrap ftco-animate img d-flex align-items-end set-bg"  data-setbg="{{url('Rabeya/img/lunch.jpg')}}">
                            <div class="text px-3 py-1 ">
                                <h2 class="mb-0"><a href="\medicinecategory">Lunch</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end set-bg"  data-setbg="{{url('Rabeya/img/drinks.jpg')}}">
                    <div class="text px-3 py-1">
                        <h2 class="mb-0"><a href="\medicinecategory">Drinks</a></h2>
                    </div>
                </div>
                <div class="category-wrap ftco-animate img d-flex align-items-end set-bg"  data-setbg="{{url('Rabeya/img/snackss.jpg')}}">
                    <div class="text px-3 py-1">
                        <h2 class="mb-0"><a href="\medicinecategory">Snacks</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <hr size="8" color="black">

    <section class="ftco-section">
        <div class="container">
                <div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
              <span class="subheading">Featured Products</span>
            <h2 class="mb-4">KHAN'S</h2>
          </div>
        </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="{{url('Rabeya/img/noodle.jpg')}}" alt="">
                            <span class="status">30%</span>
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">CHOOWMIN</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span class="mr-2 price-dc">80.00 TK</span><span class="price-sale">60.00 TK</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="{{url('Rabeya/img/burger.jpg')}}" alt="">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">CHICKEN BURGER</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span>30.00 TK</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="{{url('Rabeya/img/porota.jpg')}}" alt="">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">POROTA</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span>10.00 TK</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="{{url('Rabeya/img/patties.jpg')}}" alt="">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">PATTIES</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span>35.00 TK</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Featured Products</span>
                  <h2 class="mb-4">OLYMPIA</h2>
                </div>


                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="{{url('Rabeya/img/beefbiryani.jpg')}}" alt="">
                            <span class="status">30%</span>
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">BEEF BIRYANI</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span class="mr-2 price-dc">120.00 TK</span><span class="price-sale">80.00 TK</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="{{url('Rabeya/img/eggsandwich.jpg')}}" alt="">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">EGG SANDWICH</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span>120.00 TK</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="{{url('Rabeya/img/porota_roll.jpg')}}" alt="">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">POROTA ROLL</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span>120.00 TK</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="{{url('Rabeya/img/daal.jpg')}}" alt="">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">DAAL</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span>120.00 TK</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<hr size="20" color="black">
    <section class="ftco-section img set-bg" data-setbg="{{url ('Rabeya/med/images/bigpicture.jpg')}}">
    <div class="container">
            <div class="row justify-content-end">
      <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
          <span class="subheading" style="color: black;">Best Price For You</span>
        <h2 class="mb-4">Deal of the day</h2>
        {{-- <p>Scissors,Patches,Plusters,Safetypins,Bandages,Tweezers and all necessary prosucts!!</p> --}}
        <h3><a href="#" style="color: black;">Fresh Salad</a></h3>
        <span class="price">1500 TK <a href="#" style="color: black">now 70 TK only</a></span>
        <div id="timer" class="d-flex mt-5" >
                      <div class="time" style="color: rgb(0, 0, 0);" id="days"></div>
                      <div class="time pl-3" style="color: rgb(0, 0, 0);" id="hours"></div>
                      <div class="time pl-3" style="color: rgb(0, 0, 0);" id="minutes"></div>
                      <div class="time pl-3" style="color: rgb(0, 0, 0);" id="seconds"></div>
                    </div>
      </div>
    </div>
    </div>

</section>
<hr size="20" color="black">

</section>
</section>

 <!-- SOMESTUFF EMD-->




    <!-- Team Section Begin -->

    {{-- <section class="team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span>Partnersips</span>
                        <h2>Our Expert Doctors</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team__item">
                        <img src="{{url('Rabeya/img/hos1.png')}}" alt="">
                        <div class="team__item__social">
                            <a href="https://www.facebook.com/uhlbd/"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/uhlbd"><i class="fa fa-twitter"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team__item">
                        <img src="{{url('Rabeya/img/hos2.jpg')}}" alt="">
                        <div class="team__item__social">
                            <a href="https://www.facebook.com/LABAID/"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/labaidgroup"><i class="fa fa-twitter"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team__item">
                        <img src="{{url('Rabeya/img/hos3.png')}}" alt="">
                        <div class="team__item__social">
                            <a href="https://www.facebook.com/ibnsinatrustofficial/"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/ibnsinatrust"><i class="fa fa-twitter"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team__item">
                        <img src="{{url('Rabeya/img/hos4.png')}}" alt="">
                        <div class="team__item__social">
                            <a href="https://www.facebook.com/populardiagnostic/"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/pdclofficial"><i class="fa fa-twitter"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team__item">
                        <img src="{{url('Rabeya/img/hos5.png')}}" alt="">
                        <div class="team__item__social">
                            <a href="https://www.facebook.com/OncosMolbiolLimited"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/oncosmolbiol"><i class="fa fa-twitter"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team__item">
                        <img src="{{url('Rabeya/img/hos6.png')}}" alt="">
                        <div class="team__item__social">
                            <a href="https://www.facebook.com/dhakaimperial.hospital/"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}
    <!-- Team Section End -->

<div class="ftco-footer ftco-section">
    <div class="container">
        <div class="row">
            <div class="mouse">
                      <a href="#" class="mouse-icon">
                          <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                      </a>
              </div>
        </div>

    </div>
</div>



    <!-- Gallery Begin -->
    <hr size="8" color="black">
     <div class="gallery">
        <div class="gallery__container">
            <div class="grid-sizer"></div>
            <div class="gc__item set-bg" data-setbg="{{ url('Rabeya/img/sandwich.jpg')}}">
                {{-- <a href="{{ url('frontend/img/hos4.png')}}" class="image-popup"><i class="fa fa-search-plus"></i></a> --}}
            </div>
            <div class="gc__item set-bg" data-setbg="{{ url('Rabeya/img/snacks.jpg')}}">
            </div>
            <div class="gc__item set-bg" data-setbg="{{ url('Rabeya/img/porota.jpg')}}">
            </div>
            <div class="gc__item gc__item__large set-bg" data-setbg="{{ url('Rabeya/img/food.jpg')}}">
            </div>
            <div class="gc__item set-bg" data-setbg="{{ url('Rabeya/img/lunch.jpg')}}">
            </div>
            <div class="gc__item set-bg" data-setbg="{{ url('Rabeya/img/breakfast1.jpg')}}">
            </div>
            <div class="gc__item set-bg" data-setbg="{{ url('Rabeya/img/noodle.jpg')}}">
            </div>
        </div>
    </div>
    <hr size="8" color="black">
    <!-- Gallery End -->

@endsection

@section('scripts')
<script type="text/javascript">
 $("document").ready(function()
 {
 setTimeout(function()
 {
   $("div.alert").remove();
 }, 2000);
 });
  </script>
@endsection
