@extends('dashboard.master')
@section('title', 'Add Sarana Usaha')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Form Add New Sarana Usaha</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.dashboard.demografi.index') }}">Sarana
                                    Usaha</a></li>
                            <li class="breadcrumb-item active">Add Sarana Usaha</li>
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
                                <h3 class="card-title">Form Add New Sarana Usaha</h3>
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

                                <form action="{{ route('dashboard.saranausaha.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="jenis_perusahaan">Jenis Perusahaan</label>
                                        <input type="text" class="form-control" id="jenis_perusahaan"
                                            name="jenis_perusahaan">
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah_volume_sarana_usaha">Jumlah/Volume (m2)</label>
                                        <input type="number" class="form-control" id="jumlah_volume_sarana_usaha"
                                            name="jumlah_volume_sarana_usaha">
                                    </div>
                                    <div class="form-group">
                                        <label for="keterangan_sarana_usaha">Keterangan</label>
                                        <textarea class="form-control" id="keterangan_sarana_usaha" name="keterangan_sarana_usaha" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Add Sarana Usaha</button>
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
