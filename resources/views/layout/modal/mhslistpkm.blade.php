@section('end')
<!-- Modal -->
<div class="modal fade" id="promise-pkm" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Perhatian</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
            <form action="{{url('mhs/tambah-pkm')}}" method="get">
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" name="pertama" id="pertama" value="Yes" class="custom-control-input" required>
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description">Secara sadar, saya pastikan bahwa <strong class="text-danger">saya adalah ketua kelompok</strong>  dari proposal yang diajukan.</span>
                </label>
                <br>
		<label class="custom-control custom-checkbox">
                  <input type="checkbox" id="tambahan" value="Yes" class="custom-control-input" required>
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description">Saya sudah membaca dan memahami Pedoman PKM yang terbaru.</span>
                </label>
                <br>

                <label class="custom-control custom-checkbox">
                  <input type="checkbox" name="kedua" id="kedua" value="Yes" class="custom-control-input" required>
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description">Bilamana terdapat kesalahan dalam susunan personalia proposal ini, kelompok kami siap untuk didiskualifikasi.</span>
                </label>
                <br>
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" name="ketiga" id="ketiga" value="Yes" class="custom-control-input" required>
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description">Judul pada proposal yang diusulkan <strong class="text-danger">tidak melebihi 20 kata</strong>.</span>
                </label>
                <br>
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" name="keempat" id="keempat" value="Yes" class="custom-control-input" required>
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description">Tandatangan pada lembar pegesahan proposal bukan merupakan <i>cropping</i></span>
                </label>
                <br>
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" name="kelima" id="kelima" value="Yes" class="custom-control-input" required>
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description">Tandatangan pada biodata kelompok dan dosen pembimbing bukan merupakan <i>cropping</i></span>
                </label>
                <br>
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" name="keenam" id="keenam" value="Yes" class="custom-control-input" required>
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description">Halaman proposal dari <strong>Bab 1 sampai Daftar pustaka sebanyak 10 lembar</strong></span>
                </label>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Saya Sudah Membacanya</button>
            </form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection

