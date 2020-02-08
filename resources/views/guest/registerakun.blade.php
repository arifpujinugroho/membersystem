@extends('guest.front-master')

@section('title')
Registrasi
@stop

@section('header')
<link rel="stylesheet" type="text/css" href="{{url('assets/css/validationEngine.jquery.css')}}">
@endsection

@section('content')
    {{-- Page-header start --}}
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont-file-code bg-c-blue"></i>
                    <div class="d-inline">
                    <h4>Registrasi Akun</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/') }}">
                        <i class="icofont icofont-home"></i>
                    </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Registrasi</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
	{{-- Page-header end --}}


    {{-- Page-body start --}}
    <div class="page-body">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-block">
                <form method="POST" action="{{ url('daftarsso') }}" class="form-validation" id="number_form"  enctype="multipart/form-data">
                    @csrf
					<input type="hidden" name="kode" value="{{Crypt::encrypt(Auth::user()->identitas_mahasiswa->email)}}">
						<div class="form-group">
							<label>Nama Mahasiswa <small>(otomatis terisi)</small></label>
							<div class="input-group">
								<input type="text" name="nama" value="{{Auth::user()->identitas_mahasiswa->nama}}" class="validate[required] form-control" placeholder="Nama Mahasiswa (Terisi Otomatis)" readonly>
							</div>
						</div>
						<div class="form-group">
							<label>Prodi Mahasiswa <small>(otomatis terisi)</small></label>
							<div class="input-group">
								<input type="text" value="{{$prodi->nama_prodi}} - {{$prodi->jenjang_prodi}}" class="validate[required] form-control" placeholder="Prodi Mahasiswa (Terisi Otomatis)" readonly>
							</div>
						</div>
                        <hr>
						<div class="form-group">
							<label>Alamat di Jogja<strong class="text-danger">*</strong></label>
							<div class="input-group">
								<textarea class="validate[required] form-control" rows="3" name="alamat" id="alamat" placeholder="Alamat" required>{{Auth::user()->identitas_mahasiswa->alamat}}</textarea>
							</div>
						</div>
						<div class="form-group">
							<label>Nomer Telepon <strong class="text-danger">*</strong></label>
							<div class="input-group">
								<input type="text" name="telepon" id="telepon" class="validate[custom[phone]] form-control" value="{{Auth::user()->identitas_mahasiswa->telepon}}" placeholder="Format : 628XXXXXXXXX" required>
							</div>
						</div>
						<div class="form-group">
							<label>Nomer Telepon Cadangan <small>(Optional)</small></label>
							<div class="input-group">
								<input type="text" name="backup_telepon" id="backup_telepon" class="form-control" value="{{Auth::user()->identitas_mahasiswa->backup_telepon}}" placeholder="Format : 628XXXXXXXXX">
							</div>
						</div>
						<div class="form-group">
							<label>Ukuran Baju <strong class="text-danger">*</strong></label>
							<div class="input-group">
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
						<div class="form-group">
							<label>Pas Foto <strong class="text-danger">*</strong> (max size 5MB)</label>
							<div class="input-group">
								<input type="file" name="pasfoto" id="pasfoto" class="form-control" placeholder="Passfoto" required>
							</div>
						</div>
                    <br>
                            <span>Perhatikan!! tanda ( <strong class="text-danger">*</strong> )  wajib untuk diisi</span>
                            <button type="submit"  class="btn btn-success m-b-0 f-right" >Daftar</button>
                </form>

            </div>
        </div>
    </div>
    {{-- Page-body end --}}

@endsection

@section('footer')
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
<script type="text/javascript">
	$(document).ready(function(){
        jQuery('.form-validation').validationEngine();
        var baju = "{{Auth::user()->identitas_mahasiswa->ukuranbaju}}";
        $('#ukuranbaju').val(baju);
	});

	function reset_form() {
    $('#daftar').attr('disabled', 'disabled');
    $('#tambahan').attr('disabled', 'disabled');
    $('#email').removeAttr('readonly');
    $('#biodata').hide();
    $('#kode').val('');
	$('#notis-danger').hide();
    $('#number_form')[0].reset();
    $('#search').show();
    $('#reset').hide();
};
</script>
@endsection
