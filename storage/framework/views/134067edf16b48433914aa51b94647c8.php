<!-- Footer Section Begin -->



<footer class="ftco-footer ftco-section">
    <div class="container">
        <!---->
        

         <!---->


      <div class="row">
        <div class="col-md-12 text-center">

          <p> Copyright &copy; All rights reserved |  by <a href="https://tech_turturtle.com" target="_blank">Tech_Turtle</a></p>
        </div>
      </div>
    </div>
  </footer>


<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="<?php echo e(asset('Rabeya/js/jquery-3.3.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeyad/js/jquery.magnific-popup.min.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/js/masonry.pkgd.min.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/js/jquery-ui.min.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/js/jquery.nice-select.min.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/js/jquery.slicknav.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/js/main.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeyamed/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/med/js/jquery-migrate-3.0.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/med/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/med/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/med/js/jquery.easing.1.3.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/med/js/jquery.waypoints.min.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/med/js/jquery.stellar.min.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/med/js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/med/js/jquery.magnific-popup.min.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/med/js/aos.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/med/js/jquery.animateNumber.min.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/med/js/bootstrap-datepicker.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/med/js/scrollax.min.js')); ?>"></script>


<script src="<?php echo e(asset('Rabeya/med/js/google-map.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/med/js/main.js')); ?>"></script>


<script src="<?php echo e(asset('Rabeya/js/jquery-3.3.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/js/jquery.magnific-popup.min.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/js/masonry.pkgd.min.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/js/jquery-ui.min.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/js/jquery.nice-select.min.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/js/jquery.slicknav.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/js/main.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/med/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/med/js/jquery-migrate-3.0.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/med/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/med/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/med/js/jquery.easing.1.3.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/med/js/jquery.waypoints.min.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/med/js/jquery.stellar.min.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/med/js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/med/js/jquery.magnific-popup.min.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/med/js/aos.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/med/js/jquery.animateNumber.min.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/med/js/bootstrap-datepicker.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/med/js/scrollax.min.js')); ?>"></script>

<script src="<?php echo e(asset('Rabeya/med/js/google-map.js')); ?>"></script>
<script src="<?php echo e(asset('Rabeya/med/js/main.js')); ?>"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>
$(".cart_update").change(function (e){
    e.preventDefault();

    var ele = $(this);


    $.ajax({
        url: '<?php echo e(route('update_cart')); ?>',
        method: "patch",
        data: {
            _token: '<?php echo e(csrf_token()); ?>',
            id: ele.parents("tr").attr("data-id"),
            quantity: ele.parents("tr").find(".quantity").val()
        },
        success: function (response) {
            window.location.reload();
        }

    });

});




$(".cart_remove").click(function (e) {
    e.preventDefault();

    var ele = $(this);
    if(confirm("Do you really want to remove?")) {
        $.ajax({
            url: '<?php echo e(route('remove_from_cart')); ?>',
            method: "DELETE",
            data: {
                _token: '<?php echo e(csrf_token()); ?>',
                id: ele.parents("tr").attr("data-id")
            },
            success: function (response) {
                window.location.reload();
            }
        });
    }

});





</script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\UIUCanteenSadia\resources\views/Rabeya/layouts/footer.blade.php ENDPATH**/ ?>