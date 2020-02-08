@section('end')
<div class="modal fade" id="aktivasi-mahasiswa" tabindex="-1" role="dialog" aria-labelledby="tambahAnggotaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="tambahAnggotaLabel">Lihat Mahasiswa</h4>
            </div>
            <div class="modal-body">
                    <div class="text-center">
                       <h4>Apakah Anda yakin ingin mengaktivasi akun mahasiswa dibawah ini ?</h4> 
                    </div>
                    <form action="{{url('opt/aktifkan-mhs')}}" id="formulir" class="form-validation" method="POST">
                    @csrf
                    <input type="hidden" name="kode" id="kode">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-male fa-fw"></i></span>
                            <input type="text" id="nama" class="form-control" placeholder="Nama Mahasiswa" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-male fa-fw"></i></span>
                            <input type="text" id="nim-isi" class="form-control" placeholder="NIM Mahasiswa" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-university fa-fw"></i></span>
                            <input type="text" id="prodi" class="form-control" placeholder="Prodi Mahasiswa" readonly>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" id="Aktivasi" class="btn btn-success">Aktifkan</button>
        </form>
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>
	
@endsection

@section('footer')
    <script>
    $('#search').click(function() {
		var nim = $('#nim').val();
		if (nim != '') {
			var input_icon = $(this).parent().children().first().children();
			var input_help = $(this).parent().parent().children().last();

			input_icon.removeClass('fa-user').addClass('fa-spinner fa-spin');
			input_help.hide();

			$.get("{{ URL::to('/opt/cek-aktivasi') }}", {nim: nim})
			.done(function(result) {
				input_icon.removeClass('fa-spinner fa-spin').addClass('fa-user');
				if ($.isEmptyObject(result)) {
						new PNotify({
	            		    title: 'NIM Not Founded!',
	            		    text: 'Mahasiswa tidak ada didaftar registrasi.',
	            		    icon: 'icofont icofont-info-circle',
	            		    type: 'error'
	            		});
						input_icon.removeClass('fa-spinner fa-spin').addClass('fa-user');
						input_help.children().html('Silahkan ketik NIM dan klik tombol cari terlebih dahulu.');
						input_help.show();
				} else {
					if ($.isNumeric(result)) {
						new PNotify({
	            		    title: 'Opps.. Sorry!',
	            		    text: 'Bukan Nim {{$fakultas}}',
	            		    icon: 'icofont icofont-info-circle',
	            		    type: 'error'
	            		});
						input_icon.removeClass('fa-spinner fa-spin').addClass('fa-user');
						input_help.children().html('Silahkan ketik NIM dan klik tombol cari terlebih dahulu.');
						input_help.show();
					} else if(result.isi){
						input_help.children().html('Nim Mahasiswa {{$fakultas}} ditemukan');
						input_help.show();
						$('#kode').val(result.kode);
						$('#nim-isi').val(result.isi.nim);
						$('#nama').val(result.isi.nama);
						$('#prodi').val(result.isi.nama_prodi+' - '+result.isi.jenjang_prodi);
                        $('#aktivasi-mahasiswa').modal('show');
					}else{
						new PNotify({
	            		    title: 'Opps..',
	            		    text: 'Nim sudah teraktivasi',
	            		    icon: 'icofont icofont-info-circle',
	            		    type: 'warning'
	            		});
						input_icon.removeClass('fa-spinner fa-spin').addClass('fa-user');
						input_help.children().html('Silahkan ketik NIM dan klik tombol cari terlebih dahulu.');
						input_help.show();
					};
				}
			})
			.fail(function() {
				toastr.error('Kesalahan server! Silahkan reload halaman dan coba lagi');
				input_icon.removeClass('fa-spinner fa-spin').addClass('fa-user');
				input_help.children().html('Silahkan ketik NIM dan klik tombol cari terlebih dahulu.');
				input_help.show();
			});
		}
	});

    $('#aktivasi-mahasiswa').on('hidden.bs.modal', function () {
    	$(this).find('form').trigger('reset');
        $('.noticeBlock').html('Silahkan ketik NIM dan klik tombol cari terlebih dahulu.');
        $('.noticeBlock').show();
    });
    
    </script>
@endsection