<?php $__env->startSection('title'); ?>
    Registered
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
         <div class="col-md-12">
           <div class="card">
             <div class="card-header">
               <h4 class="card-title"> Registered Roles</h4>

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
                     <th>Name</th>
                     <th>Email</th>
                     <th>Role </th>
                     <th>Joined at</th>
                     <th>Edit</th>
                     <th>Delete</th>
                   </thead>
                   <tbody>
                     <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr>
                       <td>
                        <?php echo e($row->firstname); ?>

                        <?php echo e($row->lastname); ?>


                       </td>
                       <td>
                         <?php echo e($row->email); ?>

                       </td>
                       <td>
                        <?php echo e($row->role); ?>

                       </td>
                       <td>
                        <?php echo e($row->created_at); ?>

                       </td>
                       <td>
                        <a href="/role-edit/<?php echo e($row->id); ?>" class="btn btn-success">Edit</a>
                       </td>
                       <td>
                       <form action="/user-delete/<?php echo e($row->id); ?>" method="post">
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

<?php echo $__env->make('AdminPanel.layouts.admin_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UIUCanteenSadia\resources\views/AdminPanel/registered.blade.php ENDPATH**/ ?>