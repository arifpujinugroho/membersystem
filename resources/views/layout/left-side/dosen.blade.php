<li class="{{ (Request::path() == 'dsn') ? 'active' : '' }}">
    <a href="{{ url ('/')}}">
    <span class="pcoded-micon"><i class="ti-home"></i><b>H</b></span>
    <span class="pcoded-mtext" data-i18n="nav.dash.main">Beranda</span>
    <span class="pcoded-mcaret"></span>
    </a>
</li>

@if(Auth::user()->level == "Reviewer")
<li class="{{ (Request::path() == 'reviewer/nilai/proposal' || Request::path() == 'reviewer/nilai/interview' || Request::path() == 'reviewer/cek/dsnistrasi') ? 'active pcoded-trigger' : '' }}  pcoded-hasmenu">
    <a href="javascript:void(0)">
        <span class="pcoded-micon"><i class="ti-receipt"></i><b>CJ</b></span>
        <span class="pcoded-mtext" data-i18n="nav.dash.Fiturtambahan">Menu Perekap</span>
        <span class="pcoded-mcaret"></span>
    </a>
    <ul class="pcoded-submenu">
        <li class="{{ (Request::path() == 'reviewer/nilai/proposal') ? 'active' : '' }}">
            <a href="{{ url ('reviewer/nilai/proposal')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.infodownload">Nilai Proposal</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ (Request::path() == 'reviewer/nilai/interview') ? 'active' : '' }} coomingsoon">
            <a href="#!">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext text-muted" data-i18n="nav.dash.refrensijudul">Nilai Interview</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ (Request::path() == 'viewer/cek/dsnistrasi') ? 'active' : '' }} coomingsoon">
            <a href="#!">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext text-muted" data-i18n="nav.dash.refrensijudul">Cek Administrasi</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
    </ul>
</li>
@endif

<li class="{{ (Request::path() == 'dsn/pilihpkmbimbing' || Request::path() == 'dsn/pilihpkm' || Request::path() == 'dsn/pilihgrafik') ? 'active pcoded-trigger' : '' }} pcoded-hasmenu">
    <a href="javascript:void(0)">
        <span class="pcoded-micon"><i class="ti-layout-media-right"></i><b>T</b></span>
        <span class="pcoded-mtext" data-i18n="nav.invoice.main">PKM</span>
        <span class="pcoded-mcaret"></span>
    </a>
    <ul class="pcoded-submenu">
        <li class="{{ (Request::path() == 'dsn/pilihpkmbimbing') ? 'active' : '' }}">
            <a href="{{ url ('dsn/pilihpkmbimbing')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.mahasiswa">PKM yang dibimbing</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ (Request::path() == 'dsn/pilihpkm') ? 'active' : '' }}">
            <a href="{{ url ('dsn/pilihpkm')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.mahasiswa">Daftar PKM UNY</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ (Request::path() == 'dsn/pilihgrafik') ? 'active' : '' }}">
            <a href="{{url('dsn/pilihgrafik')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.refrensijudul">Rekapan PKM</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
    </ul>
</li>

{{--<li class="{{ (Request::path() == 'dsn/tahun-list-pkm') ? 'active' : '' }}">
    <a href="{{ url ('dsn/tahun-list-pkm')}}">
    <span class="pcoded-micon"><i class="ti-ruler-pencil"></i><b>Pilih Pengajuan Usulan</b></span>
    <span class="pcoded-mtext" data-i18n="nav.dash.main"> Pilih Pengajuan Tahun Usulan</span>
    <span class="pcoded-mcaret"></span>
    </a>
</li>
<li class="{{ (Request::path() == 'dsn/referensi-judul' || Request::path() == 'dsn/list-dosen' || Request::path() == 'dsn/info-download') ? 'active pcoded-trigger' : '' }}  pcoded-hasmenu">
    <a href="javascript:void(0)">
        <span class="pcoded-micon"><i class="ti-harddrives"></i><b>FT</b></span>
        <span class="pcoded-mtext" data-i18n="nav.dash.Fiturtambahan">Fitur Tambahan</span>
        <span class="pcoded-mcaret"></span>
    </a>
    <ul class="pcoded-submenu">
        <li class="{{ (Request::path() == 'dsn/info-download') ? 'active' : '' }}">
            <a href="{{ url ('dsn/info-download')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.infodownload">File Download</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ (Request::path() == 'dsn/referensi-judul') ? 'active' : '' }}">
            <a href="{{ url ('dsn/referensi-judul')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.refrensijudul">Referensi Judul UNY</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="coomingsoon">
            <a href="#!">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext text-muted" data-i18n="nav.dash.galeriposter">Galeri Poster</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
    </ul>
</li>--}}
<li class="{{ (Request::path() == 'dsn/cardoh/anggota' || Request::path() == 'dsn/cardoh/ide' || Request::path() == 'dsn/cardoh/kelompok') ? 'active pcoded-trigger' : '' }}  pcoded-hasmenu">
    <a href="javascript:void(0)">
        <span class="pcoded-micon"><i class="ti-heart"></i><b>CJ</b></span>
        <span class="pcoded-mtext" data-i18n="nav.dash.Fiturtambahan">Biro Jodoh PKM</span>
        <span class="pcoded-mcaret"></span>
    </a>
    <ul class="pcoded-submenu">
        <li class="{{ (Request::path() == 'dsn/cardoh/anggota') ? 'active' : '' }}">
            <a href="{{ url ('dsn/cardoh/anggota')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.infodownload">Kurang Anggota</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ (Request::path() == 'dsn/cardoh/ide') ? 'active' : '' }}">
            <a href="{{ url ('dsn/cardoh/ide')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.refrensijudul">Ada Ide</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ (Request::path() == 'dsn/cardoh/kelompok') ? 'active' : '' }}">
            <a href="{{ url ('dsn/cardoh/kelompok')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.refrensijudul">Pengen Ikut</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
    </ul>
</li>
