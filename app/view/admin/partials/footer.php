   <!--End content-wrapper-->
   <!--Start Back To Top Button-->
   <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>


   <!--Start footer-->
   <footer class="footer">
       <div class="container">
           <div class="text-center">
               Copyright © 2018 DashRock Admin
           </div>
       </div>
   </footer>
   <!--End footer-->

   </div>
   <!--End wrapper-->

   <!-- Bootstrap core JavaScript-->
   <script src="<?= public_url('admin/js/jquery.min.js'); ?>"></script>
   <script src="<?= public_url('admin/js/popper.min.js'); ?>"></script>
   <script src="<?= public_url('admin/js/bootstrap.min.js'); ?>"></script>

   <!--Data Tables js-->
   <script src="<?= public_url('admin/plugins\bootstrap-datatable\js\jquery.dataTables.min.js'); ?>"></script>
   <script src="<?= public_url('admin/plugins\bootstrap-datatable\js\dataTables.bootstrap4.min.js'); ?>"></script>
   <script src="<?= public_url('admin/plugins\bootstrap-datatable\js\dataTables.buttons.min.js'); ?>"></script>
   <script src="<?= public_url('admin/plugins\bootstrap-datatable\js\buttons.bootstrap4.min.js'); ?>"></script>
   <script src="<?= public_url('admin/plugins\bootstrap-datatable\js\jszip.min.js'); ?>"></script>
   <script src="<?= public_url('admin/plugins\bootstrap-datatable\js\pdfmake.min.js'); ?>"></script>
   <script src="<?= public_url('admin/plugins\bootstrap-datatable\js\vfs_fonts.js'); ?>"></script>
   <script src="<?= public_url('admin/plugins\bootstrap-datatable\js\buttons.html5.min.js'); ?>"></script>
   <script src="<?= public_url('admin/plugins\bootstrap-datatable\js\buttons.print.min.js'); ?>"></script>
   <script src="<?= public_url('admin/plugins\bootstrap-datatable\js\buttons.colVis.min.js'); ?>"></script>

   <script>
       $(document).ready(function() {
           //Default data table
           $('#default-datatable').DataTable();


           var table = $('#example').DataTable({
               lengthChange: false,
               buttons: ['copy', 'excel', 'pdf', 'print', 'colvis']
           });

           table.buttons().container()
               .appendTo('#example_wrapper .col-md-6:eq(0)');

       });
   </script>

   <!-- simplebar js -->
   <script src="<?= public_url('admin/plugins/simplebar/js/simplebar.js'); ?>"></script>
   <!-- waves effect js -->
   <script src="<?= public_url('admin/js/waves.js'); ?>"></script>
   <!-- sidebar-menu js -->
   <script src="<?= public_url('admin/js/sidebar-menu.js'); ?>"></script>
   <!-- Custom scripts -->
   <script src="<?= public_url('admin/js/app-script.js'); ?>"></script>

   <!--Select Plugins Js-->
   <script src="<?= public_url('admin\\plugins\select2\js\select2.min.js'); ?>"></script>

   <!--Switchery Js-->
   <script src="<?= public_url('admin\plugins\switchery\js\switchery.min.js'); ?>"></script>
   <script>
       var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
       $('.js-switch').each(function() {
           new Switchery($(this)[0], $(this).data());
       });
   </script>

   <!-- Vector map JavaScript -->

   <script src="<?= public_url('admin/plugins/vectormap/jquery-jvectormap-2.0.2.min.js'); ?>"></script>
   <script src="<?= public_url('admin/plugins/vectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
   <!-- Sparkline JS -->
   <script src="<?= public_url('admin/plugins/sparkline-charts/jquery.sparkline.min.js'); ?>"></script>
   <!-- Chart js -->
   <script src="<?= public_url('admin/plugins/Chart.js/Chart.min.js'); ?>"></script>
   <!--notification js -->
   <script src="<?= public_url('admin/plugins/notifications/js/lobibox.min.js'); ?>"></script>
   <script src="<?= public_url('admin/plugins/notifications/js\notifications.min.js'); ?>"></script>
   <!-- Index js -->
   <script src="<?= public_url('admin/js/index.js'); ?>"></script>

   <script>
       $(document).ready(function() {
           $('.single-select').select2();
       });
   </script>



   </body>

   </html>