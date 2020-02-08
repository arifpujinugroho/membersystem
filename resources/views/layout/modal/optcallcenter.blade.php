
@section('end')
<div class="modal fade" id="tambah-callcenter" tabindex="-1" role="dialog" aria-labelledby="tambahAnggotaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="tambahAnggotaLabel">Tambah Call Center</h4>
            </div>
            <div class="modal-body">
                <form action="{{url('opt/add-callcenter')}}" id="formulir" class="form-validation" method="POST">
                @csrf
                <input type="hidden" name="kode" id="kode">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                        <input type="text" name="nim" id="nim" class="validate[required,custom[integer]] form-control" placeholder="NIM Anggota">
                        <span class="input-group-addon cursor-hand" id="search">Cari <i class="fa fa-search fa-fw"></i></span>
                    </div>
                    <p class="help-block"><strong>Silahkan ketik NIM dan klik tombol cari terlebih dahulu.</strong></p>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-male fa-fw"></i></span>
                        <input type="text" id="nama" class="validate[required] form-control" placeholder="Nama Mahasiswa" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-university fa-fw"></i></span>
                        <input type="text" id="prodi" class="validate[required] form-control" placeholder="Prodi Mahasiswa" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-venus-mars fa-fw"></i></span>
                        <input type="text" id="jns_kelamin" class="validate[required] form-control" placeholder="Jenis Kelamin Mahasiswa" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-whatsapp fa-fw"></i></span>
                        <input type="text" name="telepon" id="telepon" class="validate[custom[number]] form-control" placeholder="628XXXXXXXX" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" id="simpan" class="btn btn-success">Simpan <i class="fa fa-save"></i></button>
        </form>
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>
@endsection
    
    @section('footer')
        <script>
        $('.tambahCallCenter').click(function(){
            $('#telepon').attr('disabled','disabled');
            $('#simpan').attr('disabled','disabled');
            $('#tambah-callcenter').modal('show');
            $('#nim').focusin();
        });

        $('#search').click(function() {
            var nim = $('#nim').val();
            if (nim != '') {
                var input_icon = $(this).parent().children().first().children();
                var input_help = $(this).parent().parent().children().last();
    
                input_icon.removeClass('fa-user').addClass('fa-spinner fa-spin');
                input_help.hide();
    
                $.get("{{ URL::to('/opt/cek-callcenter') }}", {nim: nim})
                .done(function(result) {
                    input_icon.removeClass('fa-spinner fa-spin').addClass('fa-user');
                    if ($.isEmptyObject(result)) {
                            new PNotify({
                                title: 'NIM Not Founded!',
                                text: 'Mahasiswa tidak ada didaftar',
                                icon: 'icofont icofont-info-circle',
                                type: 'error'
                            });
                            input_icon.removeClass('fa-spinner fa-spin').addClass('fa-user');
                            input_help.children().html('Silahkan ketik NIM dan klik tombol cari terlebih dahulu.');
                            input_help.show();
                            $('#telepon').attr('disabled','disabled');
                    } else {
                        if ($.isNumeric(result)) {
                            new PNotify({
                                title: 'Opps.. Sorry!',
                                text: 'Call Center Sudah Terdaftar',
                                icon: 'icofont icofont-info-circle',
                                type: 'warning'
                            });
                            input_icon.removeClass('fa-spinner fa-spin').addClass('fa-user');
                            input_help.children().html('Silahkan ketik NIM dan klik tombol cari terlebih dahulu.');
                            input_help.show();
                        } else if(result.kode){
                            input_help.children().html('Nim Mahasiswa ditemukan');
                            input_help.show();
                            $('#kode').val(result.kode);
                            $('#nama').val(result.data.nama_mahasiswa);
                            $('#prodi').val(result.data.nama_prodi+' - '+result.data.jenjang_prodi);
                            if (result.data.jns_kel_mahasiswa == "P") {
                                $('#jns_kelamin').val('Perempuan');
                            } else {
                                $('#jns_kelamin').val('Laki-Laki');
                            }
                            $('#telepon').removeAttr('disabled');
                            $('#simpan').removeAttr('disabled');
                        }else if(result == "Forbiden"){
                            new PNotify({
                                title: 'Opps.. Sorry!',
                                text: 'Nim Bukan dari fakultas anda',
                                icon: 'icofont icofont-info-circle',
                                type: 'error'
                            });
                            input_icon.removeClass('fa-spinner fa-spin').addClass('fa-user');
                            input_help.children().html('Silahkan ketik NIM dan klik tombol cari terlebih dahulu.');
                            input_help.show();
                            $('#telepon').attr('disabled','disabled');
                        };
                    }
                })
                .fail(function() {
                    toastr.error('Kesalahan server! Silahkan reload halaman dan coba lagi');
                    input_icon.removeClass('fa-spinner fa-spin').addClass('fa-user');
                    input_help.children().html('Silahkan ketik NIM dan klik tombol cari terlebih dahulu.');
                    input_help.show();
                    $('#telepon').attr('disabled','disabled');
                });
            }
        });
    
        $('#tambah-callcenter').on('hidden.bs.modal', function () {
            $(this).find('form').trigger('reset');
            $('.noticeBlock').html('Silahkan ketik NIM dan klik tombol cari terlebih dahulu.');
            $('.noticeBlock').show();
        });
        
        </script>
    @endsection