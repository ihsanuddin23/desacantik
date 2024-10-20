@extends('dashboard.master')
@section('title', 'Edit Kependudukan')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Form Edit Kependudukan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a
                                    href="{{ route('dashboard.dashboard.demografi.index') }}">Kependudukan</a></li>
                            <li class="breadcrumb-item active">Edit Kependudukan</li>
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
                                <h3 class="card-title">Form Edit Kependudukan</h3>
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

                                <form action="{{ route('dashboard.kependudukan.update', $kependudukan->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label for="kemasyarakatan">Kemasyarakatan</label>
                                        <input type="text" class="form-control" id="kemasyarakatan" name="kemasyarakatan"
                                            value="{{ $kependudukan->kemasyarakatan }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah_volume_kependudukan">Jumlah/Volume (m2)</label>
                                        <input type="number" class="form-control" id="jumlah_volume_kependudukan"
                                            name="jumlah_volume_kependudukan"
                                            value="{{ $kependudukan->jumlah_volume_kependudukan }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="keterangan_kependudukan">Keterangan</label>
                                        <textarea class="form-control" id="keterangan_kependudukan" name="keterangan_kependudukan" rows="3">{{ $kependudukan->keterangan_kependudukan }}</textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update Penduduk</button>
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
