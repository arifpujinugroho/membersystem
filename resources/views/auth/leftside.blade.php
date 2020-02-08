<li class="{{ (Request::path() == 'dashboard') ? 'active' : '' }}">
    <a href="{{ url ('dashboard')}}">
        <span class="pcoded-micon"><i class="ti-home"></i><b>H</b></span>
        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
        <span class="pcoded-mcaret"></span>
    </a>
</li>
@if(Auth::user()->level == "Admin")
<li class="{{ (Request::path() == 'anggota') ? 'active' : '' }}">
    <a href="{{ url ('/anggota')}}">
        <span class="pcoded-micon"><i class="ti-layout-media-right"></i><b>A</b></span>
        <span class="pcoded-mtext" data-i18n="nav.dash.main">Anggota</span>
        <span class="pcoded-mcaret"></span>
    </a>
</li>
@endif
