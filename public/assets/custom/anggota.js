$(document).ready(function() {
    var thisurl = $('#thisurl').val();

    var table = $('#memberTable').DataTable({
        'serverMethod': 'get',
        "paging": true,
        "processing": true,
        "ordering": true,
        'responsive':true,
        "info": true,
        //"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        "language": {
            "zeroRecords": "Maaf Belum ada data anggota"
        },
        'ajax': {
            'url': thisurl+'/dataanggota',
            'dataSrc': '',
        },
        'columns': [
            {
                data: null,
                render: function(data, type, full, row) {
                   if(data.email_verified_at == "" || data.email_verified_at == null){
                       if(data.bukti == "" || data.bukti == null){
                           return '<p class="text-danger">Belum Upload</p>';
                       }else{
                           return '<p class="text-warning">Pending</p>';
                       }
                   }else{
                       return '<p class="text-success">Aktif</p>';
                   }
                }
            },
            {
                data: null,
                render: function(data, type, full, row) {
                    return '<img src="'+thisurl+'/files/pasfoto/'+data.foto+'" alt="foto '+data.name+'" data-file="'+data.foto+'" class="pasfoto img img-rounded img-50"> '+data.name;
                }
            },
            {
                data : 'nama_instansi'
            },
            {
                data: null,
                render: function(data, type, full, row) {
                    if(data.jns_kel == "L"){
                        return "Laki-Laki";
                    }else{
                        return "Perempuan";
                    }
                }
            },
            {
                data : 'telepon'
            },
            {
                data : 'tempatlahir'
            },
            {
                data : 'tanggallahir'
            },
            {
                data: 'alamat'
            },
            {
                data: null,
                render: function(data, type, full, row) {
                    if(data.bukti != "" || data.bukti != null){
                        return '<button class="btn btn-success btn-mini">lihat</button>'
                    }
                }
            }
        ]
    });

    $('#reload-tabel').click(function() {
        table.ajax.reload();
    });

    $('#memberTable tbody').on('click', '.pasfoto', function() {
        var file = $(this).data('file');
        $('#lihatBody').html('<img class="img img-fluid" src="'+thisurl+'/files/pasfoto/'+file+'">');
        $('#lihatSurat').modal('show');
    });
});
