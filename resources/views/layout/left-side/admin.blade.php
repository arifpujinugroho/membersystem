<li class="{{ (Request::path() == 'admin') ? 'active' : '' }}">
    <a href="{{ url ('admin')}}">
        <span class="pcoded-micon"><i class="ti-home"></i><b>H</b></span>
        <span class="pcoded-mtext" data-i18n="nav.dash.main">Home</span>
        <span class="pcoded-mcaret"></span>
    </a>
</li>

<li class="{{ (Request::path() == 'admin/pilihpkm' || Request::path() == 'admin/pilihdownloadpkm' || Request::path() == 'admin/pilihakunsimbelmawa' || Request::path() == 'admin/pilihmaksdosen' || Request::path() == 'admin/pilihkeuangan') ? 'active pcoded-trigger' : '' }} pcoded-hasmenu">
    <a href="javascript:void(0)">
        <span class="pcoded-micon"><i class="ti-layout-media-right"></i><b>T</b></span>
        <span class="pcoded-mtext" data-i18n="nav.invoice.main">PKM</span>
        <span class="pcoded-mcaret"></span>
    </a>
    <ul class="pcoded-submenu">
        <li class="{{ (Request::path() == 'admin/pilihpkm') ? 'active' : '' }}">
            <a href="{{ url ('admin/pilihpkm')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.mahasiswa">Detail PKM</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ (Request::path() == 'admin/pilihdownloadpkm') ? 'active' : '' }}">
            <a href="{{url('admin/pilihdownloadpkm')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.refrensijudul">Download PKM</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ (Request::path() == 'admin/pilihmaksdosen') ? 'active' : '' }}">
            <a href="{{url('admin/pilihmaksdosen')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.refrensijudul">Max Dosen</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        @if(Auth::user()->username == "timpkmcenter.uny@uny.ac.id")
        <li class="{{ (Request::path() == 'admin/pilihakunsimbelmawa') ? 'active' : '' }}">
            <a href="{{url('admin/pilihakunsimbelmawa')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.refrensijudul">Input Simbelmawa</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ (Request::path() == 'admin/pilihkeuangan') ? 'active' : '' }}">
            <a href="{{url('admin/pilihkeuangan')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.refrensijudul">Laporan Keuangan</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        @endif
    </ul>
</li>
<li class="{{ (Request::path() == 'admin/pilihgrafik') ? 'active' : '' }}">
    <a href="{{ url ('admin/pilihgrafik')}}">
        <span class="pcoded-micon"><i class="ti-bar-chart-alt"></i><b>GP</b></span>
        <span class="pcoded-mtext" data-i18n="nav.invoice.main">Grafik PKM</span>
        <span class="pcoded-mcaret"></span>
    </a>
</li>
@if(Auth::user()->username == "timpkmcenter.uny@uny.ac.id")
<li class="{{ (Request::path() == 'admin/pilihnilpro' || Request::path() == 'admin/pilihnilin' || Request::path() == 'admin/pilihpenil') ? 'active pcoded-trigger' : '' }} pcoded-hasmenu">
    <a href="javascript:void(0)">
        <span class="pcoded-micon"><i class="ti-layout-media-right"></i><b>T</b></span>
        <span class="pcoded-mtext" data-i18n="nav.invoice.main">Nilai PKM</span>
        <span class="pcoded-mcaret"></span>
    </a>
    <ul class="pcoded-submenu">
        <li class="{{ (Request::path() == 'admin/pilihpenil') ? 'active' : '' }}">
            <a href="{{ url ('admin/pilihpenil')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.mahasiswa">Set Penilaian</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ (Request::path() == 'admin/pilihnilpro') ? 'active' : '' }}">
            <a href="{{ url ('admin/pilihnilpro')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.mahasiswa">Nilai Proposal</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ (Request::path() == 'admin/pilihnilin') ? 'active' : '' }}">
            <a href="{{url('admin/pilihnilin')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.refrensijudul">Nilai Interview</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
    </ul>
</li>
<li class="{{ (Request::path() == 'admin/user/opt' || Request::path() == 'admin/user/mhs' || Request::path() == 'admin/user/rkp' || Request::path() == 'admin/list-dosen') ? 'active pcoded-trigger' : '' }}  pcoded-hasmenu">
    <a href="javascript:void(0)">
        <span class="pcoded-micon"><i class="ti-user"></i><b>T</b></span>
        <span class="pcoded-mtext" data-i18n="nav.disabled-menu.main">User</span>
        <span class="pcoded-mcaret"></span>
    </a>
    <ul class="pcoded-submenu">
        <li class="{{ (Request::path() == 'admin/list-dosen') ? 'active' : '' }}">
            <a href="{{ url ('admin/list-dosen')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.refrensijudul">Dosen</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ (Request::path() == 'admin/user/mhs') ? 'active' : '' }}">
            <a href="{{url('admin/user/mhs')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.infodownload">Mahasiswa</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
<li class="{{ (Request::path() == 'admin/user/rkp') ? 'active' : '' }}">
    <a href="{{url('admin/user/rkp')}}">
        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
        <span class="pcoded-mtext" data-i18n="nav.dash.infodownload">Reviewer & Perekap</span>
        <span class="pcoded-mcaret"></span>
    </a>
</li>
<li class="{{ (Request::path() == 'admin/user/opt') ? 'active' : '' }}">
    <a href="{{url('admin/user/opt')}}">
        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
        <span class="pcoded-mtext" data-i18n="nav.dash.infodownload">Operator</span>
        <span class="pcoded-mcaret"></span>
    </a>
</li>
</ul>
</li>
<li class="{{ (Request::path() == 'admin/aktif-pkm' || Request::path() == 'admin/inputcustom' || Request::path() == 'admin/info-download' || Request::path() == 'admin/listtoko') ? 'active pcoded-trigger' : '' }}  pcoded-hasmenu">
    <a href="javascript:void(0)">
        <span class="pcoded-micon"><i class="ti-panel"></i><b>T</b></span>
        <span class="pcoded-mtext" data-i18n="nav.disabled-menu.main">Setting</span>
        <span class="pcoded-badge label label-danger">New</span>
        <span class="pcoded-mcaret"></span>
    </a>
    <ul class="pcoded-submenu">
        <li class="{{ (Request::path() == 'admin/listtoko') ? 'active' : '' }}">
            <a href="{{url('admin/listtoko')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.infodownload">List Toko</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ (Request::path() == 'admin/aktif-pkm') ? 'active' : '' }}">
            <a href="{{url('admin/aktif-pkm')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.infodownload">Status & Tahun PKM</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ (Request::path() == 'admin/info-download') ? 'active' : '' }}">
            <a href="{{url('admin/info-download')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.infodownload">G-Drive & File Download</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ (Request::path() == 'admin/inputcustom') ? 'active' : '' }}">
            <a href="{{url('admin/inputcustom')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.galeriposter">Input Custom PKM</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
    </ul>
</li>
@endif