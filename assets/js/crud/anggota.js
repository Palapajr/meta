$(document).ready(function(){
    listUsers();	//pemanggil data user => ID (vanggota->tbody)

    $("#table-1").dataTable();

    //fungsi tampil anggota
    function listUsers(){
        $.ajax({
            type  : 'ajax',
            url   : 'admin/tampildataanggota',
            async : false,
            dataType : 'json',
            success : function(data){
                var html = '';
                var i;
                var no = 1;
                for(i=0; i<data.length; i++){
                    html += '<tr>' +
                                '<td>'+data[i].no++ +'</td>'+
                                '<td>'+data[i].nama+'</td>'+
                                '<td>'+data[i].jabatan+'</td>'+
                                '<td>'+data[i].unit+'</td>'+
                                '<td>'+data[i].nope+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="'+data[i].nama+'">Edit</a>'+' '+
                                    '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="'+data[i].nama+'">Edit</a>'+' '+
                                    '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].nama+'">Hapus</a>'+
                                '</td>'+
                            '</tr>';
                }
                $('#listUsers').html(html);
            }

        });
    }
});