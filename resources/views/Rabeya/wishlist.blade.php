@extends('Rabeya.layouts.main')
@section('main-container')


 <!-- Hero Section Begin -->
 <section class="hero spad set-bg ftco-animate" style="height: 20px" data-setbg="{{url('Rabeya/img/wish_banner.png')}}">

    <h1 class="banner_write">Wishlist</h1>
 </section>
 <!-- Hero Section End -->

 <hr size="8" color="black">






 <!-- WOshlist table-->



 <section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
        <div class="col-md-12 ftco-animate">
            <div class="cart-list">
                <table class="table ftco-animate">
                    <thead class="thead-primary">
                      <tr class="text-center">
                        <th>&nbsp;</th>
                        <th>Product List</th>
                        <th>&nbsp;</th>
                        <th>Price</th>
                        {{-- <th>Quantity</th> --}}
                        {{-- <th>Total</th> --}}
                      </tr>
                    </thead>
                    <tbody>
                        @php $total = 0 @endphp
                        @php $delivery = 5 @endphp

                        @if (session('wishlist'))
                        @foreach (session('wishlist') as $id => $details)
                        @php $total += $details['product_price'] * $details['quantity'] @endphp

                      <tr class="text-center">
                        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>

                        <td class="image-prod"><div class="img"><img src="{{ asset('images') }}/{{ $details['product_image'] }}" alt=""></div></td>

                        <td class="product-name">
                            <h3>{{ $details['product_name'] }}</h3>
                            {{-- <p>{{ $details['status']}} </p> --}}

                        <td class="price">{{ $details['product_price'] }}</td>

                        {{-- <td class="quantity">
                            <div class="input-group mb-3">
                             <input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
                          </div>
                      </td> --}}

                        {{-- <td class="total">BDT45.00</td> --}}
                      </tr><!-- END TR-->



                                @endforeach
                                @endif

                    </tbody>
                  </table>
              </div>
        </div>
    </div>
    </div>
</section>



<!--Wishlist END-->


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

  <hr size="8" color="black">

@endsection
