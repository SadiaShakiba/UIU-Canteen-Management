<?php $__env->startSection('title'); ?>
    Add Product
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Add Product</h4>
          <?php if(session('message')): ?>
          <div class="alert alert-success" id="alert">
            <button type="button" class="close" data-dismiss="alert">x</button>
             session('message')
          </div>


          <?php endif; ?>

        </div>
        <div class="card-body">
            <div class="table-responsive">
              <table id="testform" class="table">
                <form class="row g-3" action="<?php echo e(url('/')); ?>/addproduct" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                    <div class="col-md-12">
                      <label for="inputname" class="form-label" style="color: black">Canteen Name</label> <br>
                      <input  class="form-label" type="radio" id="html" name="option" value="Khan's" required>
                      <label for="html">Khan's Kitchen</label><br>
                      <input class="form-label" type="radio" id="css" name="option" value="Olympia" required>
                      <label for="css">Olympia</label><br>
                    </div>


                    <div class="col-md-12">
                      <label for="inputname" class="form-label" style="color: black">Product Name</label>
                      <input type="text" class="form-control" name="product_name" id="" required>
                    </div>
                    <br>

                      <div class="col-md-12">
                        <label for="formFileSm" class="form-label" style="color: black">Product Picture</label>
                        <input  type="file" name="product_image" required>
                      </div>

                      <br>

                    <div class="col-md-12">
                        <label for="inputprice" class="form-label" style="color: black">Product Price</label>
                        <input type="text" class="form-control" name="product_price" id="" required>
                      </div>
                      <br>

                      <br>

                    <div class="col-md-12">
                      <label for="inputcategory" class="form-label" style="color: black">Category</label>
                      <select id="inputcategory" class="form-select" name="product_category" required>
                        <option selected disabled value="">...</option>
                        <option >Breakfast</option>
                        <option>Lunch</option>
                        <option >Drink</option>
                        <option>Snack</option>
                      </select>
                    </div>


                    <div class="col-md-12">
                      <label for="inputdescription" class="form-label" style="color: black">Product Description</label>
                      <input type="text" class="form-control" name="product_description" id="" required>
                    </div>
                    <br>

                    <div class="col-12">
                      <button type="submit" class="btn btn-success fw-bold fs-4 rounded-pill add_test" >Add</button>
                    </div>
                  </form>
              </table>
            </div>
        </div>



        <br>
        <hr>



<div class="row">
         <div class="col-md-12">
           <div class="card">
             <div class="card-header">
                <h4 class="card-title"> All Product</h4>

               
             </div>
             <div class="card-body">
               <div class="table-responsive">
                 <table id="datatable" class="table">
                   <thead class=" text-primary">
                     <th>Name</th>
                     <th>Price</th>
                     <th>Category </th>
                     <th>Canteen </th>
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
                         <?php echo e($row->category); ?>

                       </td>
                       <td>
                         <?php echo e($row->canteen_name); ?>

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

<?php echo $__env->make('AdminPanel.layouts.admin_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UIUCanteenSadia\resources\views/AdminPanel/addproduct.blade.php ENDPATH**/ ?>