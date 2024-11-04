@extends('dashboard.master')
@section('title', 'Edit Pendidikan')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Form Edit Pendidikan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a
                                    href="{{ route('dashboard.dashboard.demografi.index') }}">Pendidikan</a></li>
                            <li class="breadcrumb-item active">Edit Pendidikan</li>
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
                                <h3 class="card-title">Form Edit Pendidikan</h3>
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

                                <form action="{{ route('dashboard.pendidikan.update', $pendidikan->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label for="jenis_pendidikan">Jenis pendidikan</label>
                                        <input type="text" class="form-control" id="jenis_pendidikan"
                                            name="jenis_pendidikan" value="{{ $pendidikan->jenis_pendidikan }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_pendidikan">Nama Pendidikan</label>
                                        <textarea class="form-control" id="nama_pendidikan" name="nama_pendidikan" rows="3">{{ $pendidikan->nama_pendidikan }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah_volume_pendidikan">Jumlah/Volume (m2)</label>
                                        <input type="number" class="form-control" id="jumlah_volume_pendidikan"
                                            name="jumlah_volume_pendidikan"
                                            value="{{ $pendidikan->jumlah_volume_pendidikan }}">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update Pendidikan</button>
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
