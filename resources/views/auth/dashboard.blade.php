@extends('layout.master')

@section('title')
{{Auth::user()->name}}
@endsection

@section('header')

@endsection

@section('content')
    <!-- Page-header start -->
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont-listine-dots bg-c-lite-green"></i>
                    <div class="d-inline">
                        <h4>Data Identitas</h4>
                        <span>Informasi Anggota yang telah terdaftar</span>
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
                <li class="breadcrumb-item"><a href="#!">Biodata</a>
                </li>
            </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->
@if (Auth::user()->bukti == "")
<div class="alert alert-danger">
        <strong>Maaf anda belum upload bukti pembayaran <br>
        Mohon untuk mengupload bukti pembayaran anda, terima kasih</strong>
</div>
@else
@if(Auth::user()->email_verified_at == "")
<div class="alert alert-warning">
        <strong>Status keanggotaan belum aktif <br>
        Mohon menunggu Admin untuk mengkonfirmasi dan mengaktifkan keanggotaan anda, terima kasih</strong>
</div>
@endif
@endif

    <!-- Page body start -->
    <div class="page-body">
            <div class="row">
                <div class="col-md-12">
                    <!-- Product detail page start -->
                    <div class="card product-detail-page">
                        <div class="card-block">
                            <div class="row">
                                <div class="col-lg-5 col-xs-12">
                                    <div class="port_details_all_img row">
                                        <div class="col-lg-12 m-b-15">
                                            <div id="big_banner">
                                                <div class="port_big_img">
                                                    <img class="img img-fluid" src="{{url('files/pasfoto/'.Auth::user()->foto)}}" alt="Foto {{Auth::user()->name}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-xs-12 product-detail">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="btn-group f-right">
                                            @if(is_null(Auth::user()->email_verified_at))
                                                @if(is_null(Auth::user()->bukti))
                                                <button id="uploadBukti" data-kode="{{\Crypt::encryptString(Auth::user()->id)}}" class="btn btn-warning btn-mini">Upload Pembayaran</button>
                                                @else
                                                <button id="lihatBukti" data-file="{{Auth::user()->bukti}}" class="btn btn-success btn-mini">Lihat Pembayaran</button>
                                                <button id="reuploadBukti" data-kode="{{\Crypt::encryptString(Auth::user()->id)}}" class="btn btn-danger btn-mini">Upload Ulang Pembayaran</button>
                                                @endif
                                            @else
                                                @if(Auth::user()->level == "Anggota")
                                                    <button id="lihatKartu" data-kode="{{\Crypt::encryptString(Auth::user()->id)}}" class="btn btn-primary btn-mini"><i class="fa fa-print" aria-hidden="true"></i> kartu anggota</button>
                                                @endif
                                            @endif
                                            </div>
                                        </div>
                                        <div>
                                            <div class="col-lg-12">
                                                <h1 class="pro-desc f-w-300 text-capitalize"><strong> {{Auth::user()->name}} </strong></h1>
                                            </div>
                                        </div>
                                            <div class="col-lg-12">
                                                    <span class="text-primary product-price">{{$instansi}}</span>
                                                <br>
                                                <hr>
                                                <br>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="btn-group f-right">
                                                </div>
                                                <p><strong>Email : </strong> {{Auth::user()->email}}</p>
                                                <p><strong>Alamat : </strong> {{Auth::user()->alamat}}</p>
                                                <p><strong>Jenis Kelamin : </strong>
                                                    @if(Auth::user()->jns_kel == "L")
                                                    Laki-Laki
                                                    @else
                                                    Perempuan
                                                    @endif
                                                </p>
                                                <p><strong>Telepon : </strong> {{Auth::user()->telepon}}</p>
                                                <p class="text-capitalize"><strong>Tempat Lahir : </strong> {{Auth::user()->tempatlahir}}</p>
                                                <p><strong>Tanggal Lahir : </strong> {{TglIndo::Tgl_indo(Auth::user()->tanggallahir)}}</p>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product detail page end -->
                </div>
            </div>
        </div>
        <!-- Page body end -->
@endsection

@section('end')
<!-- Modal -->
<div class="modal fade" id="modalBukti" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <form action="{{url('uploadbukti')}}" method="post" class="form-validation" id="number_form"  enctype="multipart/form-data">
            @csrf
            <div class="modal-body" id="bodyfile">
            </div>
            <div class="modal-body" id="bodybukti">
                <div class="form-group" id="filebukti">
                    <label for="formBukti">Foto Bukti Pembayaran</label>
                    <input type="file" class="form-control" name="formBukti" id="formBukti" placeholder="Foto Bukti Pembayaran">
                    <small id="fileHelpId" class="form-text text-danger">Max file 5MB dan berformat gambar</small>
                </div>
            </div>
            <div class="modal-footer">
                <button id="btnSimpanBukti" class="btn btn-mini btn-success">Upload</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection


@section('footer')
    <script src="{{url('assets/custom/dashboard.js')}}"></script>


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

    var uploadField = document.getElementById("formBukti");
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
        $('#formBukti').checkFileType({
            allowedExtensions: ['jpg', 'jpeg','png'],
            error: function() {
                new PNotify({
                    title: 'File not Image',
                    text: 'Maaf, hanya type image yang diupload ',
                    type: 'error'
                });
                document.getElementById("formBukti").value = "";
            }
        });
    });
</script>
@endsection
