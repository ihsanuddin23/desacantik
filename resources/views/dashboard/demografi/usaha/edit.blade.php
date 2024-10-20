@extends('dashboard.master')
@section('title', 'Edit Usaha')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Form Edit Usaha</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a
                                    href="{{ route('dashboard.dashboard.demografi.index') }}">Usaha</a></li>
                            <li class="breadcrumb-item active">Edit Usaha</li>
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
                                <h3 class="card-title">Form Edit Usaha</h3>
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

                                <form action="{{ route('dashboard.usaha.update', $usaha->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label for="nama_usaha">Nama Usaha</label>
                                        <input type="text" class="form-control" id="nama_usaha" name="nama_usaha"
                                            value="{{ $usaha->nama_usaha }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah_volume_usaha">Jumlah/Volume (m2)</label>
                                        <input type="number" class="form-control" id="jumlah_volume_usaha"
                                            name="jumlah_volume_usaha" value="{{ $usaha->jumlah_volume_usaha }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="keterangan_usaha">Keterangan</label>
                                        <textarea class="form-control" id="keterangan_usaha" name="keterangan_usaha" rows="3">{{ $usaha->keterangan_usaha }}</textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update Usaha</button>
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
