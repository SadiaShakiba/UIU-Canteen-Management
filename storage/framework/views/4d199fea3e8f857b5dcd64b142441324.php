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
                      <li><a href="/khanskitchen1" >All</a></li>
                      <li><a href="/khansbrk1" >BREAKFAST</a></li>
                      <li><a href="/khanslunch1" >LUNCH</a></li>
                      <li><a href="/khansdrinks1" class="active">DRINKS</a></li>
                      <li><a href="/khanssnacks1">SNACKS</a></li>
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
                    <?php if($products->canteen_name == 'Khan\'s' && $products->category == 'Drink'): ?>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">


                            <a href="<?php echo e(route('product_details' , $products->product_id)); ?>" class="img-prod"  data-toggle="modal" data-target=".bd-example-modal-sm"><img class="img-fluid" src="images/<?php echo e($products->product_image); ?>" width="350px" height="150px" alt="">
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


    <!--SIGN IN  modal-->


    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog modal-dialog-centered">
            <div class="modal-content" style="text-align: center; ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle" >SIGN IN </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                </div>


                <?php if(Session::get('LogInFailed')): ?>
                <div class="alert alert-danger">
                        <?php echo e(Session::get('LogInFailed')); ?>

                </div>
        <?php endif; ?>
                <form action="LogInFunc" method="POST" >
                    <?php echo csrf_field(); ?>
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
                <?php if(Session::get('success')): ?>
                <div class="alert alert-success">
                        <?php echo e(Session::get('success')); ?>

                </div>
        <?php endif; ?>

        <?php if(Session::get('failure')): ?>
                <div class="alert alert-danger">
                        <?php echo e(Session::get('failure')); ?>

                </div>
        <?php endif; ?>
                <form action="SignUpFunc" method="POST">
                    <?php echo csrf_field(); ?>
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



    
            </section>

  </section>












<hr size="8" color="black">













<?php $__env->stopSection(); ?>

<?php echo $__env->make('Rabeya.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UIUCanteenSadia\resources\views/Rabeya/khansdrinks1.blade.php ENDPATH**/ ?>