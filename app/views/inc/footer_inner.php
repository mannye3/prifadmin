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
         <script src="<?php echo URLROOT; ?>/assets/js/pass.js"></script>
          <script type="text/javascript" src="<?php echo URLROOT; ?>/plugins/isotope/js/isotope.pkgd.min.js"></script>
        <script type="text/javascript" src="<?php echo URLROOT; ?>/plugins/magnific-popup/js/jquery.magnific-popup.min.js"></script>


               <script type="text/javascript">
            $(window).on('load', function () {
                var $container = $('.portfolioContainer');
                $container.isotope({
                    filter: '*',
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                });

                $('.portfolioFilter a').click(function(){
                    $('.portfolioFilter .current').removeClass('current');
                    $(this).addClass('current');

                    var selector = $(this).attr('data-filter');
                    $container.isotope({
                        filter: selector,
                        animationOptions: {
                            duration: 750,
                            easing: 'linear',
                            queue: false
                        }
                    });
                    return false;
                });
            });
            $(document).ready(function() {
                $('.image-popup').magnificPopup({
                    type: 'image',
                    closeOnContentClick: true,
                    mainClass: 'mfp-fade',
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                    }
                });
            });
        </script>


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