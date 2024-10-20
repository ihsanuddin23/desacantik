@extends('dashboard.master')
@section('title', 'Edit Identitas RT')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Form Edit Identitas RT</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a
                                    href="{{ route('dashboard.dashboard.demografirt.index') }}">Identitas
                                    RT</a></li>
                            <li class="breadcrumb-item active">Edit Identitas RT</li>
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
                                <h3 class="card-title">Form Edit Identitas RT</h3>
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

                                <form action="{{ route('dashboard.identitasrt.update', $identitasRt->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label for="nomor_rt">Nomor RT</label>
                                        <input type="text" class="form-control" id="nomor_rt" name="nomor_rt"
                                            value="{{ old('nomor_rt', $identitasRt->nomor_rt) }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="nomor_rw">Nomor RW</label>
                                        <input type="text" class="form-control" id="nomor_rw" name="nomor_rw"
                                            value="{{ old('nomor_rw', $identitasRt->nomor_rw) }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="dusun">Dusun</label>
                                        <input type="text" class="form-control" id="dusun" name="dusun"
                                            value="{{ old('dusun', $identitasRt->dusun) }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="nama_ketua_rt">Nama Ketua RT</label>
                                        <input type="text" class="form-control" id="nama_ketua_rt" name="nama_ketua_rt"
                                            value="{{ old('nama_ketua_rt', $identitasRt->nama_ketua_rt) }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="tanggal_lahir_ketua_rt">Tanggal Lahir Ketua RT</label>
                                        <input type="date" class="form-control" id="tanggal_lahir_ketua_rt"
                                            name="tanggal_lahir_ketua_rt"
                                            value="{{ old('tanggal_lahir_ketua_rt', \Carbon\Carbon::parse($identitasRt->tanggal_lahir_ketua_rt)->format('Y-m-d')) }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="pendidikan_ketua_rt">Pendidikan Ketua RT</label>
                                        <input type="text" class="form-control" id="pendidikan_ketua_rt"
                                            name="pendidikan_ketua_rt"
                                            value="{{ old('pendidikan_ketua_rt', $identitasRt->pendidikan_ketua_rt) }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="pekerjaan_ketua_rt">Pekerjaan Ketua RT</label>
                                        <input type="text" class="form-control" id="pekerjaan_ketua_rt"
                                            name="pekerjaan_ketua_rt"
                                            value="{{ old('pekerjaan_ketua_rt', $identitasRt->pekerjaan_ketua_rt) }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="nomor_telepon_ketua_rt">Nomor Telepon Ketua RT</label>
                                        <input type="text" class="form-control" id="nomor_telepon_ketua_rt"
                                            name="nomor_telepon_ketua_rt"
                                            value="{{ old('nomor_telepon_ketua_rt', $identitasRt->nomor_telepon_ketua_rt) }}">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update Identitas RT</button>
                                    <a href="{{ route('dashboard.dashboard.demografirt.index') }}"
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
