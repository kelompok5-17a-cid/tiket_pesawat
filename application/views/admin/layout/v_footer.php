</div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
</div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="<?= base_url() ?>template/admin/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?= base_url() ?>template/admin/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?= base_url() ?>template/admin/js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?= base_url() ?>template/admin/js/startmin.js"></script>

         <!-- DataTables JavaScript -->
        <script src="<?= base_url() ?>template/admin/js/dataTables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url() ?>template/admin/js/dataTables/dataTables.bootstrap.min.js"></script>
        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });

$('.jumlah_tiket').on('keyup', function() {
  $('.total_pembayaran').val( parseFloat($(this).val()) * parseFloat($('.harga_tiket').val()) );
});
$('.harga_tiket').on('keyup', function() {
  $('.total_pembayaran').val( parseFloat($(this).val()) * parseFloat($('.jumlah_tiket').val()) );
});

        </script>

    </body>
</html>