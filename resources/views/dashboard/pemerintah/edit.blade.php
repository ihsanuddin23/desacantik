@extends('dashboard.master')
@section('title', 'Edit Pemerintah')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Pemerintah</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.pemerintah.index') }}">All
                                    Pemerintah</a></li>
                            <li class="breadcrumb-item active">Edit Pemerintah</li>
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
                                <h3 class="card-title">Edit Pemerintah</h3>
                            </div>
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert"
                                            aria-hidden="true">×</button>
                                        <h5><i class="icon fas fa-ban"></i> Error!</h5>
                                        @foreach ($errors->all() as $error)
                                            <p class="m-0">{{ $error }}</p>
                                        @endforeach
                                    </div>
                                @endif
                                @if (session('success'))
                                    <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert"
                                            aria-hidden="true">×</button>
                                        <h5><i class="icon fas fa-check"></i> Success!</h5>
                                        <p class="m-0">{{ session('success') }}</p>
                                    </div>
                                @endif
                                <form action="{{ route('dashboard.pemerintah.update', $pemerintah->id) }}"
                                    enctype="multipart/form-data" method="POST">
                                    @csrf
                                    @method('PUT') {{-- Tambahkan method PUT untuk update --}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="thumbnail">Thumbnail</label>
                                                <input type="file" class="form-control" id="thumbnail" name="thumbnail"
                                                    accept="image/*" />
                                                @if ($pemerintah->thumbnail)
                                                    <img src="{{ asset('thumbnails/' . $pemerintah->thumbnail) }}"
                                                        alt="Current Thumbnail" class="img-thumbnail mt-2" width="100">
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="nama">Nama</label>
                                                <input type="text" class="form-control" id="nama" name="nama"
                                                    placeholder="Enter nama" value="{{ old('nama', $pemerintah->nama) }}"
                                                    required />
                                            </div>
                                            <div class="form-group">
                                                <label for="jabatan">Jabatan</label>
                                                <input type="text" class="form-control" id="jabatan" name="jabatan"
                                                    placeholder="Enter jabatan"
                                                    value="{{ old('jabatan', $pemerintah->jabatan) }}" required />
                                            </div>
                                            <div class="form-group">
                                                <label for="niap">NIAP</label>
                                                <input type="text" class="form-control" id="niap" name="niap"
                                                    placeholder="Enter NIAP" value="{{ old('niap', $pemerintah->niap) }}"
                                                    required />
                                            </div>
                                            <div class="form-group">
                                                <label for="tempat_lahir">Tempat Lahir</label>
                                                <input type="text" class="form-control" id="tempat_lahir"
                                                    name="tempat_lahir" placeholder="Enter tempat lahir"
                                                    value="{{ old('tempat_lahir', $pemerintah->tempat_lahir) }}" required />
                                            </div>
                                            <div class="form-group">
                                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                                <input type="date" class="form-control" id="tanggal_lahir"
                                                    name="tanggal_lahir"
                                                    value="{{ old('tanggal_lahir', $pemerintah->tanggal_lahir) }}"
                                                    required />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="agama">Agama</label>
                                                <input type="text" class="form-control" id="agama" name="agama"
                                                    placeholder="Enter agama"
                                                    value="{{ old('agama', $pemerintah->agama) }}" required />
                                            </div>
                                            <div class="form-group">
                                                <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                                                <input type="text" class="form-control" id="pendidikan_terakhir"
                                                    name="pendidikan_terakhir" placeholder="Enter pendidikan terakhir"
                                                    value="{{ old('pendidikan_terakhir', $pemerintah->pendidikan_terakhir) }}"
                                                    required />
                                            </div>
                                            <div class="form-group">
                                                <label for="nomor_sk">Nomor SK</label>
                                                <input type="text" class="form-control" id="nomor_sk"
                                                    name="nomor_sk" placeholder="Enter nomor SK"
                                                    value="{{ old('nomor_sk', $pemerintah->nomor_sk) }}" />
                                            </div>
                                            <div class="form-group">
                                                <label for="tanggal_sk">Tanggal SK</label>
                                                <input type="date" class="form-control" id="tanggal_sk"
                                                    name="tanggal_sk"
                                                    value="{{ old('tanggal_sk', $pemerintah->tanggal_sk) }}" />
                                            </div>
                                            <div class="form-group">
                                                <label for="masa_jabatan">Masa Jabatan</label>
                                                <input type="text" class="form-control" id="masa_jabatan"
                                                    name="masa_jabatan" placeholder="Enter masa jabatan"
                                                    value="{{ old('masa_jabatan', $pemerintah->masa_jabatan) }}"
                                                    required />
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <input type="text" class="form-control" id="status" name="status"
                                                    placeholder="Enter status"
                                                    value="{{ old('status', $pemerintah->status) }}" required />
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
