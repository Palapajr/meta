<footer class="main-footer">
  <div class="footer-left">
    Copyright &copy; 2022 <div class="bullet"></div> Created By <a href="">Qumfa Anzir</a>
  </div>
  <div class="footer-right">

  </div>
</footer>
</div>
</div>


<!-- General JS Scripts -->
<script src="<?php echo base_url(); ?>assets/modules/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/popper.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/tooltip.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/stisla.js"></script>

<!-- JS Libraies -->
<?php
if ($this->uri->segment(2) == "anggota") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/datatables/datatables.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/prism/prism.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/izitoast/js/iziToast.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/sweetalert/sweetalert.min.js"></script>
  <script>
    // variabel perulangan
    var modal = $('exampleModal'); // nampilkan modal (tampil modal)
    var tabelData = $('#table'); // nampilkan tabel dan isi (tabel)
    var formData = $('#form'); // menghapuskan data form (reset data ketika di close)
    var modalTitle = $('#modalTitle'); // tittle form (tittle)
    var btnSave = $('#btnSave'); // btn save data



    $(document).ready(function() {
      tabelData.DataTable({ // -> tabel
        "processing": true,
        "serverSide": true,
        "ajax": {
          "url": "<?= base_url('admin/getAnggota'); ?>",
          "type": "POST"
        },
        "columnDefs": [{
          "sortable": false,
          "targets": [-1]
        }]
      });
    });

    function reloadTable() {
      tabelData.DataTable().ajax.reload();

    }

    function add() {
      formData[0].reset(); // reset data ketika di close
      modal.modal('show'); // tampil modal
      modalTitle.text('Modal Tambah Data Anggota'); //tittle
    }

    function save() {
      btnSave.text('Mohon Tunggu ...');
      btnSave.attr('disabled', true);
      url = "<?= base_url('admin/addAnggota'); ?>";

      $.ajax({
        type: "POST",
        url: url,
        data: formData.serialize(),
        dataType: "JSON",
        success: function(response) {
          if (response.status == 'success') {
            modal.modal('hide');
            reloadTable();
          }
        },

        error: function() {
          console.log('error database');
        }

      });
    }
  </script> <!-- JS utuk nampilkan datatable -->
<?php
} elseif ($this->uri->segment(2) == "index_0") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/simple-weather/jquery.simpleWeather.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/chart.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/summernote/summernote-bs4.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
<?php
} ?>

<!-- Template JS File -->
<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>

</body>

</html>