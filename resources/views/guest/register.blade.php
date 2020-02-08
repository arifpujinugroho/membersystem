@extends('guest.front-master')

@section('title')
Registrasi
@stop

@section('header')
<link rel="stylesheet" type="text/css" href="{{url('assets/css/validationEngine.jquery.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/pages/data-table/css/buttons.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/pages/data-table/extensions/buttons/css/buttons.dataTables.min.css')}}">
@endsection

@section('content')

    {{-- Page-body start --}}
    <div class="page-body">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-block">
                <form method="POST" action="{{ url('daftar') }}" class="form-validation" id="number_form"  enctype="multipart/form-data">
                    @csrf
					<input type="hidden" name="kode" id="kode">
						<div class="form-group">
							<label>Email<strong class="text-danger">*</strong></label>
							<div class="input-group">
								<input type="email" name="email" id="email" class="validate[required] form-control" placeholder="Email" autocomplete="off">
							</div>
						</div>
							<div class="form-group">
								<label>Password <strong class="text-danger">*</strong></label>
								<div class="input-group">
									<input type="password" name="password" id="password" class="validate[required,minSize[6]] form-control" placeholder="Password" autocomplete="off">
								</div>
							</div>
							<div class="form-group">
								<label>Ulangi Password <strong class="text-danger">*</strong></label>
								<div class="input-group">
									<input type="password" name="password_ulang" class="validate[required,equals[password]] form-control" placeholder="Ulangi Password" autocomplete="off">
								</div>
							</div>
						<div class="form-group">
							<label>Nama Lengkap<strong class="text-danger">*</strong></label>
							<div class="input-group">
								<input type="text" name="nama" id="nama" class="validate[required] form-control" placeholder="Nama Lengkap">
							</div>
						</div>
                        <div class="form-group">
					    		<label>Nama Instansi</label>
					    	<div class="input-group">
					    		<input type="text" name="instansi" id="nama_instansi" class="validate[required] form-control text-capitalize" readonly placeholder="Klik cari terlebih dahulu ==>">
					    		<span class="input-group-addon cursor-hand" id="search">Cari <i class="fa fa-search fa-fw"></i></span>
					    		<span class="input-group-addon cursor-hand bg-warning" id="reset">Reset Instansi</span>
					    	</div>
					    </div>
                            <div class="form-group">
                              <label for="jns_kel">Jenis Kelamin</label>
                              <select class="validate[required] form-control" name="jns_kel" id="jns_kel">
                                <option value="">-- Jenis Kelamin --</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="alamat">Alamat</label>
                              <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Alamat"></textarea>
                            </div>
						<div class="form-group">
							<label>Nomer Telepon <strong class="text-danger">*</strong></label>
							<div class="input-group">
								<input type="text" name="telepon" id="telepon" class="validate[custom[number]] form-control" placeholder="Format : 628XXXXXXXXX" required>
							</div>
						</div>
						<div class="form-group">
							<label>Tempat Lahir <strong class="text-danger">*</strong></label>
							<div class="input-group">
								<input type="text" name="tempatlahir" id="tempatlahir" class="validate[required] form-control" placeholder="Tempat Lahir" required>
							</div>
						</div>
						<div class="form-group">
							<label>Tanggal Lahir <strong class="text-danger">*</strong></label>
							<div class="input-group">
								<input type="date" name="tanggallahir" id="tanggallahir" class="validate[required] form-control" placeholder="Tanggal Lahir" required>
							</div>
						</div>
						<div class="form-group">
							<label>Pas Foto <strong class="text-danger">*</strong> (max size 5MB)</label>
							<div class="input-group">
								<input type="file" name="pasfoto" id="pasfoto" class="validate[required] form-control" placeholder="Passfoto">
							</div>
						</div>
                    <br>
                            <span>Perhatikan!! tanda ( <strong class="text-danger">*</strong> )  wajib untuk diisi</span>
                            <button type="submit" id="daftar" class="btn btn-success m-b-0 f-right">Daftar</button>
                </form>

            </div>
        </div>
    </div>
    {{-- Page-body end --}}

@endsection

@section('end')

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
     <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title">Daftar Instansi</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
             </div>
             <div class="modal-body">
                <div class="table-responsive">
                <table id="lookup" class="table table-hover table-striped" width="100%">
                    <thead>
                        <tr>
                            <th style="max-width:10%">Aksi</th>
                            <th style="max-width:45%">Nama Instansi</th>
                            <th style="max-width:45%">Singkatan Instansi</th>
                        </tr>
                    </thead>
                </table>
                </div>
                <hr>
                <p>Jika instansi tidak terdapat di tabel ini maka klik => <button id="tambahModal" class="btn btn-mini btn-warning">Tambah Instansi</button></p>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-mini btn-secondary" data-dismiss="modal">Close</button>
             </div>
         </div>
     </div>
 </div>

 <div class="modal fade" id="tambahLink" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_link">Tambah Instansi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="id_link">
                <div class="form-group">
                  <label for="judulfile">Nama Instansi Lengkap <small class="text-danger">(wajib)</small></label>
                  <input type="text" class="form-control" id="formnamatoko" placeholder="Nama Lengkap Instansi">
                </div>
                <div class="form-group">
                  <label for="judulfile">Nama Instansi Singkat <small>optional</small></label>
                  <input type="text" class="form-control" id="formnamapendek" placeholder="Singkatan Instansi">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="tbh_toko" class="btn btn-mini btn-primary">Tambah</button>
                <button type="button" class="btn btn-mini btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
    <script src="{{url('assets/custom/daftar.js')}}"></script>
    <script src="{{url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('assets/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{url('assets/pages/data-table/js/jszip.min.js')}}"></script>
    <script src="{{url('assets/pages/data-table/js/pdfmake.min.js')}}"></script>
    <script src="{{url('assets/pages/data-table/js/vfs_fonts.js')}}"></script>
    <script src="{{url('assets/pages/data-table/extensions/buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{url('assets/pages/data-table/extensions/buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{url('assets/pages/data-table/extensions/buttons/js/jszip.min.js')}}"></script>
    <script src="{{url('assets/pages/data-table/extensions/buttons/js/vfs_fonts.js')}}"></script>
    <script src="{{url('assets/pages/data-table/extensions/buttons/js/buttons.colVis.min.js')}}"></script>
    <script src="{{url('assets/bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{url('assets/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{url('assets/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{url('assets/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{url('assets/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/jquery.validationEngine-en.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/jquery.validationEngine.js')}}"></script>


<script type="text/javascript">
	$(document).ready(function(){
		jQuery('.form-validation').validationEngine();
		$('#notis-danger').hide();
		$('#reset').hide();
        $('#search').show();
    });

    $('#search').click(function(){
        $('#myModal').modal('show');
    });
</script>






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

    var uploadField = document.getElementById("pasfoto");
    uploadField.onchange = function() {
        if(this.files[0].size > 5055650){
            new PNotify({
                    title: 'File Oversize',
                    text: 'Maaf, File Max 5MB ',
                    type: 'error'
            });
            console.log("file size = " + this.files[0].size + "/5055650")
            this.value = "";
        };
    };

    $(function() {
        $('#pasfoto').checkFileType({
            allowedExtensions: ['jpg', 'jpeg','png'],
            error: function() {
                new PNotify({
                    title: 'File not Image',
                    text: 'Maaf, hanya type image yang diupload ',
                    type: 'error'
                });
                document.getElementById("pasfoto").value = "";
            }
        });
    });
</script>
@endsection
