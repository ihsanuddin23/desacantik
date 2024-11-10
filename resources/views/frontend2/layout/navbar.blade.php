<div class="container">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ route('frontend.home') }}">
                    <img src="https://cikedokan.sidepe.com/desa/logo/logo_bekasi__sid__x5fgqNL.png" alt="Logo Desa"
                        width="30">
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
                            <li><a href="{{ route('frontend.demografi') }}">Demografi</a></li>
                            <li><a href="{{ route('frontend.sejarah') }}">Sejarah</a></li>
                            <li><a href="{{ route('frontend.visimisi') }}">Visi Misi</a></li>
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
                            <div class="dropdown">
                                <button data-mdb-button-init data-mdb-ripple-init data-mdb-dropdown-init
                                    class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-mdb-toggle="dropdown" aria-expanded="false">
                                    Dropdown button
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li>
                                        <a class="dropdown-item" href="#">Another action</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            Submenu &raquo;
                                        </a>
                                        <ul class="dropdown-menu dropdown-submenu">
                                            <li>
                                                <a class="dropdown-item" href="#">Submenu item 1</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Submenu item 2</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Submenu item 3 &raquo; </a>
                                                <ul class="dropdown-menu dropdown-submenu">
                                                    <li>
                                                        <a class="dropdown-item" href="#">Multi level 1</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">Multi level 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Submenu item 4</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Submenu item 5</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
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
