<?php $__env->startSection('title'); ?>
    NOTIFICATIONS
<?php $__env->stopSection(); ?>




<?php $__env->startSection('content'); ?>
<section>
 <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> ORDER LIST</h4>

                <?php if(Session::get('delete_success')): ?>
                                <div class="alert alert-success">
                                        <?php echo e(Session::get('delete_success')); ?>

                                </div>
                <?php endif; ?>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="datatable" class="table">
                    <thead class=" text-primary">
                      <th>Customer</th>
                      <th>Email</th>
                      <th>Phone number </th>
                      <th>Order</th>
                      <th>Total Price</th>
                      <th>Status</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </thead>
                    <tbody>
                      
                      <tr>
                        <td>
                         Name
                        </td>
                        <td>
                           emal
                        </td>
                        <td>
                          phone
                        </td>
                        <td>
                          Order
                        </td>
                        <td>
                             Total Price
                           </td>
                        <td>
                             pending
                           </td>
                        <td>
                         <a href="/role-edit/" class="btn btn-success">Accept</a>
                        </td>
                        <td>
                        <form action="/user-delete/" method="post">
                          <?php echo csrf_field(); ?>
                          <?php echo e(method_field('DELETE')); ?>

                         <button type="submit" class="btn btn-danger">Decline</button>
                         </form>
                        </td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
 </div>
</section>

 <section>
 <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Client Message</h4>

          <?php if(Session::get('delete_success')): ?>
                          <div class="alert alert-success">
                                  <?php echo e(Session::get('delete_success')); ?>

                          </div>
          <?php endif; ?>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="datatable" class="table">
              <thead class=" text-primary">
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Student Message</th>
                <th>Date</th>
                <th>Status</th>
                <th>Reply</th>
                <th>Decline</th>
              </thead>
              <tbody>
                <?php $__currentLoopData = $contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td>
                   <?php echo e($contact->student_id); ?>

                  </td>
                  <td>
                    <?php echo e($contact->student_name); ?>

                  </td>
                  <td>
                   <?php echo e($contact->subject); ?>

                  </td>
                  <td>
                    <?php echo e($contact->date); ?>

                   </td>
                  <td>
                    <?php echo e($contact->status); ?>


                  </td>



                  <td>
                   <a href="//" class="btn btn-success">Reply</a>
                  </td>
                  <td>
                  <form action="/user-delete/" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo e(method_field('DELETE')); ?>

                   <button type="submit" class="btn btn-danger">Decline</button>
                   </form>
                  </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
</section>


<?php $__env->stopSection(); ?>

























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

<?php echo $__env->make('AdminPanel.layouts.admin_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UIUCanteenSadia\resources\views/AdminPanel/notification.blade.php ENDPATH**/ ?>