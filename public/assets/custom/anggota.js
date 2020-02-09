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
                    return '<img src="'+thisurl+'/files/pasfoto/'+data.foto+'" alt="foto '+data.name+'" data-file="'+data.foto+'" data-nama="'+data.name+'" class="pasfoto img img-rounded img-50"> '+data.name;
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
                   if(data.email_verified_at == "" || data.email_verified_at == null){
                       if(data.bukti == "" || data.bukti == null){
                           return '<p class="text-danger">Belum Upload</p>';
                       }else{
                           return '<button class="lihatBukti btn btn-default btn-mini" data-nama="'+data.name+'" data-file="'+data.bukti+'"><i class="fa fa-eye" aria-hidden="true"></i></button>'+
                           '<button class="accAnggota btn btn-mini btn-primary" data-id="'+data.id+'" data-nama="'+data.name+'">Terima?</button>';
                       }
                   }else{
                       return '<p class="text-success">Aktif</p>';
                   }
                }
            },
            {
                data: null,
                render: function(data, type, full, row) {
                    return '<button class="resetAnggota btn btn-mini btn-warning" data-id="'+data.id+'" data-nama="'+data.name+'"><i class="fa fa-repeat" aria-hidden="true"></i></button>'
                }
            }
        ]
    });

    $('#reload-tabel').click(function() {
        table.ajax.reload();
    });

    $('#memberTable tbody').on('click', '.pasfoto', function() {
        var file = $(this).data('file');
        var nama = $(this).data('nama');
        $('#labellihatToko').html('Lihat Foto '+nama);
        $('#lihatBody').html('<img class="img img-fluid" src="'+thisurl+'/files/pasfoto/'+file+'">');
        $('#lihatSurat').modal('show');
    });

    $('#memberTable tbody').on('click', '.lihatBukti', function() {
        var file = $(this).data('file');
        var nama = $(this).data('nama');
        $('#labellihatToko').html('Bukti Pembayaran '+nama);
        $('#lihatBody').html('<img class="img img-fluid" src="'+thisurl+'/files/bukti/'+file+'">');
        $('#lihatSurat').modal('show');
    });


    $('#memberTable tbody').on('click', '.accAnggota', function() {
        var id = $(this).data('id');
        var nama = $(this).data('nama');

        swal({
            title: "Terima "+nama+"??",
            text: "Apakah anda ingin menerima "+nama+" sebagai anggota?",
            type: "info",
            showCancelButton: true,
            showLoaderOnConfirm: true,
            confirmButtonText: "Terima",
            closeOnConfirm: false
        }, function() {
            $.ajax({
                url: thisurl+'/accanggota',
                type: "GET",
                data: {
                    id: id,
                },
                success: function() {
                    table.ajax.reload();
                    swal(" Diterima", "Anda berhasil menerima "+nama, "success");
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    swal("Error Diterima!", "Silakan Coba Lagi", "error");
                }
            });
        });
    });

    $('#memberTable tbody').on('click', '.resetAnggota', function() {
        var id = $(this).data('id');
        var nama = $(this).data('nama');

        swal({
            title: "Reset akun "+nama+"??",
            text: "Apakah anda ingin mereset akun "+nama+"?",
            type: "warning",
            showCancelButton: true,
            showLoaderOnConfirm: true,
            confirmButtonText: "Reset",
            closeOnConfirm: false
        }, function() {
            $.ajax({
                url: thisurl+'/resetanggota',
                type: "GET",
                data: {
                    id: id,
                },
                success: function() {
                    table.ajax.reload();
                    swal("Akun Direset", "Password akun "+nama+" sama dengan email", "success");
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    swal("Error Direset!", "Silakan Coba Lagi", "error");
                }
            });
        });
    });
});
