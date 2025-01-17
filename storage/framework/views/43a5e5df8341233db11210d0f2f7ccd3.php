<?php $__env->startSection('title'); ?>
    NOTICE
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="row">

    <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> NOTICE BOX</h4>

    <form action="<?php echo e(url('/')); ?>/post_notice" method="post"  enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="col-md-12">
          <input  class="form-label" type="radio" id="html" name="option" value="Khan's" required>
          <label for="html">Khan's Kitchen</label><br>
          <input class="form-label"   type="radio" id="css" name="option" value="Olympia" required>
          <label for="css">Olympia</label><br>
        </div>
        <label for="notice_header">NOTICE FOR</label><br>
        <input type="text"  class="form-control" name="notice_head" id="notice_head"><br>
        <br>

        <textarea name="notice" id="notice"   class="form-control form-label" cols="123" rows="10"></textarea><br>
        <button class="btn btn-success" type="submit">POST</button>

    </form>

          </div>
        </div>
    </div>


    


    <?php if(Session::get('delete_success')): ?>
    <div class="alert alert-success">
            <?php echo e(Session::get('delete_success')); ?>

    </div>
<?php endif; ?>
    <div class="card-body">
        <div class="table-responsive">
          <table id="datatable" class="table">
            <thead class=" text-primary">
              <th>Date</th>
              <th>Notice heading</th>
              <th>Notice</th>
              <th>Canteen</th>
              <th>Edit</th>
              <th>Delete</th>
            </thead>
            <tbody>
              <?php $__currentLoopData = $notice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>

                <td>
                  <?php echo e($row->notice_date); ?>

                </td>
                <td>
                    <?php echo e($row->notice_head); ?>

                  </td>
                <td>
                 <?php echo e($row->notice); ?>

                </td>
                <td>
                    <?php echo e($row->canteen_name); ?>

                </td>

               <td>
                        <a href="" class="btn btn-success">Edit</a>
                       </td>
                       <td>
                       <form action="" method="post">
                         <?php echo csrf_field(); ?>
                         <?php echo e(method_field('DELETE')); ?>

                        <button type="submit" class="btn btn-danger">Delete</button>
                 </form>
                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
      </div>





</div>


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

<?php echo $__env->make('AdminPanel.layouts.admin_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UIUCanteenSadia\resources\views/AdminPanel/notice.blade.php ENDPATH**/ ?>