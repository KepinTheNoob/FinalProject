<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= asset('./admin-lte/plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= asset('./admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?= asset('./admin-lte/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= asset('./admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?= asset('./admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?= asset('./admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>

<!-- AdminLTE App -->
<script src="<?= asset('./admin-lte/js/adminlte.min.js') ?>"></script>

<script>
  $(function () {
    $('#list-data').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  })
</script>
</body>
</html>