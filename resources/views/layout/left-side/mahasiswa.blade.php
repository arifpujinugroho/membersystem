<li class="{{ (Request::path() == 'mhs') ? 'active' : '' }}">
    <a href="{{ url ('/')}}">
    <span class="pcoded-micon"><i class="ti-home"></i><b>H</b></span>
    <span class="pcoded-mtext" data-i18n="nav.dash.main">Beranda</span>
    <span class="pcoded-mcaret"></span>
    </a>
</li>
<li class="{{ (Request::path() == 'mhs/cardoh/anggota' || Request::path() == 'mhs/cardoh/ide' || Request::path() == 'mhs/cardoh/kelompok') ? 'active pcoded-trigger' : '' }}  pcoded-hasmenu">
    <a href="javascript:void(0)">
        <span class="pcoded-micon"><i class="ti-heart"></i><b>CJ</b></span>
        <span class="pcoded-mtext" data-i18n="nav.dash.Fiturtambahan">Biro Jodoh PKM <i class="text-danger icofont icofont-emo-heart-eyes"></i></span>
        <span class="pcoded-mcaret"></span>
    </a>
    <ul class="pcoded-submenu">
        <li class="{{ (Request::path() == 'mhs/cardoh/anggota') ? 'active' : '' }}">
            <a href="{{ url ('mhs/cardoh/anggota')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.infodownload">Kurang Anggota</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ (Request::path() == 'mhs/cardoh/ide') ? 'active' : '' }}">
            <a href="{{ url ('mhs/cardoh/ide')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.refrensijudul">Ada Ide</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ (Request::path() == 'mhs/cardoh/kelompok') ? 'active' : '' }}">
            <a href="{{ url ('mhs/cardoh/kelompok')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.refrensijudul">Pengen Ikut</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
    </ul>
</li>
@if(Auth::user()->level == "Perekap")
<li class="{{ (Request::path() == 'rkp/nilai/proposal' || Request::path() == 'rkp/nilai/interview' || Request::path() == 'rkp/cek/administrasi') ? 'active pcoded-trigger' : '' }}  pcoded-hasmenu">
    <a href="javascript:void(0)">
        <span class="pcoded-micon"><i class="ti-receipt"></i><b>CJ</b></span>
        <span class="pcoded-mtext" data-i18n="nav.dash.Fiturtambahan">Menu Perekap</span>
        <span class="pcoded-mcaret"></span>
    </a>
    <ul class="pcoded-submenu">
        <li class="{{ (Request::path() == 'rkp/nilai/proposal') ? 'active' : '' }}">
            <a href="{{ url ('rkp/nilai/proposal')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.infodownload">Nilai Proposal</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ (Request::path() == 'rkp/nilai/interview') ? 'active' : '' }}">
            <a href="{{ url ('rkp/nilai/interview')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.refrensijudul">Nilai Interview</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ (Request::path() == 'rkp/cek/administrasi') ? 'active' : '' }}">
            <a href="{{ url ('rkp/cek/administrasi')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.refrensijudul">Cek Administrasi</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
    </ul>
</li>
@endif
<li class="{{ (Request::path() == 'mhs/list-pkm') ? 'active' : '' }}">
    <a href="{{ url ('mhs/list-pkm')}}">
    <span class="pcoded-micon"><i class="ti-ruler-pencil"></i><b>Pengajuan Usulan</b></span>
    <span class="pcoded-mtext" data-i18n="nav.dash.main">Pengajuan Usulan PKM</span>
    <span class="pcoded-mcaret"></span>
    </a>
</li>
<li class="{{ (Request::path() == 'mhs/list-kemajuan' || Request::path() == 'mhs/list-akhir' || Request::path() == 'mhs/artikel-poster' ||  (request()->is('mhs/dana*')) ) ? 'active pcoded-trigger' : '' }} pcoded-hasmenu">
    <a href="javascript:void(0)">
        <span class="pcoded-micon"><i class="ti-write"></i><b>D</b></span>
        <span class="pcoded-mtext" data-i18n="nav.dash.pkm">Pelaksanaan Kegiatan</span>
        <span class="pcoded-mcaret"></span>
    </a>
    <ul class="pcoded-submenu">
        <!--li class="{{ (Request::path() == 'mhs/logbook') ? 'active' : '' }}">
            <a href="#!" class="coomingsoon">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext text-muted" data-i18n="nav.dash.laporkeuangan">Logbook</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li-->
        <li class="{{ (request()->is('mhs/dana*')) ? 'active' : '' }}">
            <a href="{{ url ('mhs/dana/list')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.laporkeuangan">Laporan Keuangan</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ (Request::path() == 'mhs/list-kemajuan') ? 'active' : '' }}">
            <a href="{{ url ('mhs/list-kemajuan')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.laporankemajuan">Laporan Kemajuan</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ (Request::path() == 'mhs/list-akhir') ? 'active' : '' }}">
            <a href="{{ url ('mhs/list-akhir')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.laporanakhir">Laporan Akhir</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ (Request::path() == 'mhs/artikel-poster') ? 'active' : '' }}">
            <a href="{{ url ('mhs/artikel-poster')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.artikelposter">Artikel Ilmiah dan Poster</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
    </ul>
</li>
<li class="{{ (Request::path() == 'mhs/referensi-judul' || Request::path() == 'mhs/list-dosen' || Request::path() == 'mhs/info-download') ? 'active pcoded-trigger' : '' }}  pcoded-hasmenu">
    <a href="javascript:void(0)">
        <span class="pcoded-micon"><i class="ti-harddrives"></i><b>FT</b></span>
        <span class="pcoded-mtext" data-i18n="nav.dash.Fiturtambahan">Fitur Tambahan</span>
        <span class="pcoded-mcaret"></span>
    </a>
    <ul class="pcoded-submenu">
        <li class="{{ (Request::path() == 'mhs/list-dosen') ? 'active' : '' }}">
            <a href="{{ url ('mhs/list-dosen')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.refrensijudul">List Dosen</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ (Request::path() == 'mhs/info-download') ? 'active' : '' }}">
            <a href="{{ url ('mhs/info-download')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.infodownload">File Download</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ (Request::path() == 'mhs/referensi-judul') ? 'active' : '' }}">
            <a href="{{ url ('mhs/referensi-judul')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.refrensijudul">Referensi Judul UNY</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ (Request::path() == 'mhs/surat') ? 'active' : '' }}">
            <a href="{{ url ('mhs/surat')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.refrensijudul">Pengajuan Surat</span>
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
</li>
@if($call->jml < 1 )
<li class="">
    <a class="nothing-cc" href="#!">
        <span class="pcoded-micon"><i class="ti-headphone-alt"></i><b>T</b></span>
        <span class="pcoded-mtext text-muted" data-i18n="nav.menu.main">Butuh Bantuan?</span>
        <span class="pcoded-mcaret"></span>
    </a>
</li>
@else
<li class="pcoded-hasmenu">
    <a href="javascript:void(0)">
        <span class="pcoded-micon"><i class="ti-headphone-alt"></i><b>T</b></span>
        <span class="pcoded-mtext" data-i18n="nav.menu.main">Butuh Bantuan ?</span>
        <span class="pcoded-mcaret"></span>
    </a>
    <ul class="pcoded-submenu">
        @foreach ($call->cc as $c)
        <li class="">
            <a href="https://wa.me/{{ $c->whatsapp }}" target="_blank">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.infodownload">{{ $c->nama_callcenter }} ({{ $c->whatsapp }})</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        @endforeach
    </ul>
</li>
@endif
