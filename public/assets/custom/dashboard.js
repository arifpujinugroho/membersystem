$('#uploadBukti').click(function(){
    $('#modalBukti .modal-title').html('Upload Bukti Pembayaran');
    $('#modalBukti #bodyfile').hide();
    $('#modalBukti #bodybukti').show();
    $('#modalBukti .modal-footer').show();
    $('#modalBukti').modal('show');
});

$('#reuploadBukti').click(function(){
    $('#modalBukti .modal-title').html('Upload Ulang Bukti Pembayaran');
    $('#modalBukti #bodyfile').hide();
    $('#modalBukti #bodybukti').show();
    $('#modalBukti .modal-footer').show();
    $('#modalBukti').modal('show');
});

$('#lihatBukti').click(function () {
    var file = $(this).data('file');
    var thisurl = $('#thisurl').val();
    $('#modalBukti .modal-title').html('Lihat Bukti Pembayaran');
    $('#modalBukti #bodyfile').html('<img class="img img-fluid" src="'+ thisurl +'/files/bukti/'+ file +'">');
    $('#modalBukti #bodybukti').hide();
    $('#modalBukti #bodyfile').show();
    $('#modalBukti .modal-footer').hide();
    $('#modalBukti').modal('show');
});


