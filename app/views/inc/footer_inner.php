    <footer class="footer text-right">
                    2019 © Prifa Homes. - prifa.com.ng
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- jQuery  -->
        <script src="<?php echo URLROOT; ?>/assets/js/jquery.min.js"></script>
        <script src="<?php echo URLROOT; ?>/assets/js/popper.min.js"></script>
        <script src="<?php echo URLROOT; ?>/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo URLROOT; ?>/assets/js/metisMenu.min.js"></script>
        <script src="<?php echo URLROOT; ?>/assets/js/waves.js"></script>
        <script src="<?php echo URLROOT; ?>/assets/js/jquery.slimscroll.js"></script>


        <script src="<?php echo URLROOT; ?>/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo URLROOT; ?>/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="<?php echo URLROOT; ?>/plugins/datatables/dataTables.responsive.min.js"></script>

        <!-- App js -->
        <script src="<?php echo URLROOT; ?>/assets/js/jquery.core.js"></script>
        <script src="<?php echo URLROOT; ?>/assets/js/jquery.app.js"></script>

         <script type="text/javascript">
            $(document).ready(function() {

                // Default Datatable
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });

                // Key Tables

                $('#key-table').DataTable({
                    keys: true
                });

                // Responsive Datatable
                $('#responsive-datatable').DataTable();

                // Multi Selection Datatable
                $('#selection-datatable').DataTable({
                    select: {
                        style: 'multi'
                    }
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );

        </script>


    </body>

</html>