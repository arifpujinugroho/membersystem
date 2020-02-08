<li class="{{ (Request::path() == 'opt') ? 'active' : '' }}">
    <a href="{{ url ('/')}}">
    <span class="pcoded-micon"><i class="ti-home"></i><b>H</b></span>
    <span class="pcoded-mtext" data-i18n="nav.dash.main">Beranda</span>
    <span class="pcoded-mcaret"></span>
    </a>
</li>

<li class="{{ (Request::path() == 'opt/pilihpkm' || Request::path() == 'opt/pilihdownloadpkm' || Request::path() == 'opt/pilihakunsimbelmawa' || Request::path() == 'opt/pilihmaksdosen') ? 'active pcoded-trigger' : '' }} pcoded-hasmenu">
    <a href="javascript:void(0)">
        <span class="pcoded-micon"><i class="ti-layout-media-right"></i><b>T</b></span>
        <span class="pcoded-mtext" data-i18n="nav.invoice.main">PKM</span>
        <span class="pcoded-mcaret"></span>
    </a>
    <ul class="pcoded-submenu">
        <li class="{{ (Request::path() == 'opt/pilihpkm') ? 'active' : '' }}">
            <a href="{{ url ('opt/pilihpkm')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.mahasiswa">Detail PKM</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ (Request::path() == 'opt/pilihdownloadpkm') ? 'active' : '' }}">
            <a href="{{url('opt/pilihdownloadpkm')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.refrensijudul">Download PKM</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ (Request::path() == 'opt/pilihmaksdosen') ? 'active' : '' }}">
            <a href="{{url('opt/pilihmaksdosen')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.refrensijudul">Dosen PKM</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="{{ (Request::path() == 'opt/pilihakunsimbelmawa') ? 'active' : '' }}">
            <a href="{{url('opt/pilihakunsimbelmawa')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.refrensijudul">Akun Simbelmawa</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
    </ul>
</li>
<li class="{{ (Request::path() == 'opt/pilihgrafik') ? 'active' : '' }}">
    <a href="{{ url ('opt/pilihgrafik')}}">
        <span class="pcoded-micon"><i class="ti-bar-chart-alt"></i><b>GP</b></span>
        <span class="pcoded-mtext" data-i18n="nav.invoice.main">Grafik PKM</span>
        <span class="pcoded-mcaret"></span>
    </a>
</li>
<li class="{{ (Request::path() == 'opt/mahasiswa' || Request::path() == 'opt/activationmhs' ) ? 'active' : '' }}">
    {{--<a href="javascript:void(0)">--}}
        <a href="{{ url ('opt/mahasiswa')}}">
            <span class="pcoded-micon"><i class="ti-user"></i><b>T</b></span>
            <span class="pcoded-mtext" data-i18n="nav.disabled-menu.main">Mahasiswa</span>
            <span class="pcoded-mcaret"></span>
        </a>
        {{--<ul class="pcoded-submenu">
            <li class="">
                <a href="{{ url ('opt/mahasiswa')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.mahasiswa">List Mahasiswa</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('opt/activationmhs')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.refrensijudul">Aktivasi Akun</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>--}}
    </li>
    <li class="{{ (Request::path() == 'opt/callcenter') ? 'active' : '' }}">
        <a href="{{ url ('opt/callcenter')}}">
            <span class="pcoded-micon"><i class="ti-headphone-alt"></i><b>T</b></span>
        <span class="pcoded-mtext" data-i18n="nav.invoice.main">Call Center</span>
        <span class="pcoded-mcaret"></span>
    </a>
</li>