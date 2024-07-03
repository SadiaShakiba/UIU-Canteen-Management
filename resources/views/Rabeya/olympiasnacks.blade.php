@extends('Rabeya.layouts.main')
@section('main-container')

 <!-- Hero Section Begin -->
 <section class="hero spad set-bg ftco-animate" style="height: 20px; align-items:center" data-setbg="{{url('Rabeya/img/wish_banner.png')}}">

    <h1 class="banner_write">OLYMPIA</h1>
 </section>
 <!-- Hero Section End -->

 <hr size="8" color="black">







 <section class="ftco-section">
      <div class="container">
          <div class="row justify-content-center">

              <div class="col-md-10 mb-5 text-center">
                  <ul class="product-category">
                      <li><a href="olympia" >All</a></li>
                      <li><a href="/olympiabrk" >BREAKFAST</a></li>
                      <li><a href="/olympialunch">LUNCH</a></li>
                      <li><a href="/olympiadrinks">DRINKS</a></li>
                      <li><a href="/olympiasnacks" class="active">SNACKS</a></li>
                  </ul>
              </div>
          </div>
          @if (session('success'))
          <div class="alert alert-success" id="alert">
              <button type="button" class="close" data-dismiss="alert">x</button>
              {{ session('success') }}
          </div>

          @endif
          <section>

            <div class="containerpage">

             <div class="row">
                @foreach ($products as $products)
                @if ($products->canteen_name == 'Olympia' && $products->category == 'Snacks')
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="{{ route('product_details' , $products->product_id) }}" class="img-prod">
                            <img class="img-fluid" src="images/{{$products->product_image}}" width="350px" height="150px" alt="">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">{{$products->product_name}}</a></h3>
                            <h6><a href="#">{{$products->category}}</a></h6>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span>{{$products->product_price}}TK</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="{{ route('add_to_cart', $products->product_id)}}" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="{{ route('add_to_wishlist', $products->product_id)}}" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>


            </div>

            </section>

  </section>





<hr size="8" color="black">













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






