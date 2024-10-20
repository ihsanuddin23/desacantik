@extends('frontend.master')

@section('title', config('app.sitesettings')::first()->site_title . ' - ' .
    config('app.sitesettings')::first()->tagline)

@section('content')
    <div class="container mt-5 mb-4">
        <h1 class="mb-4"> Pemerintah Desa</h1>
        <div class="row justify-content-center"> <!-- Center the row content -->
            <div class="col-md-8 mb-4"> <!-- Kolom untuk semua informasi Pemerintah Desa -->
                @foreach ($pemerintahdesa as $data)
                    <div class="card bg-light text-dark mb-4" style="width: 100%;">
                        <!-- Card untuk informasi Pemerintah Desa -->
                        <div class="row no-gutters">
                            <div class="col-md-5 d-flex flex-column align-items-center justify-content-center">
                                <img src="{{ asset('thumbnails/' . $data->thumbnail) }}" class="card-img mb-2"
                                    alt="{{ $data->nama }}" style="max-width: 90%; max-height: 80%;">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#tupoksiModal{{ $data->id }}">
                                    Tupoksi Jabatan
                                </button>
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <table class="table table-borderless text-dark">
                                        <tbody>
                                            <tr>
                                                <td style="padding: 0.3rem;"><strong>Nama</strong></td>
                                                <td style="padding: 0.3rem;">: {{ $data->nama }}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 0.3rem;"><strong>Jabatan</strong></td>
                                                <td style="padding: 0.3rem;">: {{ $data->jabatan }}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 0.3rem;"><strong>NIAP</strong></td>
                                                <td style="padding: 0.3rem;">: {{ $data->niap }}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 0.3rem;"><strong>Tempat, Tanggal Lahir</strong></td>
                                                <td style="padding: 0.3rem;">: {{ $data->tempat_lahir }},
                                                    {{ is_string($data->tanggal_lahir) ? date('d M Y', strtotime($data->tanggal_lahir)) : $data->tanggal_lahir->format('d M Y') }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 0.3rem;"><strong>Agama</strong></td>
                                                <td style="padding: 0.3rem;">: {{ $data->agama }}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 0.3rem;"><strong>Pendidikan Terakhir</strong></td>
                                                <td style="padding: 0.3rem;">: {{ $data->pendidikan_terakhir }}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 0.3rem;"><strong>Nomor SK</strong></td>
                                                <td style="padding: 0.3rem;">: {{ $data->nomor_sk ?? '-' }}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 0.3rem;"><strong>Tanggal SK</strong></td>
                                                <td style="padding: 0.3rem;">:
                                                    {{ is_string($data->tanggal_sk) ? date('d M Y', strtotime($data->tanggal_sk)) : $data->tanggal_sk->format('d M Y') }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 0.3rem;"><strong>Masa Jabatan</strong></td>
                                                <td style="padding: 0.3rem;">: {{ $data->masa_jabatan }}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 0.3rem;"><strong>Status</strong></td>
                                                <td style="padding: 0.3rem;">: {{ $data->status }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="tupoksiModal{{ $data->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="tupoksiModalLabel{{ $data->id }}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="tupoksiModalLabel{{ $data->id }}">Tupoksi
                                        {{ $data->jabatan }} -
                                        {{ $data->nama }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Jabatan: {{ $data->jabatan }}</p>
                                    <p>Deskripsi Tupoksi Jabatan: {{ $data->tupoksi_jabatan }}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Kolom untuk Card Samping -->
            <div class="col-md-4 mb-4"> <!-- Card tambahan di samping -->
                <div class="card" style="background-color: #e0e0e0; color: #000;">
                    <!-- Background abu-abu gelap dan teks hitam -->
                    <div class="card-header" style="background-color: #d3d3d3; color: #000;">Kategori</div>
                    <div class="card-body">
                        @if ($categories->count() > 0)
                            <ul class="list-group">
                                @foreach ($categories as $category)
                                    <li class="list-group-item" style="background-color: #f0f0f0; color: #000;">
                                        <!-- List item abu-abu -->
                                        <a href="{{ route('frontend.category', $category->slug) }}"
                                            class="btn btn-secondary" style="color: #000;">
                                            {{ $category->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p>Tidak ada kategori yang tersedia.</p>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
