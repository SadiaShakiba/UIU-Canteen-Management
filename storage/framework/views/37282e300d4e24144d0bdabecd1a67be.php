<?php $__env->startSection('main-container'); ?>

 <!-- Hero Section Begin -->
 <section class="hero spad set-bg ftco-animate" style="height: 20px; align-items:center" data-setbg="<?php echo e(url('Rabeya/img/contactus.png')); ?>">

    <h1 class="banner_write">Contact Us</h1>
 </section>
 <!-- Hero Section End -->

 <hr size="8" color="black">





 <section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
        <div class="w-100"></div>
        <div class="col-md-3 d-flex">
            <div class="info bg-white p-4">
              <p><span>Address:</span> UNITED INTERNATIONAL UNIVERSITY , MADANI AVENUE</p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="info bg-white p-4">
              <p><span>Phone:</span> <a href="tel://1234567920">015354566576</a></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="info bg-white p-4">
              <p><span>Email:</span> <a href="mailto:info@yoursite.com">uiucanteen@uiu.ac.bd</a></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="info bg-white p-4">
              <p><span>Website</span> <a href="#">uiucanteen.uiu.ac.bd</a></p>
            </div>
        </div>
      </div>
      <div class="row block-9">
        <div class="col-md-12 order-md-last d-flex">
          <form action="<?php echo e(url('/')); ?>/post_opinion" class="bg-white p-5 contact-form"  method="post"  enctype="multipart/form-data">
           <?php echo csrf_field(); ?>
            <div class="form-group">
              <input type="text" class="form-control" name="student_name" id="student_name" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="student_id" id="student_id" placeholder="Student ID">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
            </div>
            <div class="form-group">
              <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group" >
                <button type="submit" value="Send Message" class="btn btn-primary py-3 px-5" style="margin-left:72%">Send Message</button>
              
            </div>
          </form>

        </div>



        
        </div>
      </div>
    </div>
  </section>











<!--Arrow Up-->

<hr size="8" color="black">


<!-- Arrow ENDS-->






















<?php $__env->stopSection(); ?>

<?php echo $__env->make('Rabeya.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UIUCanteenSadia\resources\views/Rabeya/contact.blade.php ENDPATH**/ ?>