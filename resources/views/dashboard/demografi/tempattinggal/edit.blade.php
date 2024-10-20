@extends('dashboard.master')
@section('title', 'Edit Sarana Tempat Tinggal')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Form Edit Sarana Tempat Tinggal</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.dashboard.demografi.index') }}">Sarana
                                    Tempat Tinggal</a></li>
                            <li class="breadcrumb-item active">Edit Sarana Tempat Tinggal</li>
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
                                <h3 class="card-title">Form Edit Sarana Tempat Tinggal</h3>
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

                                <form action="{{ route('dashboard.saranatempattinggal.update', $saranatempattinggal->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label for="jenis_sarana_prasarana_tempat_tinggal">Jenis Sarana Prasarana</label>
                                        <input type="text" class="form-control"
                                            id="jenis_sarana_prasarana_tempat_tinggal"
                                            name="jenis_sarana_prasarana_tempat_tinggal"
                                            value="{{ $saranatempattinggal->jenis_sarana_prasarana_tempat_tinggal }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="kondisi_tempat_tinggal">Kondisi</label>
                                        <input type="text" class="form-control" id="kondisi_tempat_tinggal"
                                            name="kondisi_tempat_tinggal"
                                            value="{{ $saranatempattinggal->kondisi_tempat_tinggal }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="jumlah_volume_tempat_tinggal">Jumlah/Volume (m2)</label>
                                        <input type="number" class="form-control" id="jumlah_volume_tempat_tinggal"
                                            name="jumlah_volume_tempat_tinggal"
                                            value="{{ $saranatempattinggal->jumlah_volume_tempat_tinggal }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="keterangan_tempat_tinggal">Keterangan</label>
                                        <textarea class="form-control" id="keterangan_tempat_tinggal" name="keterangan_tempat_tinggal" rows="3">{{ $saranatempattinggal->keterangan_tempat_tinggal }}</textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update Tempat Tinggal</button>
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
