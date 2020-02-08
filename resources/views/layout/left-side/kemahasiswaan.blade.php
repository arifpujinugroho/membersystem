<li class="{{ (Request::path() == 'kmhs') ? 'active' : '' }}">
    <a href="{{ url ('kmhs')}}">
    <span class="pcoded-micon"><i class="ti-home"></i><b>H</b></span>
    <span class="pcoded-mtext" data-i18n="nav.dash.main">Home</span>
    <span class="pcoded-mcaret"></span>
    </a>
</li>

<li class="{{ (Request::path() == 'kmhs/pilihpkm' || Request::path() == 'kmhs/pilihdownloadpkm' || Request::path() == 'kmhs/pilihakunsimbelmawa' || Request::path() == 'kmhs/pilihmaksdosen') ? 'active pcoded-trigger' : '' }} pcoded-hasmenu">
    <a href="javascript:void(0)">
        <span class="pcoded-micon"><i class="ti-layout-media-right"></i><b>T</b></span>
        <span class="pcoded-mtext" data-i18n="nav.invoice.main">PKM</span>
        <span class="pcoded-mcaret"></span>
    </a>
    <ul class="pcoded-submenu">
        <li class="{{ (Request::path() == 'kmhs/pilihpkm') ? 'active' : '' }}">
            <a href="{{ url ('kmhs/pilihpkm')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.mahasiswa">Detail PKM</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ (Request::path() == 'kmhs/pilihdownloadpkm') ? 'active' : '' }}">
            <a href="{{url('kmhs/pilihdownloadpkm')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.refrensijudul">Download PKM</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ (Request::path() == 'kmhs/pilihmaksdosen') ? 'active' : '' }}">
            <a href="{{url('kmhs/pilihmaksdosen')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.refrensijudul">Max Dosen</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ (Request::path() == 'kmhs/pilihakunsimbelmawa') ? 'active' : '' }}">
            <a href="{{url('kmhs/pilihakunsimbelmawa')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.refrensijudul">Input Simbelmawa</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
    </ul>
</li>

<li class="{{ (Request::path() == 'kmhs/pilihgrafik') ? 'active' : '' }}">
    <a href="{{ url ('kmhs/pilihgrafik')}}">
        <span class="pcoded-micon"><i class="ti-bar-chart-alt"></i><b>GP</b></span>
        <span class="pcoded-mtext" data-i18n="nav.invoice.main">Grafik PKM</span>
        <span class="pcoded-mcaret"></span>
    </a>
</li>

<li class="{{ (Request::path() == 'kmhs/listsurat') ? 'active' : '' }}">
    <a href="{{ url ('kmhs/listsurat')}}">
        <span class="pcoded-micon"><i class="ti-email"></i><b>LS</b></span>
        <span class="pcoded-mtext" data-i18n="nav.invoice.main">List Surat</span>
        <span class="pcoded-mcaret"></span>
    </a>
</li>

<li class="{{ (Request::path() == 'kmhs/pilihkeuangan') ? 'active' : '' }}">
    <a href="#!" class="coomingsoon">
        <span class="pcoded-micon"><i class="ti-email"></i><b>LS</b></span>
        <span class="pcoded-mtext text-muted" data-i18n="nav.invoice.main">Laporan Keuangan</span>
        <span class="pcoded-mcaret"></span>
    </a>
</li>