@extends('Rabeya.layouts.main')
@section('main-container')



 <!-- Hero Section Begin -->
 <section class="hero spad set-bg ftco-animate" style="height: 20px; align-items:center" data-setbg="{{url('Rabeya/img/purchase.png')}}">

    <h1 class="banner_write">Purchase</h1>
 </section>
 <!-- Hero Section End -->


<hr size="8" color="black">


<section class="ftco-section ftco-cart">
    <div class="container   ftco-section ftco-cart">
        <div class="row">

        <div class="col-md-12 ftco-animate">
            <div class="cart-list">

                <table class="table">
                    <thead class="thead-primary">
                      <tr class="text-center">
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>Product name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $total = 0 @endphp
                      @php $delivery = 5 @endphp

                      @if (session('cart'))
                      @foreach (session('cart') as $id => $details)
                      @php $total += $details['product_price'] * $details['quantity'] @endphp


                     <td data-th="Product">
                      <tr data-id="{{ $id }}" class="text-center">
                        <td class="actions" data-th=""><i class="ion-ios-close cart_remove"></i></td>

                        <td class="image-prod"><img src="{{ asset('images') }}/{{ $details['product_image'] }}" width="100" height="100" class="img-responsive"/></div></td>

                        <td class="product-name">
                            <h3>{{ $details['product_name'] }}</h3>
                        </td>

                        <td class="price">Tk {{ $details['product_price'] }}</td>

                        <td data-th="Quantity">
                            <div class="input-group mb-3">
                             <input type="number" name="quantity" class="quantity form-control input-number cart_update" value="{{ $details['quantity'] }}"min="1" max="100">
                          </div>
                      </td>

                        <td class="total">{{ $details['product_price'] * $details['quantity'] }}</td>
                      </tr><!-- END TR-->
                      @endforeach
                      @endif
                    </tbody>
                  </table>
              </div>
        </div>
    </div>

    <hr size="8" color="black">


    <div class="row justify-content-end">
        <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
            <div class="cart-total mb-3">
                <h3>Coupon Code</h3>
                <p>Enter your coupon code if you have one</p>
                  <form action="#" class="info">
          <div class="form-group">
              <label for="">Coupon code</label>
            <input type="text" class="form-control text-left px-3" placeholder="">
          </div>
        </form>
            </div>
            <p><a href="/checkout" class="btn btn-primary py-3 px-4">Apply Coupon</a></p>
        </div>




        <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
            <div class="vl"></div>
        </div>



        <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
            <div class="cart-total mb-3">
                <h3>Cart Totals</h3>
                <p class="d-flex">
                    <span>Subtotal</span>
                    <span>TK {{ $total }}</span>
                </p>
                <p class="d-flex">
                    <span>Delivery</span>
                    <span>Tk 5 </span>
                </p>
                <p class="d-flex">
                    <span>Discount</span>
                    <span>Tk 0</span>
                </p>
                <hr>
                <p class="d-flex total-price">
                    <span>Total</span>
                    <span>Tk {{  $delivery = $total + $delivery }}</span>
                </p>
            </div>
            <p><a href="/checkout" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
        </div>
    </div>
    </div>

</section>
{{--
<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
<div class="container py-4">
<div class="row d-flex justify-content-center py-5">
  <div class="col-md-6">
      <h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
      <span>Get e-mail updates about our latest shops and special offers</span>
  </div>
  <div class="col-md-6 d-flex align-items-center">
    <form action="#" class="subscribe-form">
      <div class="form-group d-flex">
        <input type="text" class="form-control" placeholder="Enter email address">
        <input type="submit" value="Subscribe" class="submit px-3">
      </div>
    </form>
  </div>
</div>
</div>
</section> --}}


<hr size="8" color="black">




@endsection




