<div class="footer">
    <div class="footer-area">
        <div class="footer-area-content">
            <div class="container">
                <div class="row ">
                    <div class="col-md-3">
                        <div class="description">
                            <h5 class="text-white">Tentang Desa Cikedokan</h5>
                            <hr color="white">
                            <p class="text-white mt-2 text-start">{{ $sitesettings->description }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('uploads/logo/' . $sitesettings->logo_dark) }}"
                            alt="{{ $sitesettings->site_title }}" class="logo-white" />
                    </div>

                    <div class="col-md-3">
                        <div class="kontak">
                            <h5 class="text-white" style="text-align: left;">Tentang Desa Cikedokan</h5>
                            <hr color="white">
                            <ul style="text-align: left;">
                                @foreach ($menu as $item)
                                    <li>
                                        <a href="{{ $item['href'] }}" class="text-white" style="text-align: left;">
                                            {!! $item['icon'] !!}
                                            {{ $item['text'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-area-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright">
                            <p>{{ $sitesettings->copyright_text }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
