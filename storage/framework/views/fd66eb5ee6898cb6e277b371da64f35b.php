<?php $__env->startSection('title'); ?>
    Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
 <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Records</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="datatable" class="table">
                    <thead class=" text-primary">
                      <th>Total Users</th>
                      <th>Total Sales</th>
                      <th>Stock Updates</th>
                      <th>Total Products</th>
                      <th>A Button</th>

                    </thead>
                    <tbody>

                      <tr>

                        <td>
                             4039


                        </td>

                        <td>
                           applicatopns from application tble
                        </td>
                        <td>
                          Webdite active
                        </td>
                        <td>
                              total number of producs
                           </td>
                        <td>
                        <form action="/user-delete/" method="post">
                          <?php echo csrf_field(); ?>
                          <?php echo e(method_field('DELETE')); ?>

                         <button type="submit" class="btn" style="background-color: #f96332">Button</button>
                         </form>
                        </td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>




          <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Three charts -->
            <!-- ============================================================== -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-12">
                    <div class="white-box analytics-info">
                        <h3 class="box-title">Total Purchase</h3>
                        <ul class="list-inline two-part d-flex align-items-center mb-0">
                            <li>
                                <div id="sparklinedash"><canvas width="67" height="30"
                                        style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                </div>
                            </li>
                            <li class="ms-auto"><span class="counter text-success">659</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="white-box analytics-info">
                        <h3 class="box-title">Total Order </h3>
                        <ul class="list-inline two-part d-flex align-items-center mb-0">
                            <li>
                                <div id="sparklinedash2"><canvas width="67" height="30"
                                        style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                </div>
                            </li>
                            <li class="ms-auto"><span class="counter text-purple">869</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="white-box analytics-info">
                        <h3 class="box-title">Total Coupons</h3>
                        <ul class="list-inline two-part d-flex align-items-center mb-0">
                            <li>
                                <div id="sparklinedash3"><canvas width="67" height="30"
                                        style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                </div>
                            </li>
                            <li class="ms-auto"><span class="counter text-info">911</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- PRODUCTS YEARLY SALES -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- RECENT SALES -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="white-box">
                        <div class="d-md-flex mb-3">
                            <h3 class="box-title mb-0">Recent sales</h3>
                            <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                                <select class="form-select shadow-none row border-top">
                                    <option>March 2021</option>
                                    <option>April 2021</option>
                                    <option>May 2021</option>
                                    <option>June 2021</option>
                                    <option>July 2021</option>
                                </select>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table no-wrap">
                                <thead>

                                        <th class="border-top-0">Canteen</th>
                                        <th class="border-top-0">Name</th>
                                        <th class="border-top-0">Status</th>
                                        <th class="border-top-0">Price</th>

                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>



                                        <td><?php echo e($product->canteen_name); ?></td>
                                        <td class="txt-oflo"><?php echo e($product->product_name); ?></td>
                                        <td class="txt-oflo">SOLD</td>
                                        <td><span class="text-success"><?php echo e($product->product_price); ?>TK</span></td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Recent Comments -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- .col -->
                <div class="col-md-12 col-lg-8 col-sm-12">
                    <div class="card white-box p-0">
                        <div class="card-body">
                            <h3 class="box-title mb-0">Customer's Message</h3>
                        </div>
                        <div class="comment-widgets">
                            <!-- Comment Row -->



                            <div class="d-flex flex-row comment-row p-3 mt-0">
                                
                                <div class="comment-text ps-2 ps-md-3 w-100">
                                    <?php $__currentLoopData = $contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <table>
                                        <tbody>
                                            <tr>
                                        <h5 class="font-medium"><?php echo e($contact->student_name); ?>  <?php echo e($contact->student_id); ?></h5>
                                    <h6><?php echo e($contact->subject); ?></h6>
                                <span class="mb-3 d-block"><?php echo e($contact->message); ?> </span>
                                 <div class="comment-footer d-md-flex align-items-center">
                                             <span class="btn badge bg-primary rounded"><a href="/notification" style="color: white">Pending</a></span>
                                             

                                            <div class="text-muted fs-2 ms-auto mt-2 mt-md-0"><?php echo e($contact->date); ?></div>
                                        </div>
                                    </tr>
<hr>
                                    </tbody>
                                    </table>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                            <br>
                            <br>

                            <!-- Comment Row -->

                            <!-- Comment Row -->

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="card white-box p-0">
                        <div class="card-heading">
                            <h3 class="box-title mb-0">Chat Listing</h3>
                        </div>
                        <div class="card-body">
                            <ul class="chatonline">
                                <li>
                                    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                    <div class="call-chat">
                                        <button class="btn btn-success text-white btn-circle btn" type="button">
                                            <i class="fas fa-phone"></i>
                                        </button>
                                        <button class="btn btn-info btn-circle btn" type="button">
                                            <i class="far fa-comments text-white"></i>
                                        </button>
                                    </div>
                                    <a href="javascript:void(0)" class="d-flex align-items-center">
                                        
                                        <div class="ms-2">
                                            <span class="text-dark"><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?> <?php echo e($user->student_id); ?><small
                                                    class="d-block text-success d-block">online</small></span>
                                                    <hr>
                                                </div>


                                    </a>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
        </div>

    <?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->startSection('scripts'); ?>
 <script>
  $(document).ready( function () {
    $('#datatable').DataTable({
      stateSave: true,
    });
    } );
 </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
  $(document).ready(function()
  {
  setTimeout(function()
  {
    $("div.alert").remove();
  }, 5000);
  });
  </script>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('AdminPanel.layouts.admin_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UIUCanteenSadia\resources\views/AdminPanel/dashboard.blade.php ENDPATH**/ ?>