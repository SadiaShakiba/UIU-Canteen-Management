<?php $__env->startSection('title'); ?>
    User Roles
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit roles for registered users</h3>
                    </div>
                    <div class="card-body">
                       <div class="row">
                        <div class="col-md-6">

                        <?php if(Session::get('failure')): ?>
                            <div class="alert alert-danger">
                                    <?php echo e(Session::get('failure')); ?>

                            </div>
                        <?php endif; ?>

                        <form action="/user-update/ <?php echo e($users->id); ?>" method="post">
                            <?php echo csrf_field(); ?>

                                <div class="form-group">
                                <label>ID</label>
                                <input style="font-size:13px;" type="text" name="student_id" value="<?php echo e($users->student_id); ?>" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                <label>Role</label>
                                <select name="usertype" class="form-control" id="" value="Student">
                                    <option style="font-size:13px;" value="admin">Admin</option>
                                    <option style="font-size:13px;" value="student">Student</option>
                                </select>
                                </div>
                                <button type="submit" class="btn btn-success">Update</button>
                                <a href="/registered" class="btn btn-danger">Cancel</a>
                        </form>
                        </div>
                       </div>
                    </div>
                </div>
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

<?php echo $__env->make('AdminPanel.layouts.admin_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UIUCanteen\resources\views/AdminPanel/editrole.blade.php ENDPATH**/ ?>