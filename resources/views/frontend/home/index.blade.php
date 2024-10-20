@extends('frontend.master')

@section('title', config('app.sitesettings')::first()->site_title . ' - ' .
    config('app.sitesettings')::first()->tagline)

@section('content')

    @include('frontend.home.inc.featuredpost')
    @include('frontend.home.inc.category')

    <!-- Section baru dengan container-fluid -->
    <section class="carousel-section">
        <div class="container-fluid">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach ($recentposts as $key => $post)
                        <li data-target="#carouselExampleCaptions" data-slide-to="{{ $key }}"
                            class="{{ $key == 0 ? 'active' : '' }}"></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach ($recentposts as $key => $post)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                            <img src="{{ asset('uploads/post/' . $post->thumbnail) }}" class="d-block w-100"
                                alt="{{ $post->title }}" style="height: 500px; object-fit: cover;">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>{{ $post->title }}</h5>
                                <p>{{ Str::limit($post->excerpt, 100) }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions"
                    data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions"
                    data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Section lama -->
    <section class="section-feature-1">
        <div class="container-fluid">
            <div class="row">
                @include('frontend.home.inc.recentpost')
                @include('frontend.home.inc.sidebar')
            </div>
        </div>
    </section>

@endsection
