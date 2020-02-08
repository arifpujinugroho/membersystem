@section('end')
<div class="modal fade" id="lihat-mahasiswa" tabindex="-1" role="dialog" aria-labelledby="tambahAnggotaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="tambahAnggotaLabel">Lihat Mahasiswa</h4>
            </div>
            <div class="modal-body">
                    <form action="{{url('opt/ubahdatamhs')}}" id="formulir" class="form-validation" method="POST">
                    @csrf
                    <input type="hidden" name="kode" id="kode">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-male fa-fw"></i></span>
                            <input type="text" id="nama" class="validate[required] form-control" placeholder="Nama Mahasiswa" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-male fa-fw"></i></span>
                            <input type="text" id="nim" class="validate[required] form-control" placeholder="NIM Mahasiswa" readonly>
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
                    <fieldset id="form" disabled>
                    {{--<div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-home fa-fw"></i></span>
                            <textarea class="validate[required] form-control" rows="3" name="alamat" id="alamat" placeholder="Alamat Anggota"></textarea>
                        </div>
                    </div>--}}
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-whatsapp fa-fw"></i></span>
                            <input type="text" name="telepon" id="telepon" class="validate[custom[number]] form-control" placeholder="Telepon Anggota">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
                            <input type="text" name="backup_telepon" id="backup_telepon" class=" form-control" placeholder="Telepon Candangan (Optional)">
                        </div>
                    </div>
                    {{--<div class="form-group">
                        <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-home fa-fw"></i></span>
                            <input type="text" name="tempatlahir" id="tempatlahir" class="validate[required] form-control" placeholder="Tempat Lahir" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                            <input type="date" name="tanggallahir" id="tanggallahir" class="validate[required] form-control" placeholder="Tanggal Lahir" required>
                        </div>
                    </div>--}}
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
                </fieldset>
            </div>
            <div class="modal-footer">
                <button type="submit" id="simpan" class="btn btn-success">Simpan <i class="fa fa-save"></i></button>
        </form>
                <button id="edit" class="editData btn btn-warning">Edit <i class="fa fa-edit"></i></button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>
@endsection


@section('footer')

<!-- data-table js -->

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

<!-- Custom js -->
<script src="{{url('assets/pages/data-table/js/data-table-custom.js')}}"></script>

<script>
    $('.lihatEditData').click(function(){
        var jnskel = $(this).data('jnskel');
        $('#form').attr('disabled','disabled');
        $('#edit').show();
        $('#simpan').hide();
        $('#simpan').attr('disabled','disabled');
        $('#kode').val($(this).data('kode'));
        $('#nama').val($(this).data('nama'));
        $('#nim').val($(this).data('nim'));
        $('#prodi').val($(this).data('prodi'));
        if (jnskel = "L") {
            $('#jns_kelamin').val('Laki-laki');
        } else {
            $('#jns_kelamin').val('Perempuan');
        }
        $('#telepon').val($(this).data('telepon'));
        $('#backup_telepon').val($(this).data('butelepon'));
        $('#ukuranbaju').val($(this).data('ukuranbaju'));
        $('#lihat-mahasiswa').modal('show');
    });

    $('.editData').click(function(){
        $('#form').removeAttr('disabled');
        $('#edit').hide();
        $('#simpan').show();
        $('#simpan').removeAttr('disabled');
    });
</script>
@endsection
