@extends('frontend.master')

@section('title', config('app.sitesettings')::first()->site_title . ' - ' .
    config('app.sitesettings')::first()->tagline)

@section('content')
    <section class="identitas-rt-section mt-5">
        <div class="container">
            <h1 class="level-1 rectangle">Struktur Organisasi RT</h1>
            <ol class="level-2-wrapper">
                <li>
                    <h2 class="level-2 rectangle">Ketua RT 1</h2>
                    <ol class="level-3-wrapper">
                        <li>
                            <h3 class="level-3 rectangle">RT 1.1</h3>
                            <ol class="level-4-wrapper">
                                <li>
                                    <h4 class="level-4 rectangle">Anggota 1</h4>
                                </li>
                                <li>
                                    <h4 class="level-4 rectangle">Anggota 2</h4>
                                </li>
                                <li>
                                    <h4 class="level-4 rectangle">Anggota 3</h4>
                                </li>
                            </ol>
                        </li>
                        <li>
                            <h3 class="level-3 rectangle">RT 1.2</h3>
                            <ol class="level-4-wrapper">
                                <li>
                                    <h4 class="level-4 rectangle">Anggota 1</h4>
                                </li>
                                <li>
                                    <h4 class="level-4 rectangle">Anggota 2</h4>
                                </li>
                            </ol>
                        </li>
                    </ol>
                </li>
                <li>
                    <h2 class="level-2 rectangle">Ketua RT 2</h2>
                    <ol class="level-3-wrapper">
                        <li>
                            <h3 class="level-3 rectangle">RT 2.1</h3>
                            <ol class="level-4-wrapper">
                                <li>
                                    <h4 class="level-4 rectangle">Anggota 1</h4>
                                </li>
                                <li>
                                    <h4 class="level-4 rectangle">Anggota 2</h4>
                                </li>
                            </ol>
                        </li>
                        <li>
                            <h3 class="level-3 rectangle">RT 2.2</h3>
                            <ol class="level-4-wrapper">
                                <li>
                                    <h4 class="level-4 rectangle">Anggota 1</h4>
                                </li>
                                <li>
                                    <h4 class="level-4 rectangle">Anggota 2</h4>
                                </li>
                            </ol>
                        </li>
                    </ol>
                </li>
                <!-- Tambahkan lebih banyak RT sesuai kebutuhan -->
            </ol>
        </div>


    </section>
@endsection
