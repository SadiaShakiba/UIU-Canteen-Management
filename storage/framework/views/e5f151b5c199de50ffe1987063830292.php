<?php $__env->startSection('main-container'); ?>



 <!-- Hero Section Begin -->
 <section class="hero spad set-bg ftco-animate" style="height: 20px; align-items:center" data-setbg="<?php echo e(url('Rabeya/img/purchase.png')); ?>">

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
                      <?php $total = 0 ?>
                      <?php $delivery = 5 ?>

                      <?php if(session('cart')): ?>
                      <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php $total += $details['product_price'] * $details['quantity'] ?>


                     <td data-th="Product">
                      <tr data-id="<?php echo e($id); ?>" class="text-center">
                        <td class="actions" data-th=""><i class="ion-ios-close cart_remove"></i></td>

                        <td class="image-prod"><img src="<?php echo e(asset('images')); ?>/<?php echo e($details['product_image']); ?>" width="100" height="100" class="img-responsive"/></div></td>

                        <td class="product-name">
                            <h3><?php echo e($details['product_name']); ?></h3>
                        </td>

                        <td class="price">Tk <?php echo e($details['product_price']); ?></td>

                        <td data-th="Quantity">
                            <div class="input-group mb-3">
                             <input type="number" name="quantity" class="quantity form-control input-number cart_update" value="<?php echo e($details['quantity']); ?>"min="1" max="100">
                          </div>
                      </td>

                        <td class="total"><?php echo e($details['product_price'] * $details['quantity']); ?></td>
                      </tr><!-- END TR-->
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php endif; ?>
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
                    <span>TK <?php echo e($total); ?></span>
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
                    <span>Tk <?php echo e($delivery = $total + $delivery); ?></span>
                </p>
            </div>
            <p><a href="/checkout" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
        </div>
    </div>
    </div>

</section>



<hr size="8" color="black">




<?php $__env->stopSection(); ?>





<?php echo $__env->make('Rabeya.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UIUCanteen\resources\views/Rabeya/cart.blade.php ENDPATH**/ ?>