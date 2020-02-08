@section('end')
@if (Auth::user()->identitas_mahasiswa->id == $ketuapkm->id_mahasiswa && $pkm->status_upload == 1 && $pkm->aktif == 1)

@if($jumlahanggota < $pkm->maksimal_skim)
	<div class="modal fade" id="tambah-anggota" tabindex="-1" role="dialog" aria-labelledby="tambahAnggotaLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="tambahAnggotaLabel">Tambah Anggota</h4>
				</div>

				<form action="{{url('mhs/tambahanggota')}}" class="form-validation" method="POST">
					@csrf
					<input type="hidden" name="kode_token" value="{{Crypt::encryptString($id)}}">
					<input type="hidden" name="kode" id="kode">
					<div class="modal-body">
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
						<fieldset id="form" class="formPrivasi" disabled>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-home fa-fw"></i></span>
									<textarea class="validate[required] form-control" rows="3" name="alamat" id="alamat" placeholder="Alamat Anggota" required></textarea>
								</div>
							</div>
							<div class="formTelepon form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-whatsapp fa-fw"></i></span>
									<input type="text" name="telepon" id="telepon" class="validate[custom[number]] form-control" placeholder="Format : 628XXXXXXXXX" required>
								</div>
							</div>
							<div class="formTelepon form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
									<input type="text" name="backup_telepon" id="backup_telepon" class=" form-control" placeholder="Format : 628XXXXXXXXX">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-shirtsinbulk fa-fw"></i></span>
									<select class="validate[required] form-control" name="ukuranbaju" id="ukuranbaju" required>
										<option value="">-- Pilih Ukuran Baju --</option>
										<option value="S">S</option>
										<option value="M">M</option>
										<option value="L">L</option>
										<option value="XL">XL</option>
										<option value="XXL">XXL</option>
										<option value="XXXL">XXXL</option>
										<option value="XXXXL">XXXXL</option>
									</select>
								</div>
							</div>
						</fieldset>
						{{--<div class="form-group">
    					<div class="input-group">
    						<span class="input-group-addon"><i class="fa fa-ellipsis-h fa-fw"></i></span>
    						<select class="validate[required] form-control" name="peran" id="peran" disabled required>
    							<option value="">-- Pilih Peran --</option>
    							<option value="{{Crypt::encryptString('Anggota 1')}}">Anggota 1</option>
						<option value="{{Crypt::encryptString('Anggota 2')}}">Anggota 2</option>
						<option value="{{Crypt::encryptString('Anggota 3')}}">Anggota 3</option>
						<option value="{{Crypt::encryptString('Anggota 4')}}">Anggota 4</option>
						</select>
					</div>
			</div>--}}
		</div>
		<div class="modal-footer">
			<button type="submit" id="simpan-anggota" class="btn btn-success">Simpan <i class="fa fa-save"></i></button>
			<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
		</div>
		</form>
	</div>
	</div>
	</div>
	@endif

	<div class="modal fade" id="hapus-pkm" tabindex="-1" role="dialog" aria-labelledby="hapusPKMLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="{{url('mhs/hapuspkm')}}" method="post">
					@csrf
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h3 class="modal-title" id="hapusPKMLabel">Hapus PKM</h3>
					</div>
					<div class="modal-body text-danger">
						<h4>Anda yakin ingin menghapus PKM ini?</h4>
					</div>
					<div class="modal-footer">
						<input type="hidden" name="kode_token" value="{{Crypt::encryptString($id)}}">
						<button type="submit" class="btn btn-danger btn-mini">Hapus PKM</button>
						<button class="btn btn-default btn-mini" data-dismiss="modal">Close</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="modal fade" id="hapus-anggota" tabindex="-1" role="dialog" aria-labelledby="hapusAnggotaLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="{{url('mhs/hapusanggota')}}" method="post">
					@csrf
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4 class="modal-title" id="hapusAnggotaLabel">Hapus Anggota</h4>
					</div>
					<div class="modal-body">
						<p id="labelhapusanggota"></p>
					</div>
					<div class="modal-footer">
						<input type="hidden" name="kode_data" id="kode_data">
						<input type="hidden" name="kode_token" value="{{Crypt::encryptString($id)}}">
						<button type="submit" class="btn btn-danger btn-mini">Hapus</button>
						<button class="btn btn-default btn-mini" data-dismiss="modal">Close</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	@endif

	@if($saya->acc_anggota == "Y")
	@if($pkm->file_proposal == "")
	<div class="modal fade" id="upload-proposal" tabindex="-1" role="dialog" aria-labelledby="uploadProposalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="{{url('mhs/uploadproposal')}}" class="form-validation" method="post" enctype="multipart/form-data">
					@csrf
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4 class="modal-title" id="uploadProposalLabel">Upload Proposal</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-upload fa-fw"></i></span>
								<input type="file" name="file" class="validate[required] form-control" id="file" placeholder="File PKM">
							</div>
							<p class="help-block"><strong style="color: red">Format PDF Maks 5 MB</strong></p>
						</div>
					</div>
					<div class="modal-footer">
						<input type="hidden" name="kode_token" value="{{Crypt::encryptString($id)}}">
						<button type="submit" class="btn btn-success btn-mini">Simpan</button>
						<button class="btn btn-default btn-mini" data-dismiss="modal">Close</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	@endif

	@if($pkm->file_proposal != "")
	<div class="modal fade" id="revisi-proposal" tabindex="-1" role="dialog" aria-labelledby="revisiProposalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="{{url('mhs/revisiproposal')}}" class="form-validation" method="post" enctype="multipart/form-data">
					@csrf
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4 class="modal-title" id="revisiProposalLabel">Revisi Proposal</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-upload fa-fw"></i></span>
								<input type="file" id="file" name="file" class="validate[required] form-control" placeholder="File PKM" required>
							</div>
							<p class="help-block"><strong style="color: red">Format PDF Maks 5 MB</strong></p>
						</div>
					</div>
					<div class="modal-footer">
						<input type="hidden" name="kode_token" value="{{Crypt::encryptString($id)}}">
						<button type="submit" class="btn btn-success btn-mini">Simpan</button>
						<button class="btn btn-default btn-mini" data-dismiss="modal">Close</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	@endif

	<div class="modal fade" id="edit-pkm" tabindex="-1" role="dialog" aria-labelledby="editPKMLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="{{url('mhs/editpkm')}}" class="form-validation" method="post">
					@csrf
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4 class="modal-title" id="editPKMLabel">Edit Data PKM</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-book fa-fw"></i></span>
								<input type="text" name="judul" class="validate[required] form-control" placeholder="Judul PKM" value="{{ $pkm->judul }}">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-list fa-fw"></i></span>
								<input type="text" name="keywords" class="validate[required] form-control" placeholder="Keyword PKM" value="{{ $pkm->keyword }}">
							</div>
						</div>
						@if ($pkm->id_tipe_pkm == "2" || $pkm->id_tipe_pkm == "3" || $pkm->id_tipe_pkm == "4")
						<div id="form-abstrak" class="form-group">
							<label>Abstrak</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-list fa-fw"></i></span>
								<textarea name="abstrak" class="validate[required] form-control" id="abstrak" cols="30">{{$pkm->abstrak}}</textarea>
							</div>
						</div>
						@endif
						@if($pkm->id_tipe_pkm == "3")
						<div id="form-linkurl" class="form-group">
							<label>Link URL</label>
							<div class="input-group">
								<input type="url" name="linkurl" id="linkurl" class="validate[required] form-control" placeholder="URL Video" value="{{$pkm->linkurl}}">
							</div>
						</div>
						@endif
						@if($pkm->id_tipe_pkm == "1")
						<div class="form-group">
							<label>Dana Pengajuan PKM</label>
							<div class="input-group">
								<span class="input-group-addon">Rp.</span>
								<input type="text" name="dana_pkm" id="danapkm" class="validate[required] form-control" placeholder="Contoh : 12.500.000" value="{{$pkm->dana_pkm}}">
							</div>
							<label class="text-danger" id="textDana"></label>
						</div>
						<div class="form-group" id="form-durasi">
							<label>Durasi Penelitian</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa fa-calendar fa-fw"></i></span>
								<select class="validate[required] form-control" name="durasi">
									<option hidden value="{{$pkm->durasi}}">{{$pkm->durasi}} Bulan</option>
									<option value="1">1 Bulan</option>
									<option value="2">2 Bulan</option>
									<option value="3">3 Bulan</option>
									<option value="4">4 Bulan</option>
									<option value="5">5 Bulan</option>
								</select>
							</div>
						</div>
						@endif
						<div class="form-group">
							<label>Dosen Fakultas</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-university fa-fw"></i></span>
								<select class="validate[required] form-control" name="id_fakultas" id='id_fakultas'>
									<option value="">-- Nama Fakultas --</option>
									@foreach($list_fakultas as $fakultas)
									<option value="{{$fakultas->id }}">{{ $fakultas->nama_fakultas }}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group">
							<label>Nama Dosen</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user-md fa-fw"></i></span>
								<select class="validate[required] form-control" name="nama_dosen" id='nama_dosen'>
									<option value="">-- Nama Dosen --</option>
									<option value="{{ $pkm->nama_dosen }}" selected>{{ $pkm->nama_dosen }}</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label>NIDN/NIDK Dosen</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-thumb-tack fa-fw"></i></span>
								<input type="hidden" name="tipenidn" id="tipenidn">
								<input type="hidden" name="kodedosen" id="kodedosen" value="{{Crypt::encryptString($pkm->id_dosen)}}">
								@if($pkm->nidn_dosen == "" && $pkm->nidk_dosen == "")
								<input type="text" readonly name="nidn_dosen" id="nidn_dosen" class="disabled validate[required] form-control" placeholder="NIDN/NIDK Dosen Pendamping" value="{{ $pkm->nip_dosen }}">
								@else
								@if($pkm->nidn_dosen != "")
								<input type="text" readonly name="nidn_dosen" id="nidn_dosen" class="disabled validate[required] form-control" placeholder="NIDN/NIDK Dosen Pendamping" value="{{ $pkm->nidn_dosen }}">
								@else
								<input type="text" readonly name="nidn_dosen" id="nidn_dosen" class="disabled validate[required] form-control" placeholder="NIDN/NIDK Dosen Pendamping" value="{{ $pkm->nidk_dosen }}">
								@endif
								@endif
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<input type="hidden" name="kode_token" value="{{Crypt::encryptString($id)}}">
						<button type="submit" id="saveEdit" class="btn btn-success btn-mini">Simpan</button>
						<button class="btn btn-default btn-mini" data-dismiss="modal">Close</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	@endif

	@endsection

	@section('footer')
	<script type="text/javascript" src="{{url('assets/bower_components/datedropper/js/datedropper.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/jquery.validationEngine-en.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/jquery.validationEngine.js')}}"></script>
	<script>
		(function($) {
			$.fn.checkFileType = function(options) {
				var defaults = {
					allowedExtensions: [],
					success: function() {},
					error: function() {}
				};
				options = $.extend(defaults, options);

				return this.each(function() {

					$(this).on('change', function() {
						var value = $(this).val(),
							file = value.toLowerCase(),
							extension = file.substring(file.lastIndexOf('.') + 1);

						if ($.inArray(extension, options.allowedExtensions) == -1) {
							options.error();
							$(this).focus();
						} else {
							options.success();

						}

					});

				});
			};

		})(jQuery);

		var uploadField = document.getElementById("file");
		uploadField.onchange = function() {
			if (this.files[0].size > 5055650) {
				new PNotify({
					title: 'File Oversize',
					text: 'Maaf, File Max 5MB ',
					type: 'error'
				});
				console.log("file size = " + this.files[0].size + "/5000050")
				this.value = "";
			};
		};

		$(function() {
			$('#file').checkFileType({
				allowedExtensions: ['pdf'],
				error: function() {
					new PNotify({
						title: 'File not PDF',
						text: 'Maaf, hanya type pdf yang diupload ',
						type: 'error'
					});
					document.getElementById("file").value = "";
				}
			});
		});
	</script>
	<script>
		$(document).ready(function() {
			jQuery('.form-validation').validationEngine();
		});

		$('.tambahAnggota').click(function() {
			$('#simpan-anggota').attr('disabled', 'disabled');
			$('.formPrivasi').show();
			$('#tambah-anggota').modal('show');
		});

		$('.uploadProposal').click(function() {
			/*var notice = new PNotify({
						     title: 'Checking..',
						     text: 'Check Sudah Download template PKM',
						     icon: 'icon-spinner4 spinner',
						     type: 'warning'
			//			 });
			var kode = $(this).data('kode');
			$.get("{{ URL::to('/mhs/cekdownlempeng') }}", {kode: kode})
			.done(function(data) {
				if ($.isNumeric(data)) {
					$('#upload-proposal').modal('show');
				} else if(data == "notdownload"){
					new PNotify({
					    title: 'Denied!',
					    text: 'Anda belum download template PKM.',
					    icon: 'icofont icofont-info-circle',
					    type: 'warning'
					});
				} else if(data == "notacc"){
					new PNotify({
					    title: 'Denied!',
					    text: 'Anggota Belum Menerima PKM Anda.',
					    icon: 'icofont icofont-info-circle',
					    type: 'warning'
					});
				}
			})
			.fail(function() {
				new PNotify({
					title: 'Something Like Wrong',
					text: 'Server Error silakan Refresh halaman anda',
					type: 'error'
				});
			});*/
			$('#upload-proposal').modal('show');
		});

		$('#danapkm').on('keyup', function() {
			var input = $(this).val();
			var min = 5000000;
			var max = 12500000;

			if (input <= max && input >= min) {
				//$('#text_akhir').html('Periksa kembali dan pastikan semua terisi dengan benar sesuai pedoman');
				$('#textDana').html('');
				$('#textDana').hide();
				$('#saveEdit').removeAttr('disabled');
			} else {
				$('#textDana').show();
				$('#textDana').html('Dana yang diajukan minimal Rp.' + min + ',- dan maksimal Rp.' + max + ',-');
				//$('#text_akhir').html('Maaf dana pkm anda tidak sesuai dengan pedoman');
				$('#saveEdit').attr('disabled', 'disabled');
			};
		});

		$('.templateBtn').click(function() {
			@if($modetemplate - > konten == "1")
			new PNotify({
				title: 'Silakan Tunggu..',
				text: 'Persiapan Download Tempalte',
				icon: 'icon-spinner4 spinner',
				type: 'warning'
			});
			@else
			new PNotify({
				title: 'Template Deactivated',
				text: 'Maaf.. Download template sedang dinonaktifkan, silakan hubungi TIM PKM Center Fakultas Anda',
				icon: 'icon-spinner4 spinner',
				type: 'error'
			});
			@endif
		});

		$('.revisiProposal').click(function() {
			$('#revisi-proposal').modal('show');
		});

		$('.editPKM').click(function() {
			var fak = "{{$dosen->id_fakultas}}";
			$('#id_fakultas').val(fak);
			$('#textDana').hide();
			$('#edit-pkm').modal('show');
		});
		$('.hapusPKM').click(function() {
			$('#hapus-pkm').modal('show');
		});

		$('#tambah-anggota').on('hidden.bs.modal', function() {
			$(this).find('form').trigger('reset');
			$('.help-block').html('<strong>Silahkan ketik NIM dan klik tombol cari terlebih dahulu.</strong>');
			$('#nim').removeAttr('readonly');
			$('#form').attr('disabled', 'disabled');
			$('.formPrivasi').show();
			$('#peran').attr('disabled', 'disabled');
			$('#simpan-anggota').attr('disabled', 'disabled');
		});

		$('.hapusAnggota').click(function() {
			$nama = $(this).data('namaanggota');
			$('#labelhapusanggota').html('Apakah anda ingin hapus <strong class="text-danger">' + $nama + '</strong> dari pkm anda?');
			$('#kode_data').val($(this).data('kodedata'));
			$('#hapus-anggota').modal('show');
		});

		$('#search').click(function() {
			var nim = $('#nim').val();
			var kode_token = "{{Crypt::encryptString($id)}}";
			var tipe_kode = "{{Crypt::encryptString($pkm->id_tipe_pkm)}}"
			if (nim != '') {
				var input_icon = $(this).parent().children().first().children();
				var input_help = $(this).parent().parent().children().last();

				input_icon.removeClass('fa-user').addClass('fa-spinner fa-spin');
				input_help.hide();

				$.get("{{ URL::to('/mhs/cek-mhs') }}", {
						nim: nim,
						tipe_kode: tipe_kode,
						kode_token: kode_token
					})
					.done(function(result) {
						input_icon.removeClass('fa-spinner fa-spin').addClass('fa-user');
						if ($.isEmptyObject(result)) {
							new PNotify({
								title: 'NIM Not Founded!',
								text: 'Mahasiswa tidak terdaftar.',
								icon: 'icofont icofont-info-circle',
								type: 'error'
							});
							input_icon.removeClass('fa-spinner fa-spin').addClass('fa-user');
							input_help.children().html('Silahkan ketik NIM dan klik tombol cari terlebih dahulu.');
							input_help.show();
							$('#peran').attr('disabled', 'disabled');
							$('#simpan-anggota').attr('disabled', 'disabled');
						} else {
							if ($.isNumeric(result)) {
								new PNotify({
									title: 'Gagal Tambah Anggota!',
									text: 'Anggota sudah mengikuti 2 kelompok.',
									icon: 'icofont icofont-info-circle',
									type: 'error'
								});
								input_icon.removeClass('fa-spinner fa-spin').addClass('fa-user');
								input_help.children().html('Silahkan ketik NIM dan klik tombol cari terlebih dahulu.');
								input_help.show();
								$('#peran').attr('disabled', 'disabled');
								$('#simpan-anggota').attr('disabled', 'disabled');
							} else if ((result.isi.kelengkapan) == "Y" || (result.isi.kelengkapan) == "N") {
								input_help.children().html('Mahasiswa sudah terdaftar silahkan langsung pilih peran dan tombol simpan');
								input_help.show();
								$('#nim').attr('readonly', 'readonly');
								$('#form').attr('disabled', 'disabled');
								$('#kode').val(result.kode);
								$('#nama').val(result.isi.nama);
								$('#prodi').val(result.isi.nama_prodi + ' - ' + result.isi.jenjang_prodi);
								$('.formPrivasi').hide();
								$('.formTelepon').hide();
								if ((result.isi.jenis_kelamin) == "P") {
									$('#jns_kelamin').val("Perempuan");
								} else {
									$('#jns_kelamin').val("Laki-laki");
								}
								$('#peran').removeAttr('disabled');
								$('#simpan-anggota').removeAttr('disabled');
							} else {
								input_help.children().html('Mahasiswa ditemukan silahkan lengkapi data');
								input_help.show();
								$('#nim').attr('readonly', 'readonly');
								$('#form').removeAttr('disabled');
								$('.formTelepon').show();
								$('.formPrivasi').show();
								$('#kode').val(result.kode);
								$('#nama').val(result.isi.nama_mahasiswa);
								$('#prodi').val(result.isi.nama_prodi + ' - ' + result.isi.jenjang_prodi);
								if ((result.isi.jns_kel_mahasiswa) == "P") {
									$('#jns_kelamin').val("Perempuan");
								} else {
									$('#jns_kelamin').val("Laki-laki");
								}
								$('#peran').removeAttr('disabled');
								$('#simpan-anggota').removeAttr('disabled');
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

		$('#fakultas').on('change', function() {
			$('#prodi').html('<option value="">-- Pilih Prodi --</option>');
			var fakultas = $(this).val();
			var input_icon = $('#prodi').parent().children().first().children();
			var input_help = $('#prodi').parent().parent().children().last();

			input_icon.removeClass('fa-university').addClass('fa-spinner fa-spin');
			input_help.hide();

			$.get("{{ URL::to('/prodi') }}", {
					fakultas: fakultas
				})
				.done(function(result) {
					input_icon.removeClass('fa-spinner fa-spin').addClass('fa-university');
					if ($.isEmptyObject(result)) {
						input_help.show();
					} else {
						$.each(result, function(index, value) {
							$('#prodi').append('<option value="' + value.id + '">' + value.nama_prodi + '</option>');
						});
					};
				})
				.fail(function() {
					toastr.error('Kesalahan server! Silahkan ganti fakultas ke pilihan lain dan pilih lagi fakultas anda');
					input_icon.removeClass('fa-spinner fa-spin').addClass('fa-university');
					input_help.children().html('Silahkan pilih fakultas terlebih dahulu.');
					input_help.show();
				});
		});

		$('#nama_dosen').on('change', function() {
			var input_icon = $('#nidn_dosen').parent().children().first().children();
			input_icon.removeClass('fa-thumb-tack').addClass('fa-spinner fa-spin');
			var nama_dosen = $(this).val();
			var id_fakultas = $('#id_fakultas').val();
			$.get("{{ URL::to('/mhs/cek-dosen') }}", {
					nama_dosen: nama_dosen,
					id_fakultas: id_fakultas
				})
				.done(function(result) {
					if ($.isEmptyObject(result.dosen.nidn_dosen) && $.isEmptyObject(result.dosen.nidk_dosen)) {
						input_icon.removeClass('fa-spinner fa-spin').addClass('fa-thumb-tack');
						$('#nidn_dosen').val('');
						$('#kodedosen').val('');
						$('#tipenidn').val('');
						new PNotify({
							title: 'NIDN/NIDK not Found!',
							text: 'Silakan hubungi PKM Center jika ingin menggunakan dosen tersebut',
							icon: 'icofont icofont-info-circle',
							type: 'danger'
						});
					} else {
						if ($.isEmptyObject(result.dosen.nidn_dosen)) {
							input_icon.removeClass('fa-spinner fa-spin').addClass('fa-thumb-tack');
							$('#nidn_dosen').val(result.dosen.nidk_dosen);
							$('#kodedosen').val(result.kode);
							$('#tipenidn').val('NIDK');
							new PNotify({
								title: 'NIDK Only',
								text: 'Dosen masih menggunakan NIDK, atau hubungi PKM Center untuk memperbarui NIDN',
								icon: 'icofont icofont-info-circle',
								type: 'warning'
							});
						} else {
							input_icon.removeClass('fa-spinner fa-spin').addClass('fa-thumb-tack');
							$('#nidn_dosen').val(result.dosen.nidn_dosen);
							$('#kodedosen').val(result.kode);
							$('#tipenidn').val('NIDN');
						}
					}
				})
				.fail(function() {
					input_icon.removeClass('fa-spinner fa-spin').addClass('fa-thumb-tack');
					toastr.error('Kesalahan server! Nidn tidak valid');
				});
		});


		$('#id_fakultas').on('change', function() {
			$('#nama_dosen').html('<option value="">-- Nama Dosen --</option>');
			var id_fakultas = $(this).val();
			var tipepkm = "{{Crypt::encryptString($pkm->id_tipe_pkm)}}";
			var input_icon = $('#nama_dosen').parent().children().first().children();

			input_icon.removeClass('fa-user-md').addClass('fa-spinner fa-spin');

			$.get("{{ URL::to('/mhs/dosen-fakultas') }}", {
					id_fakultas: id_fakultas,
					tipepkm: tipepkm
				})
				.done(function(result) {

					if ($.isEmptyObject(result)) {
						input_icon.removeClass('fa-spinner fa-spin').addClass('fa-user-md');
						input_help.show();
						new PNotify({
							title: 'Dosen Not Founded!',
							text: 'Dosen tidak ditemukan.',
							icon: 'icofont icofont-info-circle',
							type: 'error'
						});
					} else {
						input_icon.removeClass('fa-spinner fa-spin').addClass('fa-user-md');
						$.each(result, function(index, value) {
							$('#nama_dosen').append('<option value="' + value.nama_dosen + '">' + value.nama_dosen + '</option>');
						});
					};
				})
				.fail(function(result) {
					toastr.error('Kesalahan server! Hasil tidak valid');
				});
		});

		$('#edit-pkm').on('hidden.bs.modal', function() {
			$(this).find('form').trigger('reset');
		});

		$('.aktifkanAnggota').click(function() {
			var code = "{{ csrf_token() }}";
			var tipekode = "{{Crypt::encryptString($pkm->id_file_pkm)}}";
			var kode = $(this).data('kode');
			swal({
				title: "Terima?",
				text: "Apakah anda yakin menerima sebagai Anggota PKM ini?",
				type: "warning",
				showCancelButton: true,
				showLoaderOnConfirm: true,
				confirmButtonText: "Terima ?",
				closeOnConfirm: false
			}, function() {
				$.ajax({
					url: "{{url('mhs/accanggota')}}",
					type: "POST",
					data: {
						_token: code,
						tipekode: tipekode,
						kode: kode
					},
					success: function() {
						swal("Diterima!", "Anda menerima PKM ini", "success");
						setTimeout(function() {
							location.reload();
						}, 1500);
					},
					error: function(xhr, ajaxOptions, thrownError) {
						swal("Gagal Menerima!", "Silakan Coba Lagi", "error");
					}
				});
			});
		});
	</script>
	@endsection