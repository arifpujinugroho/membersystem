@section('end')
{{--<div class="modal fade" id="ubah-password" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="{{url('mhs/gantipass')}}"  method="post">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-id-card"></i></span>
                                <input type="password" name="password" id="formpassword" minlength="6" class="form-control" placeholder="Password" value="{{Crypt::decrypt(Auth::user()->identitas_mahasiswa->crypt_token)}}" required>
                                <span class="input-group-addon bg-warning" id="show" onclick="ShowPassword()"><i class="icofont icofont-eye-blocked"></i></span>
                                <span class="input-group-addon bg-warning" style="display:none" id="hide" onclick="HidePassword()"><i class="icofont icofont-eye"></i></span>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </form>
            </div>
        </div>
    </div>
</div>--}}

<div class="modal fade" id="ubah-foto" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah Foto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
            <form action="{{url('mhs/gantifoto')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                              <label for="">Pas Foto (max 5 Mb)</label>
                              <input type="file" class="form-control" name="foto" id="foto" placeholder="Foto" required>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div></form>
        </div>
    </div>
</div>


<div class="modal fade" id="edit-biodata" tabindex="-1" role="dialog" aria-labelledby="tambahAnggotaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="tambahAnggotaLabel">Edit Biodata</h4>
            </div>
        <form action="{{url('mhs/gantidata')}}" method="post">
        @csrf
            <div class="modal-body">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-home fa-fw"></i></span>
                            <textarea class="validate[required] form-control" rows="3" name="alamat" id="alamat" placeholder="Alamat Anggota" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-whatsapp fa-fw"></i></span>
                            <input type="text" name="telepon" id="telepon" class="validate[custom[number]] form-control" placeholder="Format : 628XXXXXXXXX" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
                            <input type="text" name="backup_telepon" id="backup_telepon" class=" form-control" placeholder="Format : 628XXXXXXXXX">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-shirtsinbulk fa-fw"></i></span>
                            <select class="validate[required] form-control" name="ukuranbaju" id="ukuranbaju">
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
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Simpan <i class="fa fa-save"></i></button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            </div>
        </form>
        </div>
    </div>
</div>

@endsection





@section('footer')
<script>

    $('#ubahPassword').click(function(){
        $('#ubah-password').modal('show');
    });

    $('#ubahFoto').click(function(){
        $('#ubah-foto').modal('show');
    });

    $('#ubahData').click(function(){
        $('#alamat').val('{{Auth::user()->identitas_mahasiswa->alamat}}');
        $('#telepon').val('{{Auth::user()->identitas_mahasiswa->telepon}}');
        $('#backup_telepon').val('{{Auth::user()->identitas_mahasiswa->backup_telepon}}');
        $('#ukuranbaju').val('{{Auth::user()->identitas_mahasiswa->ukuranbaju}}');
        $('#edit-biodata').modal('show');
    });

    function ShowPassword()
	{
			document.getElementById("formpassword").type="text";
			document.getElementById("show").style.display="none";
			document.getElementById("hide").style.display="block";
	}
	function HidePassword()
	{
			document.getElementById("formpassword").type = "password";
			document.getElementById("show").style.display="block";
			document.getElementById("hide").style.display="none";
	}

</script>
@endsection
