<?php $__env->startSection('title'); ?>
    Product List
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
         <div class="col-md-12">
           <div class="card">
             <div class="card-header">
               <h4 class="card-title"> All products</h4>

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
                     <th>Product Name</th>
                     <th>Product price</th>
                     <th>Canteen</th>
                     <th>Category</th>
                     <th>Status</th>
                     <th>Edit</th>
                     <th>Delete</th>
                   </thead>
                   <tbody>
                     <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr>
                       <td>
                        <?php echo e($row->product_name); ?>


                       </td>
                       <td>
                         <?php echo e($row->product_price); ?>TK
                       </td>
                       <td>
                        <?php echo e($row->canteen_name); ?>

                       </td>
                       <td>
                        <?php echo e($row->category); ?>

                       </td>
                       <td>
                        <?php echo e($row->status); ?>

                       </td>
                       <td>
                        <a href="/editproduct/<?php echo e($row->product_id); ?>" class="btn btn-success">Edit</a>
                       </td>
                       <td>
                       <form action="/product-delete/<?php echo e($row->product_id); ?>" method="post">
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

<?php echo $__env->make('AdminPanel.layouts.admin_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UIUCanteen\resources\views/AdminPanel/product_list.blade.php ENDPATH**/ ?>