<?php $__env->startSection('main-container'); ?>


 <!-- Hero Section Begin -->
 <section class="hero spad set-bg ftco-animate" style="height: 20px; align-items:center" data-setbg="<?php echo e(url('Rabeya/img/wish_banner.png')); ?>">

    <h1 class="banner_write">KHAN'S KITCHEN</h1>
 </section>s
 <!-- Hero Section End -->

 <hr size="8" color="black">


 <section class="ftco-section">
      <div class="container">
          <div class="row justify-content-center">

              <div class="col-md-10 mb-5 text-center">
                  <ul class="product-category">
                      <li><a href="#" class="active">All</a></li>
                      <li><a href="/khansbrk">BREAKFAST</a></li>
                      <li><a href="/khanslunch">LUNCH</a></li>
                      <li><a href="/khansdrinks">DRINKS</a></li>
                      <li><a href="/khanssnacks">SNACKS</a></li>
                  </ul>
              </div>
          </div>

          <?php if(session('success')): ?>
          <div class="alert alert-success" id="alert">
              <button type="button" class="close" data-dismiss="alert">x</button>
              <?php echo e(session('success')); ?>

          </div>

          <?php endif; ?>

          <section>

            <div class="containerpage">

                <div class="row">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($products->canteen_name == 'Khan\'s'): ?>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">


                            <a href="<?php echo e(route('product_details' , $products->product_id)); ?>" class="img-prod"><img class="img-fluid" src="images/<?php echo e($products->product_image); ?>" width="350px" height="150px" alt="">
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="#"><?php echo e($products->product_name); ?></a></h3>
                                <h6><a href="#"><?php echo e($products->category); ?></a></h6>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span><?php echo e($products->product_price); ?>TK</span></p>
                                    </div>
                                </div>
                                <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">
                                        <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                            <span><i class="ion-ios-menu"></i></span>
                                        </a>
                                        <a href="<?php echo e(route('add_to_cart', $products->product_id)); ?>" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                            <span><i class="ion-ios-cart"></i></span>
                                        </a>
                                        <a href="<?php echo e(route('add_to_wishlist', $products->product_id)); ?>" class="heart d-flex justify-content-center align-items-center ">
                                            <span><i class="ion-ios-heart"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

            </div>

            </section>

  </section>












<hr size="8" color="black">













<?php $__env->stopSection(); ?>









<?php echo $__env->make('Rabeya.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UIUCanteen\resources\views/Rabeya/khans.blade.php ENDPATH**/ ?>