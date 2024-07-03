@extends('Rabeya.layouts.main1')
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
                      <li><a href="olympia1" >All</a></li>
                      <li><a href="/olympiabrk1" >BREAKFAST</a></li>
                      <li><a href="/olympialunch1" class="active">LUNCH</a></li>
                      <li><a href="/olympiadrinks1">DRINKS</a></li>
                      <li><a href="/olympiasnacks1">SNACKS</a></li>
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
                @if ($products->canteen_name == 'Olympia' && $products->category == 'Lunch')
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="{{ route('product_details' , $products->product_id) }}" class="img-prod"  data-toggle="modal" data-target=".bd-example-modal-sm">
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
                                    <a href="#" data-toggle="modal" data-target=".bd-example-modal-sm" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="{{ route('add_to_cart', $products->product_id)}}" data-toggle="modal" data-target=".bd-example-modal-sm" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="{{ route('add_to_wishlist', $products->product_id)}}" data-toggle="modal" data-target=".bd-example-modal-sm" class="heart d-flex justify-content-center align-items-center ">
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

            

    <!--SIGN IN  modal-->


    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog modal-dialog-centered">
            <div class="modal-content" style="text-align: center; ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle" >SIGN IN </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                </div>


                @if(Session::get('LogInFailed'))
                <div class="alert alert-danger">
                        {{ Session::get('LogInFailed')}}
                </div>
        @endif
                <form action="LogInFunc" method="POST" >
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputID" class="form-label">Student ID: </label>
                        <input type="student_id" name="student_id"  required>
                    </div>
                    <div class="mb-3">

                    <label for="exampleInputPassword1" class="form-label">Password: </label>
                    <input type="password"   name="password"  required></div>
                    <button type="submit" name="submit" class="btn btn-primary" style="color: white" >LOG IN </button><br>
                    <a href="#">Forgot Password?</a>
                    <hr>
                    <div>
                        <a href="#"   data-toggle="modal" data-target="#exampleModal" data-dismiss="modal" aria-label="Close">Sign UP</a> if you dont have an account
                    </div>
                </form>
                <hr>
            </div>
        </div>
        </div>






        {{-- SIGNUP MODAL --}}


      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">SIGN UP</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>


            <div class="modal-body"  >
                @if(Session::get('success'))
                <div class="alert alert-success">
                        {{ Session::get('success')}}
                </div>
        @endif

        @if(Session::get('failure'))
                <div class="alert alert-danger">
                        {{ Session::get('failure')}}
                </div>
        @endif
                <form action="SignUpFunc" method="POST">
                    @csrf
                                First Name <input type="text" name="firstname" id="firstname" required> <br>
                                Last Name <input type="text" name="lastname" id="lastname" required> <br>
                                 Student ID <input type="text"  name="student_id" id="student_id" required><br>
                                 Student Email <input type="email"  name="email" id="email" required><br>
                                Password <input type="password"   name="password" required><br>
                                Confirm Password<input type="password"   name="confirmpassword" id="confirmpassword" required><br>
                                <button  type="submit" name="submit"   class="btn btn-primary">Sign UP</button>

                            </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Sign UP</button>
            </div>
          </div>
        </div>
      </div>



    {{-- SIGNUP ENDS  --}}

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






