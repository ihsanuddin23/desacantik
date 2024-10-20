@extends('dashboard.master')
@section('title', 'Edit Fasilitas Umum')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Form Edit Sarana Fasilitas Umum</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.dashboard.demografi.index') }}">Sarana
                                    Fasilitas Umum</a></li>
                            <li class="breadcrumb-item active">Edit Fasilitas Umum</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Form Edit Sarana Fasilitas Umum</h3>
                            </div>
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ route('dashboard.fasilitasumum.update', $fasilitasumum->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label for="jenis_sarana_prasarana_fasilitas_umum">Jenis Sarana Prasarana</label>
                                        <input type="text" class="form-control"
                                            id="jenis_sarana_prasarana_fasilitas_umum"
                                            name="jenis_sarana_prasarana_fasilitas_umum"
                                            value="{{ $fasilitasumum->jenis_sarana_prasarana_fasilitas_umum }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_fasilitas_umum">Nama</label>
                                        <textarea class="form-control" id="nama_fasilitas_umum" name="nama_fasilitas_umum" rows="3">{{ $fasilitasumum->nama_fasilitas_umum }}</textarea>
                                    </div>


                                    <div class="form-group">
                                        <label for="jumlah_volume_fasilitas_umum">Jumlah/Volume (m2)</label>
                                        <input type="number" class="form-control" id="jumlah_volume_fasilitas_umum"
                                            name="jumlah_volume_fasilitas_umum"
                                            value="{{ $fasilitasumum->jumlah_volume_fasilitas_umum }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="keterangan_fasilitas_umum">Keterangan</label>
                                        <textarea class="form-control" id="keterangan_fasilitas_umum" name="keterangan_fasilitas_umum" rows="3">{{ $fasilitasumum->keterangan_fasilitas_umum }}</textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update Fasilitas</button>
                                    <a href="{{ route('dashboard.dashboard.demografi.index') }}"
                                        class="btn btn-secondary">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
