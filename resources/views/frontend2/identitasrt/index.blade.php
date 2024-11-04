@extends('frontend2.themes')

@section('content')

    <div class="menu-layanan">
        <div class="container">
            <div class="bread-body">
                <div class="bread-content">
                    <a href="{{ route('frontend.home') }}"><i class="fa fa-home"></i> Home</a> <i
                        class="fa fa-angle-right"></i> Identitas RT
                </div>
            </div>
        </div>
    </div>

    <!-- Identitas RT Section -->
    <div class="container-default bg-gray" id="index-identitas-rt">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @include('frontend2.widget.peta.demografi')

                    <div class="container mt-5">
                        <h2 class="text-center mb-4">Data Identitas RT Desa Cikedokan</h2>

                        <!-- Identitas RT Table -->
                        <div class="identitas-rt">
                            <h4 class="mb-4">Data Identitas RT</h4>

                            @if ($identitasrt->isEmpty())
                                <p class="text-center">Tidak ada data Identitas RT.</p>
                            @else
                                <div class="table-responsive">
                                    <table id="identitasRtTable" class="table table-bordered table-striped table-hover">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th style="width: 30%;">Dusun</th>
                                                <th style="width: 20%;">RT</th>
                                                <th style="width: 20%;">RW</th>
                                                <th style="width: 20%;">Nama Ketua RT</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($identitasrt as $identitas)
                                                <tr>
                                                    <td>{{ $identitas->dusun }}</td>
                                                    <td>{{ $identitas->nomor_rt }}</td>
                                                    <td>{{ $identitas->nomor_rw }}</td>
                                                    <td>{{ $identitas->nama_ketua_rt }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        </div>

                        <!-- Pagination -->
                        <div class="pagination-container text-right mt-3">
                            {{ $identitasrt->links() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
