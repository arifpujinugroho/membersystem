<Script type="text/javascript">
    $(document).ready(function () {
//notify
    //guest
        @if (session('pasfoto') == "success")
            new PNotify({
                title: 'Berhasil Diupdate',
                text: 'Foto berhasil diupdate',
                icon: 'icofont icofont-info-circle',
                type: 'success'
            });
        @endif
        @if (session('pasfoto') == "failed")
            new PNotify({
                title: 'Gagal Update',
                text: 'Mohon cek kembali fotonya atau hubungi TIM IT PKM Center',
                icon: 'icofont icofont-info-circle',
                type: 'error'
            });
        @endif
	@if (session('validator') == "failed")
            new PNotify({
                title: 'Access Denied!',
                text: 'Maaf, System gagal memvalidasi!',
                icon: 'icofont icofont-info-circle',
                type: 'error'
            });
        @endif
        @if (session('dikti') == "success")
            new PNotify({
                title: 'Berhasil Diupdate',
                text: 'Akun Simbelmawa berhasil diupdate',
                icon: 'icofont icofont-info-circle',
                type: 'success'
            });
        @endif
        @if (session('data') == "success")
            new PNotify({
                title: 'Berhasil Diupdate',
                text: 'Biodata berhasil diupdate',
                icon: 'icofont icofont-info-circle',
                type: 'success'
            });
        @endif
        @if (session('data') == "failed")
            new PNotify({
                title: 'Gagal Update',
                text: 'Mohon cek kembali biodatanya atau hubungi TIM IT PKM Center',
                icon: 'icofont icofont-info-circle',
                type: 'error'
            });
        @endif
        @if (session('register') == "success")
            new PNotify({
                title: 'Registrasi Berhasil',
                text: 'Silakan cek email uny anda untuk aktivasi',
                icon: 'icofont icofont-info-circle',
                type: 'success'
            });
        @endif
        @if (session('password') == "success")
            new PNotify({
                title: 'Berhasil',
                text: 'Password anda sudah berhasil diganti',
                icon: 'icofont icofont-info-circle',
                type: 'success'
            });
        @endif
        @if (session('password') == "success")
            new PNotify({
                title: 'Berhasil',
                text: 'Password anda sudah berhasil diganti',
                icon: 'icofont icofont-info-circle',
                type: 'success'
            });
        @endif
        @if (session('password') == "old")
            new PNotify({
                title: 'Failed',
                text: 'Password tidak boleh seperti sebelumnya!',
                icon: 'icofont icofont-info-circle',
                type: 'warning'
            });
        @endif
        @if (session('cache') == "clear")
            new PNotify({
                title: 'Great!',
                text: 'Cache and Session Clear',
                icon: 'icofont icofont-info-circle',
                type: 'success'
            });
        @endif
        @if (session('login') == "error")
            new PNotify({
                title: 'Gagal Login',
                text: 'Mohon cek kembali Email dan Password anda atau Hubungi Admin Web',
                icon: 'icofont icofont-info-circle',
                type: 'error'
            });
        @endif
        @if (session('login') == "denied")
            new PNotify({
                title: 'Access Denied!',
                text: 'Maaf anda harus login dahulu',
                icon: 'icofont icofont-info-circle',
                type: 'warning'
            });
        @endif
        @if (session('login') == "logout")
            new PNotify({
                title: 'Logout Successful!',
                text:  'Logout Success.',
                icon: 'icofont icofont-businessman',
                type: 'success'
            });
        @endif
        @if (session('login') == "notverified")
            new PNotify({
                title: 'Account not verified!',
                text: 'Silakan verifikasi di email student anda atau Hubungi PKM Center Fakultas Anda!',
                icon: 'icofont icofont-info-circle',
                type: 'error'
            });
        @endif
        @if (session('login') == "notadmin")
            new PNotify({
                title: 'Access Denied!',
                text: 'Maaf status akses anda bukan sebagai Admin!',
                icon: 'icofont icofont-info-circle',
                type: 'error'
            });
        @endif
        @if (session('login') == "notperekap")
            new PNotify({
                title: 'Access Denied!',
                text: 'Maaf status akses anda bukan sebagai Perekap!',
                icon: 'icofont icofont-info-circle',
                type: 'error'
            });
        @endif
        @if (session('login') == "notmahasiswa")
            new PNotify({
                title: 'Access Denied!',
                text: 'Maaf status akses anda bukan sebagai Mahasiswa!',
                icon: 'icofont icofont-info-circle',
                type: 'error'
            });
        @endif
        @if (session('login') == "notoperator")
            new PNotify({
                title: 'Access Denied!',
                text: 'Maaf status akses anda bukan sebagai Operator!',
                icon: 'icofont icofont-info-circle',
                type: 'error'
            });
        @endif
        @if (session('login') == "notkemahasiswaan")
            new PNotify({
                title: 'Access Denied!',
                text: 'Maaf status akses anda bukan sebagai Kemahasiswaan!',
                icon: 'icofont icofont-info-circle',
                type: 'error'
            });
        @endif
        @if (session('login') == "notreviewer")
            new PNotify({
                title: 'Access Denied!',
                text: 'Maaf status akses anda bukan sebagai Reviewer!',
                icon: 'icofont icofont-info-circle',
                type: 'error'
            });
        @endif
        @if (session('login') == "notdosen")
            new PNotify({
                title: 'Access Denied!',
                text: 'Maaf status akses anda bukan sebagai Dosen!',
                icon: 'icofont icofont-info-circle',
                type: 'error'
            });
        @endif
        @if (session('login') == "notlogin")
            new PNotify({
                title: 'Access Denied!',
                text: 'Maaf, anda belum login',
                icon: 'icofont icofont-info-circle',
                type: 'error'
            });
        @endif
        @if (session('login') == "notguest")
            new PNotify({
                title: 'URL failed!',
                text: 'Maaf, anda sedang login',
                icon: 'icofont icofont-info-circle',
                type: 'error'
            });
        @endif
        @if (session('createpkm') == "created")
            new PNotify({
                title: 'Gagal Tambah PKM!',
                text: 'Maaf, anda sudah buat PKM.',
                icon: 'icofont icofont-info-circle',
                type: 'error'
            });
        @endif
        @if (session('createpkm') == "success")
            new PNotify({
                title: 'Berhasil',
                text: 'Segera lengkapi Anggota PKM',
                icon: 'icofont icofont-businessman',
                type: 'success'
            });
        @endif
        @if (session('tbhanggota') == "success")
            new PNotify({
                title: 'Berhasil',
                text: 'Anggota berhasil ditambah',
                icon: 'icofont icofont-businessman',
                type: 'success'
            });
        @endif
        @if (session('tbhanggota') == "peran")
            new PNotify({
                title: 'Peran sudah ada!',
                text: 'Periksa peran yang cantumkan, pastikan tidak dipakai dengan anggota lain',
                icon: 'icofont icofont-info-circle',
                type: 'warning'
            });
        @endif
        @if (session('pkm') == "kosong")
            new PNotify({
                title: 'PKM tidak ada!',
                text: 'Maaf PKM tersebut tidak ada',
                icon: 'icofont icofont-info-circle',
                type: 'warning'
            });
        @endif
        @if (session('dana') == "tidakdinanai")
            new PNotify({
                title: 'PKM tidak didanai!',
                text: 'Maaf PKM tersebut tidak didanai',
                icon: 'icofont icofont-info-circle',
                type: 'warning'
            });
        @endif
        @if (session('dana') == "empty")
            new PNotify({
                title: 'Dana PKM tidak ada!',
                text: 'Maaf Dana PKM tersebut tidak ada',
                icon: 'icofont icofont-info-circle',
                type: 'warning'
            });
        @endif
        @if (session('dana') == "nothing")
            new PNotify({
                title: 'Dana PKM bukan milik anda!',
                text: 'Maaf Dana PKM tersebut bukan milik anda',
                icon: 'icofont icofont-info-circle',
                type: 'error'
            });
        @endif
        @if (session('nota') == "empty")
            new PNotify({
                title: 'Nota tidak ada!',
                text: 'Maaf Nota tersebut tidak ada',
                icon: 'icofont icofont-info-circle',
                type: 'warning'
            });
        @endif
        @if (session('nota') == "nothing")
            new PNotify({
                title: 'Nota bukan milik anda!',
                text: 'Maaf Nota tersebut bukan milik anda',
                icon: 'icofont icofont-info-circle',
                type: 'error'
            });
        @endif
        @if (session('nota') == "create")
            new PNotify({
                title: 'Nota Ditambah!',
                text: 'Segera Tambahkan Transaksi yang terdapat dalam Nota',
                icon: 'icofont icofont-info-circle',
                type: 'success'
            });
        @endif
        @if (session('nota') == "update")
            new PNotify({
                title: 'Updated',
                text: 'Nota ini berhasil Diperbaharuhi',
                icon: 'icofont icofont-info-circle',
                type: 'success'
            });
        @endif
        @if (session('hpsaggt') == "success")
            new PNotify({
                title: 'Berhasil Hapus',
                text: 'Anggota berhasil dihapus',
                icon: 'icofont icofont-businessman',
                type: 'success'
            });
        @endif
        @if (session('upload') == "success")
            new PNotify({
                title: 'Berhasil diunggah',
                text: 'File telah berhasil diunggah',
                icon: 'icofont icofont-businessman',
                type: 'success'
            });
        @endif
        @if (session('editpkm') == "success")
            new PNotify({
                title: 'Berhasil diedit',
                text: 'PKM anda telah berhasil diubah',
                icon: 'icofont icofont-businessman',
                type: 'success'
            });
        @endif
        @if (session('hapuspkm') == "success")
            new PNotify({
                title: 'PKM berhasil dihapus',
                text: 'PKM anda telah berhasil dihapus',
                icon: 'icofont icofont-businessman',
                type: 'success'
            });
        @endif
        @if (session('aktivasi') == "success")
            new PNotify({
                title: 'Berhasil',
                text: 'Akun Berhasil Teraktivasi',
                icon: 'icofont icofont-businessman',
                type: 'success'
            });
        @endif
        @if (session('callcenter') == "success")
            new PNotify({
                title: 'Berhasil',
                text: 'Call Center Berhasil ditambah',
                icon: 'icofont icofont-businessman',
                type: 'success'
            });
        @endif
        @if (session('callcenter') == "deleted")
            new PNotify({
                title: 'Berhasil',
                text: 'Call Center berhasil dihapus',
                icon: 'icofont icofont-businessman',
                type: 'success'
            });
        @endif
        @if (session('callcenter') == "sudahada")
            new PNotify({
                title: 'Opps..',
                text: 'Data Call Center sudah ada.',
                icon: 'icofont icofont-businessman',
                type: 'warning'
            });
        @endif
//sweetalert
        @if (session('register') == "updated")
                swal("Updated Data!", "Data sudah di update :)", "success");
        @endif
        @if (session('register') == "registered")
            swal("User Registered", "Mahasiswa telah terdaftar", "error");
        @endif
    });
    $('.coomingsoon').click(function() {
        new PNotify({
                    title: 'Cooming Soon',
                    text: 'Maaf fitur belum tersedia',
                    icon: 'icofont icofont-info-circle',
                    type: 'warning'
        });
    });
    $('.nothing-cc').click(function() {
        new PNotify({
                    title: 'Call Center Belum ada',
                    text: 'Maaf PKM Center Fakultas anda belum menambahkan daftar call center',
                    icon: 'icofont icofont-info-circle',
                    type: 'warning'
        });
    });
    $('.offupload').click(function() {
        new PNotify({
                    title:'Opps.. Maaf!',
                    text: 'Sistem tambah PKM sudah ditutup',
                    icon: 'icofont icofont-info-circle',
                    type: 'error'
        });
    });
</Script>
