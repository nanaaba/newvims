 <footer class="app-footer">
    <span><a href="#">VIMS</a> © 2018 </span>
    <span class="ml-auto">Powered by <a href="#">xenontech</a></span>
  </footer>

  <!-- Bootstrap and necessary plugins -->
  <script src="{{asset('vendors/js/jquery.min.js')}}"></script>
  <script src="{{asset('vendors/js/popper.min.js')}}"></script>
  <script src="{{asset('vendors/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('vendors/js/pace.min.js')}}"></script>

  <!-- Plugins and scripts required by all views -->
  <script src="{{asset('vendors/js/Chart.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

  <!-- Leaf main scripts -->

  <script src="{{asset('js/views/app.js')}}"></script>
  <script src="{{asset('vendors/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('vendors/js/dataTables.bootstrap4.min.js')}}"></script>

  <script src="{{asset('vendors/js/jquery.maskedinput.min.js')}}"></script>
  <script src="{{asset('vendors/js/moment.min.js')}}"></script>
  <script src="{{asset('vendors/js/daterangepicker.min.js')}}"></script>
  <!-- Custom scripts required by this view -->
  <script src="{{asset('js/views/datatables.js')}}"></script>
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