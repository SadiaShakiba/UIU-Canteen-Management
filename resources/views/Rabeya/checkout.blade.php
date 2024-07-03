@extends('Rabeya.layouts.main')
@section('main-container')

 <!-- Hero Section Begin -->
 <section class="hero spad set-bg ftco-animate" style="height: 20px; align-items:center" data-setbg="{{url('Rabeya/img/purchase.png')}}">

    <h1 class="banner_write">Purchase</h1>
 </section>
 <!-- Hero Section End -->


<hr size="8" color="black">



<section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-12 ftco-animate">
          <form  action="{{url('/')}}/insertorder" method="post" enctype="multipart/form-data" class="billing-form">
            @csrf
                          <h3 class="mb-4 billing-heading">Billing Details</h3>

                <div class="row align-items-end">
                 <div class="col-md-12">
                   <div class="form-group">
                      <label for="firstname">Name</label>
                    <input type="text" name="customer_name" class="form-control" placeholder="" required>
                   </div>
                 </div>
{{-- 
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="lastname">Last Name</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
              </div> --}}

              <div class="col-md-12">
                <div class="form-group">
                    <label for="studentid">Student ID</label>
                  <input type="text" name="sid" class="form-control" placeholder="" required>
                </div>
            </div>


              <div class="w-100"></div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="country">Area</label>
                          <div class="select-wrap">
                        <div class="icon"></div>
                        <select name="" id="" class="form-control" >
                         <option value="">1st floor</option>
                          <option value="">2nd floor</option>
                          <option value="">3rd floor</option>
                          <option value="">4th floor</option>

                        </select>
                      </div>
                      </div>
                  </div>
                  {{-- <div class="w-100"></div>
                  <div class="col-md-6">
                      <div class="form-group">
                      <label for="streetaddress">Street Address</label>
                    <input type="text" class="form-control" placeholder="House number and street name">
                  </div>
                  </div> --}}
                
                  <div class="col-md-12">
                      <div class="form-group">
                        <label for="phone">More details</label>
                    <input type="text" name="details" class="form-control" placeholder="Roomno, lab, unit etc: (optional)">
                  </div>
                  </div>
                  {{-- <div class="w-100"></div>
                  <div class="col-md-6">
                      <div class="form-group">
                      <label for="towncity">City</label>
                    <input type="text" class="form-control" placeholder="" value="Dhaka">
                  </div>
                  </div> --}}
                  {{-- <div class="col-md-6">
                      <div class="form-group">
                          <label for="postcodezip">Postcode / ZIP *</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                  </div> --}}
                  <div class="w-100"></div>
                  <div class="col-md-6">
                  <div class="form-group">
                      <label for="phone">Phone</label>
                    <input type="text" name="number" class="form-control" placeholder="" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="emailaddress">Email Address</label>
                    <input type="text" class="form-control" placeholder="Optional">
                  </div>
              </div>
              {{-- <div class="w-500"></div> --}}
              {{-- <div class="col-md-12">
                  <div class="form-group mt-4">
                                    <div class="radio">
                                        <label class="mr-3"><input type="radio" name="optradio"> check 1 </label>
                                        <label><input type="radio" name="optradio"> check 2</label>
                                      </div>
                                  </div>
              </div>
              </div> --}}
            {{-- </form><!-- END --> --}}
                  {{-- </div> --}}
                  <hr>
                  <div class="col-xl-12">
            <div class="row mt-5 pt-3">
                <div class="col-md-12 d-flex mb-5">
                    <div class="cart-detail cart-total p-3 p-md-4">
                        <h3 class="billing-heading mb-4">Order details</h3>
                        <table style="font-family: arial, sans-serif;
                        border-collapse: collapse;
                        width: 100%;">
                          <tr>
                            <th>Product</th>
                            {{-- <th>Category</th> --}}
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                          </tr>
                          <tr>
                            <tbody>
                              @php $total = 0 @endphp
                              @php $delivery = 5 @endphp
                
                              @if (session('cart'))
                              @foreach (session('cart') as $id => $details )
                              @php $total += $details['product_price'] * $details['quantity'] @endphp
                  
                            
                             <td data-th="Product">
                              <tr data-id="{{ $id }}" class="text-left">

        
                                <td class="product-name">
                                    <h3 name="product_name">{{ $details['product_name'] }}</h3>
                                   
                                </td>
                                {{-- <td class="product-name">
                                
                                  <h6>{{ $details['category'] }}</h6>
                                
                                </td> --}}
        
                                <td class="price">Tk {{ $details['product_price'] }}</td>
        
                                <td data-th="Quantity">
                                     <input type="number" name="quantity" class=" cart_update" value="{{ $details['quantity'] }}"min="1" max="6">
                              </td>
        
                                <td class="total">{{ $details['product_price'] * $details['quantity'] }}</td>
                              </tr><!-- END TR-->
                              @endforeach
                              @endif
                            </tbody>
                          </tr>
                      
                        </table>
                        <hr>
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
                          <span name="price">Tk {{  $delivery = $total + $delivery }}</span>
                      </p>
                              </div>
                </div>
                
        
                <div class="col-md-12">
                    <div class="cart-detail p-3 p-md-4">
                        <h3 class="billing-heading mb-4">Payment Method</h3>
                                  <div class="form-group">
                                      <div class="col-md-12">
                                          <div class="radio">
                                             <label><input type="radio" name="optradio" class="mr-2" required> BKash</label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="col-md-12">
                                          <div class="radio">
                                             <label><input type="radio" name="optradio" class="mr-2"> Nogod </label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="col-md-12">
                                          <div class="radio">
                                             <label><input type="radio" name="optradio" class="mr-2"> Rocket</label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="radio">
                                           <label><input type="radio" name="optradio" class="mr-2"> Cash</label>
                                        </div>
                                    </div>
                                </div>
                                  <div class="form-group">
                                      <div class="col-md-12">
                                          <div class="checkbox">
                                             <label><input type="checkbox" value="" class="mr-2" required> I have read and accept the terms and conditions</label>
                                          </div>
                                      </div>
                                  </div>
                                  <p><button class="btn btn-primary py-3 px-4"  type="submit">Place an order</button></p>
                                  {{-- <p><a href="#"class="btn btn-primary py-3 px-4">Place an order</a></p> --}}
                              </div>
                </div>
            </div>
    
          </form>
                  
        </div> <!-- .col-md-8 -->
      </div>
    </div>
  </section>



  @endsection
