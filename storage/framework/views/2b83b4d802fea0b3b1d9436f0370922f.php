<?php $__env->startSection('title'); ?>
    Edit Product
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Edit Product Details</h3>
                        </div>
                        <div class="card-body">
                           <div class="row">
                            <div class="col-md-6">

                            <?php if(Session::get('failure')): ?>
                                <div class="alert alert-danger">
                                        <?php echo e(Session::get('failure')); ?>

                                </div>
                            <?php endif; ?>

                            


                                    <form action="/product-update/ <?php echo e($products->product_id); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo e(method_field('PUT')); ?>

                                            <div class="form-group">
                                            <label>Product</label>
                                            <input style="font-size:13px;" type="text" name="product_name" value="<?php echo e($products->product_id); ?>" class="form-control" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Price</label>
                                                <input style="font-size:13px;" type="text" name="prouduct_price" value="<?php echo e($products->product_price); ?>" class="form-control" readonly>
                                                </div>
                                            <div class="form-group">
                                            <label>Status</label>
                                            <select name="status" class="form-control" id="">
                                                <option style="font-size:13px;" value="available">Available</option>
                                                <option style="font-size:13px;" value="not_available">Not Available</option>
                                            </select>
                                            </div>
                                            <button type="submit" class="btn btn-success">Update</button>
                                            <a href="#" class="btn btn-danger">Cancel</a>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('AdminPanel.layouts.admin_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UIUCanteen\resources\views/AdminPanel/editproduct.blade.php ENDPATH**/ ?>