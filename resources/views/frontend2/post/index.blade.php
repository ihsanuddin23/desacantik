@extends('frontend2.themes')

@section('content')

    <body class="skin-purle">
        <div class="wrapper">
            <div class="menu-layanan">
                <div class="container">
                    <!-- Additional content here -->
                </div>
            </div> <!-- end menu layanan -->

            <div class="section-post bg-gray">
                <div class="container">
                    <div class="row">
                        <!-- page content -->
                        <div class="col-md-8">
                            <div class="bread-body">
                                <div class="bread-content">
                                    <a href="{{ route('frontend.home') }}"><i class="fa fa-home"></i> Home</a>
                                    <i class="fa fa-angle-right"></i> {{ $post->title }}
                                </div>
                            </div>
                            <div class="page-content">
                                <div class="blog-content">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="blok-before-content">
                                                <div class="single-title">{{ $post->title }}</div>
                                                <div class="top-meta-single-content">
                                                    <div class="row">
                                                        <div class="col-md-6 col-xs-6"><i class="fa fa-calendar"></i>
                                                            {{ $post->created_at->format('l, d F Y H:i:s') }}</div>
                                                        <div class="col-md-6 col-xs-6 text-right"><i class="fa fa-user"></i>
                                                            {{ $post->user->name }}</div>
                                                    </div>
                                                </div>
                                            </div>

                                            @if ($post->thumbnail)
                                                <a href="{{ asset('uploads/post/' . $post->thumbnail) }}"
                                                    data-lightbox="images" data-title="{{ $post->title }}">
                                                    <img width="100%" class="img-responsive img-fluid gambar-utama"
                                                        src="{{ asset('uploads/post/' . $post->thumbnail) }}"
                                                        alt="{{ $post->title }}">
                                                    <div class="caption-gambar-artikel">Gambar Utama</div>
                                                    <strong>
                                                        <hr style="border: 2px solid black; margin: 20px 0;">
                                                    </strong>
                                                </a>
                                            @endif

                                            <div class="artikel-single">
                                                {!! $post->content !!}
                                            </div>
                                        </div>
                                        <div class="meta-bottom-single-content">
                                            <div class="row">
                                                <div class="col-md-8 col-xs-6">
                                                    <a href="#"><i class="fa fa-newspaper-o"></i>
                                                        {{ $post->category->name }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box">
                                        <div class="box-primary">
                                            <div class="comments-box">
                                                <div id="comments" class="mt-4">
                                                    <div class="section-heading-comments">Komentar</div>

                                                    <div class="alert-section">
                                                        <div class="alert alert-info">
                                                            <div class="comments-alert">
                                                                Silakan tulis komentar dalam formulir berikut ini (Gunakan
                                                                bahasa yang santun). Komentar akan ditampilkan setelah
                                                                disetujui oleh Admin.
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Comments Form -->
                                                    <form action="" method="POST">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="form-group col-sm-4">
                                                                <input type="text" class="form-control" name="name"
                                                                    maxlength="30" placeholder="Nama Lengkap" required>
                                                            </div>

                                                            <div class="form-group col-sm-4">
                                                                <input type="text" class="form-control" name="phone"
                                                                    maxlength="30" placeholder="Nomor Handphone">
                                                            </div>

                                                            <div class="form-group col-sm-4">
                                                                <input type="email" class="form-control" name="email"
                                                                    maxlength="30" placeholder="Alamat Email" required>
                                                            </div>

                                                            <div class="form-group col-md-12">
                                                                <textarea rows="4" name="comment" class="form-control" placeholder="Tulis komentar disini" required></textarea>
                                                            </div>

                                                            <div class="form-group text-right col-md-3">
                                                                <button type="submit"
                                                                    class="btn btn-success comment-button">Kirim
                                                                    Komentar</button>
                                                            </div>
                                                        </div>
                                                    </form>

                                                    <!-- Display comments -->
                                                    @forelse($post->comments as $comment)
                                                        <div class="comment">
                                                            <p>{{ $comment->user->name }}: {{ $comment->body }}</p>
                                                        </div>
                                                    @empty
                                                        <p>Tidak ada komentar.</p>
                                                    @endforelse
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end content -->
                        <div class="col-md-4">
                            @include('frontend2.widget.sidebar.agenda')
                            @include('frontend2.widget.sidebar.kategori')
                            @include('frontend2.widget.sidebar.artikel_populer')
                            @include('frontend2.widget.sidebar.arsip')
                        </div>
                    </div>
                    <!-- /.row -->

                </div>
                <!-- end content -->
            </div>

        </div> <!-- /.wrapper -->
    </body>
@endsection
