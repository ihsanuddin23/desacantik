@extends('frontend2.themes')

@section('content')
    <div class="menu-layanan">
        <div class="container">
            <div class="bread-body">
                <div class="bread-content">
                    <a href="{{ route('frontend.home') }}"><i class="fa fa-home"></i> Home</a> <i
                        class="fa fa-angle-right"></i> Pemerintah Desa
                </div>
            </div>
        </div>

    </div>

    <div class="section-post bg-gray">
        <!-- Pengumuman -->
        <div class="container-default bg-gray" id="index-berita">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        @foreach ($pemerintahdesa as $data)
                            <div class="block-pemerintah clearfix">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="block-foto-pemerintah">
                                            <img src="{{ asset('thumbnails/' . $data->thumbnail) }}"
                                                class="center img-responsive img-perangkat  foto-pemerintah"
                                                alt="{{ $data->nama }}">
                                            <div class="tupoksi-button">
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#tupoksiModal{{ $data->id }}">
                                                    Tupoksi Jabatan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <div class="block-info-pemerintah">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
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
                                                            <td style="padding: 0.3rem;"><strong>Tempat, Tanggal
                                                                    Lahir</strong></td>
                                                            <td style="padding: 0.3rem;">: {{ $data->tempat_lahir }},
                                                                {{ is_string($data->tanggal_lahir) ? date('d M Y', strtotime($data->tanggal_lahir)) : $data->tanggal_lahir->format('d M Y') }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding: 0.3rem;"><strong>Agama</strong></td>
                                                            <td style="padding: 0.3rem;">: {{ $data->agama }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding: 0.3rem;"><strong>Pendidikan
                                                                    Terakhir</strong></td>
                                                            <td style="padding: 0.3rem;">: {{ $data->pendidikan_terakhir }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding: 0.3rem;"><strong>Nomor SK</strong></td>
                                                            <td style="padding: 0.3rem;">: {{ $data->nomor_sk ?? '-' }}
                                                            </td>
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
                            </div>


                            <!-- Modal Tupoksi -->
                            <div class="modal fade" id="tupoksiModal{{ $data->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="tupoksiModalLabel{{ $data->id }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="tupoksiModalLabel{{ $data->id }}">Tupoksi
                                                {{ $data->jabatan }} -
                                                {{ $data->nama }}
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Jabatan: {{ $data->jabatan }}</p>
                                            <p>Deskripsi Tupoksi Jabatan: {{ $data->tupoksi_jabatan }}</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Sidebar -->
                    <div class="col-md-4">
                        @include('frontend2.widget.sidebar.agenda')
                        @include('frontend2.widget.sidebar.kategori')
                        @include('frontend2.widget.sidebar.artikel_populer')
                        @include('frontend2.widget.sidebar.pengunjung')
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
        </div>

    </div>
@endsection

@section('script')
@endsection
