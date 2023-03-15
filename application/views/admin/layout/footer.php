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
  <script>

$(document).on("click", "#add", function(e){
        e.preventDefault();

        var name = $("#npk").val();
        var email = $("#nama").val();
        var email = $("#jabatan").val();
        var email = $("#unit").val();
        var email = $("#pendidikan").val();
        var email = $("#gender").val();
        var email = $("#nope").val();
        var email = $("#agama").val();
        var email = $("#tmt_kerja").val();
        var email = $("#alamat").val();

          $.ajax({
            url: "addanggota",
            type: "post",
            dataType: "json",
            data: {
              npk: npk,
              nama: nama,
              jabatan: jabatan,
              unit: unit,
              pendidikan: pendidikan,
              gender: gender,
              nope: nope,
              agama: agama,
              tmt_kerja: tmt_kerja,
              alamat: alamat
            },
            success: function(data){
              if (data.responce == "success") {
                $('#table-1').DataTable().destroy();
                listUsers();
                $('#exampleModal').modal('hide');
                iziToast["error"](data.message);
              }else{
                iziToast["success"](data.message);
              }

            }
          });

          $("#form")[0].reset();
    });




    $(document).ready(function(){
    listUsers();	//pemanggil data user => ID (vanggota->tbody)

    $("#table-1").dataTable();

    //fungsi tampil anggota
    function listUsers(){
        $.ajax({
            type  : 'ajax',
            url   : 'tampildataanggota',
            async : false,
            dataType : 'json',
            success : function(data){
                var html = '';
                var i;
                var no = 1;
                for(i=0; i<data.length; i++){
                    html += '<tr style="text-align:center;">' +
                                '<td>'+ (no++) +'</td>'+
                                '<td>'+data[i].nama+'</td>'+
                                '<td>'+data[i].jabatan+'</td>'+
                                '<td>'+data[i].unit+'</td>'+
                                '<td>'+data[i].nope+'</td>'+
                                '<td>'+
                                    '<a href="javascript:;" class="btn btn-success btn-xs item_edit" data="'+data[i].nama+'"><i class="far fa-edit"></i> Edit</a>'+' '+
                                    '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="'+data[i].nama+'"><i class="far fa-user"></i> Detail</a>'+' '+
                                    '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].nama+'"><i class="fas fa-times"></i> Hapus</a>'+
                                '</td>'+
                            '</tr>';
                }
                $('#listUsers').html(html);
            }

        });
    }
});
  </script> <!-- JS utuk nampilkan datatable -->
<?php
}elseif ($this->uri->segment(2) == "index_0") { ?>
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