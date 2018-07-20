 <footer class="app-footer">
    <span><a href="#">VIMS</a> © GRA version 1.0 </span>
    <span class="ml-auto">Powered by <a href="#">Xenon Tech Consult Limited</a></span>
  </footer>

  <!-- Bootstrap and necessary plugins -->
  <script src="<?php echo e(asset('vendors/js/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendors/js/popper.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendors/js/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendors/js/pace.min.js')); ?>"></script>

  <!-- Plugins and scripts required by all views -->
  <script src="<?php echo e(asset('vendors/js/Chart.min.js')); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

  <!-- Leaf main scripts -->

  <script src="<?php echo e(asset('js/views/app.js')); ?>"></script>
  <script src="<?php echo e(asset('vendors/js/jquery.dataTables.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendors/js/dataTables.bootstrap4.min.js')); ?>"></script>

  <script src="<?php echo e(asset('vendors/js/jquery.maskedinput.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendors/js/moment.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendors/js/daterangepicker.min.js')); ?>"></script>
  <!-- Custom scripts required by this view -->
  <script src="<?php echo e(asset('js/views/datatables.js')); ?>"></script>
  <script type="text/javascript">
  $('.select2').select2();
  
  
  $('.datepicker').daterangepicker({
           singleDatePicker: true,
            showDropdowns: true,
            minYear: 1990,
              locale: {
            format: 'DD-MM-YYYY'
        }
    });
  </script>