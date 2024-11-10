@extends('frontend2.themes')

@section('content')

    <body class="skin-purle">
        <div class="wrapper">


            <div class="main-wrapper bg-gray">
                <div class="container">
                    <div class="halaman-arsip">
                        <div class="blog-section">
                            <div class="bread-body">
                                <div class="bread-content">
                                    <a href="{{ route('frontend.home') }}"><i class="fa fa-home"></i> Home</a>
                                    <i class="fa fa-angle-right"></i>Berita
                                </div>
                            </div>

                            <div class="row">
                                @foreach ($recentposts as $data)
                                    <div class="col-md-4 col-sm-6 padding-custom">
                                        <div class="panel panel-default-arsip">
                                            <div class="panel-body">
                                                <div class="blog-image">
                                                    <a href="{{ route('frontend.post', $data->slug) }}">
                                                        <img src="{{ asset('uploads/post/' . $data->thumbnail) }}"
                                                            alt="{{ $data->title }}">
                                                    </a>
                                                </div>
                                                <div class="archive-blog-title">
                                                    <h3>
                                                        <a href="{{ route('frontend.post', $data->slug) }}">
                                                            {{ Str::limit(strip_tags($data->title), 10) }}
                                                        </a>
                                                    </h3>
                                                </div>

                                                <div class="meta-arsip">
                                                    <div class="post-date">
                                                        <i class="fa fa-calendar"></i>
                                                        {{ $data->created_at->format('d F Y') }}
                                                    </div>
                                                    <div class="post-cat">
                                                        <a href="{{ route('frontend.category', $data->category->slug) }}">
                                                            <i class="fa fa-newspaper-o"></i>
                                                            {{ Str::limit(strip_tags($data->category->title), 10) }}
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="blog-content">
                                                    <p>{{ Str::limit(strip_tags($data->content), 10) }}</p>
                                                    <!-- Ringkasan isi berita tanpa tag HTML -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="paging text-center">
                                <div>
                                    Menampilkan halaman {{ $recentposts->currentPage() }} dari
                                    {{ $recentposts->lastPage() }}
                                </div>
                                {{ $recentposts->links() }} <!-- This will display pagination links -->
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
