        <footer class="main-footer">
            <strong>KKN UNDIP<a href="https://adminlte.io"> TIM 1 Pedalangan</a> made with &#128151;</strong>
            <!-- All rights reserved. -->
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.1.5
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="<?= base_url('assets4/'); ?>plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="<?= base_url('assets4/'); ?>plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="<?= base_url('assets4/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="<?= base_url('assets4/'); ?>plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="<?= base_url('assets4/'); ?>plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="<?= base_url('assets4/'); ?>plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="<?= base_url('assets4/'); ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?= base_url('assets4/'); ?>plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="<?= base_url('assets4/'); ?>plugins/moment/moment.min.js"></script>
        <script src="<?= base_url('assets4/'); ?>plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="<?= base_url('assets4/'); ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="<?= base_url('assets4/'); ?>plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="<?= base_url('assets4/'); ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?= base_url('assets4/'); ?>dist/js/adminlte.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?= base_url('assets4/'); ?>dist/js/demo.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?= base_url('assets4/'); ?>dist/js/pages/dashboard.js"></script>
        <!-- DataTables  & Plugins -->
        <script src="<?= base_url('assets4/'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url('assets4/'); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?= base_url('assets4/'); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?= base_url('assets4/'); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="<?= base_url('assets4/'); ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?= base_url('assets4/'); ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="<?= base_url('assets4/'); ?>plugins/jszip/jszip.min.js"></script>
        <script src="<?= base_url('assets4/'); ?>plugins/pdfmake/pdfmake.min.js"></script>
        <script src="<?= base_url('assets4/'); ?>plugins/pdfmake/vfs_fonts.js"></script>
        <script src="<?= base_url('assets4/'); ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="<?= base_url('assets4/'); ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="<?= base_url('assets4/'); ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
        <!-- Page specific script -->
        <script>
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    // "scrollY": true,
                    "scrollX": true,
                    // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                    "buttons": ["copy", "excel", "pdf", "print"]

                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": true,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "scrollY": true,
                    "scrollX": true,
                    "responsive": true,
                });
            });
        </script>

        </body>

        </html>