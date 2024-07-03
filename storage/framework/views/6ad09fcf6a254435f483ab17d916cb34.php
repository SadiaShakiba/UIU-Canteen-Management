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
                                <div class="p-2"><img src="<?php echo e(url('assets/plugins/images/users/ritesh.jpg')); ?>" alt="user" width="50" class="rounded-circle"></div>
                                <div class="comment-text ps-2 ps-md-3 w-100">
                                    <h5 class="font-medium">Abrar Bhuiyan 01123929</h5>
                                    <span class="mb-3 d-block">My order is being declined </span>
                                    <div class="comment-footer d-md-flex align-items-center">
                                         <span class="badge bg-primary rounded">Pending</span>

                                        <div class="text-muted fs-2 ms-auto mt-2 mt-md-0">Jan 14, 2023</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Comment Row -->
                            <div class="d-flex flex-row comment-row p-3">
                                <div class="p-2"><img src="<?php echo e(url('assets/plugins/images/users/ritesh.jpg')); ?>" alt="user" width="50" class="rounded-circle"></div>
                                <div class="comment-text ps-2 ps-md-3 active w-100">
                                    <h5 class="font-medium">Rabeya Noor 011192129</h5>
                                    <span class="mb-3 d-block">The service from here is very convenient and i highly recommend everyone. </span>
                                    <div class="comment-footer d-md-flex align-items-center">

                                        <span class="badge bg-success rounded">Approved</span>

                                        <div class="text-muted fs-2 ms-auto mt-2 mt-md-0">Feb 17, 2023</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Comment Row -->
                            <div class="d-flex flex-row comment-row p-3">
                                <div class="p-2"><img src="<?php echo e(url('assets/plugins/images/users/ritesh.jpg')); ?>" alt="user" width="50" class="rounded-circle"></div>
                                <div class="comment-text ps-2 ps-md-3 w-100">
                                    <h5 class="font-medium">Sanjida Islam 011193232</h5>
                                    <span class="mb-3 d-block">The quality of food is not very good.</span>
                                    <div class="comment-footer d-md-flex align-items-center">

                                        <span class="badge rounded bg-danger">Rejected</span>

                                        <div class="text-muted fs-2 ms-auto mt-2 mt-md-0">Dec  11, 2022</div>
                                    </div>
                                </div>
                            </div>
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
                                    <div class="call-chat">
                                        <button class="btn btn-success text-white btn-circle btn" type="button">
                                            <i class="fas fa-phone"></i>
                                        </button>
                                        <button class="btn btn-info btn-circle btn" type="button">
                                            <i class="far fa-comments text-white"></i>
                                        </button>
                                    </div>
                                    <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                            src="plugins/images/users/varun.jpg" alt="user-img" class="img-circle">
                                        <div class="ms-2">
                                            <span class="text-dark">Nafiza Akter 011293123<small
                                                    class="d-block text-success d-block">online</small></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="call-chat">
                                        <button class="btn btn-success text-white btn-circle btn" type="button">
                                            <i class="fas fa-phone"></i>
                                        </button>
                                        <button class="btn btn-info btn-circle btn" type="button">
                                            <i class="far fa-comments text-white"></i>
                                        </button>
                                    </div>
                                    <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                            src="plugins/images/users/genu.jpg" alt="user-img" class="img-circle">
                                        <div class="ms-2">
                                            <span class="text-dark">Jennifer Islam 011293849<small class="d-block text-warning">Away</small></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="call-chat">
                                        <button class="btn btn-success text-white btn-circle btn" type="button">
                                            <i class="fas fa-phone"></i>
                                        </button>
                                        <button class="btn btn-info btn-circle btn" type="button">
                                            <i class="far fa-comments text-white"></i>
                                        </button>
                                    </div>
                                    <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                            src="plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle">
                                        <div class="ms-2">
                                            <span class="text-dark">Ashraf Khan 011193838<small class="d-block text-danger">Busy</small></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="call-chat">
                                        <button class="btn btn-success text-white btn-circle btn" type="button">
                                            <i class="fas fa-phone"></i>
                                        </button>
                                        <button class="btn btn-info btn-circle btn" type="button">
                                            <i class="far fa-comments text-white"></i>
                                        </button>
                                    </div>
                                    <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                            src="plugins/images/users/arijit.jpg" alt="user-img" class="img-circle">
                                        <div class="ms-2">
                                            <span class="text-dark">Rihan Ahmed 011103948<small class="d-block text-muted">Offline</small></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="call-chat">
                                        <button class="btn btn-success text-white btn-circle btn" type="button">
                                            <i class="fas fa-phone"></i>
                                        </button>
                                        <button class="btn btn-info btn-circle btn" type="button">
                                            <i class="far fa-comments text-white"></i>
                                        </button>
                                    </div>
                                    <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                            src="plugins/images/users/govinda.jpg" alt="user-img"
                                            class="img-circle">
                                        <div class="ms-2">
                                            <span class="text-dark">Anjum Ara 011183749 <small class="d-block text-success">online</small></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="call-chat">
                                        <button class="btn btn-success text-white btn-circle btn" type="button">
                                            <i class="fas fa-phone"></i>
                                        </button>
                                        <button class="btn btn-info btn-circle btn" type="button">
                                            <i class="far fa-comments text-white"></i>
                                        </button>
                                    </div>
                                    <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                            src="plugins/images/users/hritik.jpg" alt="user-img" class="img-circle">
                                        <div class="ms-2">
                                            <span class="text-dark">Kulsum kaisar 011193849<small class="d-block text-success">online</small></span>
                                        </div>
                                    </a>
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

<?php echo $__env->make('AdminPanel.layouts.admin_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UIUCanteen\resources\views/AdminPanel/dashboard.blade.php ENDPATH**/ ?>