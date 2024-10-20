<div class="container">
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="https://cikedokan.sidepe.com/">
          <img src="https://cikedokan.sidepe.com/desa/logo/logo_bekasi__sid__x5fgqNL.png" alt="Logo Desa" width="30">
          <span class="logo-title">
            Cikedokan </span>
        </a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".main-menu">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse main-menu">
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-link"><a href="{{ route('frontend.home') }}">Beranda</a></li>
          <li class="dropdown">
            <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">
              Profil Desa <b class="caret"></b> </a>
            <ul class="dropdown-menu">
              <li><a href="{{route('frontend.demografi') }}">Demografi</a></li>
              <li><a href="{{route('frontend.sejarah') }}">Sejarah</a></li>
              <li><a href="{{route('frontend.visimisi') }}">Visi Misi</a></li>
            </ul>
          </li>
          <li class="">
            <a class="nav-link " href="{{ route('frontend.pemerintah') }}">
              Pemerintah Desa </a>
          </li>
          <li class="dropdown">
            <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">
              Data Desa <b class="caret"></b> </a>
            <ul class="dropdown-menu">
              <li><a href="{{ route('frontend.identitasrt') }}">Identitas RT</a></li>
              <li><a href="{{ route('frontend.demografi') }}">Demografi RT</a></li>
              <li><a href="{{ route('frontend.demografi') }}">Sosial Ekonomi RT</a>
              </li>
              <li><a href="{{ route('frontend.demografi') }}">Karakteristik RT</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>