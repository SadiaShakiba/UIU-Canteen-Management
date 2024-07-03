<?php $__env->startSection('main-container'); ?>


 <!-- Hero Section Begin -->
 <section class="hero spad set-bg ftco-animate" style="height: 20px" data-setbg="<?php echo e(url('Rabeya/img/wish_banner.png')); ?>">

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
                        
                        
                      </tr>
                    </thead>
                    <tbody>
                        <?php $total = 0 ?>
                        <?php $delivery = 5 ?>

                        <?php if(session('wishlist')): ?>
                        <?php $__currentLoopData = session('wishlist'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $total += $details['product_price'] * $details['quantity'] ?>

                      <tr class="text-center">
                        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>

                        <td class="image-prod"><div class="img"><img src="<?php echo e(asset('images')); ?>/<?php echo e($details['product_image']); ?>" alt=""></div></td>

                        <td class="product-name">
                            <h3><?php echo e($details['product_name']); ?></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel officia ab placeat. Iure eaque voluptate commodi culpa deleniti necessitatibus ab iste ea quidem itaque eos numquam soluta, repudiandae, cupiditate laborum.</p>
                        </td>

                        <td class="price"><?php echo e($details['product_price']); ?></td>

                        

                        
                      </tr><!-- END TR-->



                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>

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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Rabeya.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UIUCanteen\resources\views/Rabeya/wishlist.blade.php ENDPATH**/ ?>