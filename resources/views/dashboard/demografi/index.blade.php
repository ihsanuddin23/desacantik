@extends('dashboard.master')
@section('title', 'Sarana Prasarana')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Sarana Prasarana</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Sarana Prasarana</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-check"></i> Success!</h5>
                        <p class="m-0">{{ session('success') }}</p>
                    </div>
                @endif
                {{-- Transportasi --}}
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Daftar Sarana Transportasi</h3>
                                <div class="card-tools">
                                    <a href="{{ route('dashboard.saranatransportasi.create') }}" class="btn btn-primary">Add
                                        New Sarana</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Jenis Sarana</th>
                                                <th class="text-center">Kondisi</th>
                                                <th class="text-center">Jumlah/Volume (m²)</th>
                                                <th class="text-center">Keterangan</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($saranatransportasi as $index => $sarana)
                                                <tr>
                                                    <td class="text-center">{{ $index + 1 }}</td>
                                                    <td>{{ $sarana->jenis_sarana_prasarana_transportasi }}</td>
                                                    <td>{{ $sarana->kondisi_transportasi }}</td>
                                                    <td>{{ $sarana->jumlah_volume_transportasi }}</td>
                                                    <td>{{ $sarana->keterangan_transportasi }}</td>
                                                    <td>
                                                        <a href="{{ route('dashboard.saranatransportasi.edit', $sarana->id) }}"
                                                            class="btn btn-warning">Edit</a>
                                                        <form
                                                            action="{{ route('dashboard.saranatransportasi.destroy', $sarana->id) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger deletebtn"
                                                                data-entity="Transportasi">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="text-center">Data Sarana Transportasi Kosong!
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Tempat Tinggal --}}
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Daftar Sarana Tempat Tinggal</h3>
                                <div class="card-tools">
                                    <a href="{{ route('dashboard.saranatempattinggal.create') }}"
                                        class="btn btn-primary">Add New Sarana Tempat Tinggal</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Jenis Sarana</th>
                                                <th class="text-center">Kondisi</th>
                                                <th class="text-center">Jumlah/Volume (m²)</th>
                                                <th class="text-center">Keterangan</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($saranatempattinggal as $index => $sarana)
                                                <tr>
                                                    <td class="text-center">{{ $index + 1 }}</td>
                                                    <td>{{ $sarana->jenis_sarana_prasarana_tempat_tinggal }}</td>
                                                    <td>{{ $sarana->kondisi_tempat_tinggal }}</td>
                                                    <td>{{ $sarana->jumlah_volume_tempat_tinggal }}</td>
                                                    <td>{{ $sarana->keterangan_tempat_tinggal }}</td>
                                                    <td>
                                                        <a href="{{ route('dashboard.saranatempattinggal.edit', $sarana->id) }}"
                                                            class="btn btn-warning">Edit</a>
                                                        <form
                                                            action="{{ route('dashboard.saranatempattinggal.destroy', $sarana->id) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger deletebtn"
                                                                data-entity="Tempat Tinggal">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="text-center">Data Sarana Tempat Tinggal
                                                        Kosong!
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Fasilitas --}}
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Daftar Fasilitas Umum</h3>
                                <div class="card-tools">
                                    <a href="{{ route('dashboard.fasilitasumum.create') }}" class="btn btn-primary">Add New
                                        Fasilitas Umum</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Jenis Sarana</th>
                                                <th class="text-center">Nama</th>
                                                <th class="text-center">Jumlah/Volume (m²)</th>
                                                <th class="text-center">Keterangan</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($fasilitasumum as $index => $fasilitas)
                                                <tr>
                                                    <td class="text-center">{{ $index + 1 }}</td>
                                                    <td>{{ $fasilitas->jenis_sarana_prasarana_fasilitas_umum }}</td>
                                                    <td>
                                                        <ul style="list-style-type: none; padding-left: 0;">
                                                            @php
                                                                $masjidArray = explode(
                                                                    "\n",
                                                                    $fasilitas->nama_fasilitas_umum,
                                                                );
                                                            @endphp
                                                            @foreach ($masjidArray as $masjid)
                                                                <li>{{ trim($masjid) }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </td>
                                                    <td>{{ $fasilitas->jumlah_volume_fasilitas_umum }}</td>
                                                    <td>
                                                        <ul style="list-style-type: none; padding-left: 0;">
                                                            @php
                                                                $masjidArray = explode(
                                                                    "\n",
                                                                    $fasilitas->keterangan_fasilitas_umum,
                                                                );
                                                            @endphp
                                                            @foreach ($masjidArray as $masjid)
                                                                <li>{{ trim($masjid) }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </td>

                                                    <td>
                                                        <a href="{{ route('dashboard.fasilitasumum.edit', $fasilitas->id) }}"
                                                            class="btn btn-warning mb-1">Edit</a>
                                                        <form
                                                            action="{{ route('dashboard.fasilitasumum.destroy', $fasilitas->id) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger deletebtn mt-1"
                                                                data-entity="Fasilitas Umum">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="text-center">No Sarana Tempat Tinggal found!
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Kependudukan --}}
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Daftar Kependudukan</h3>
                                <div class="card-tools">
                                    <a href="{{ route('dashboard.kependudukan.create') }}" class="btn btn-primary">Add
                                        New Kependudukan</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Kemasyarakatan</th>
                                                <th class="text-center">Jumlah/Volume (m²)</th>
                                                <!-- Ini field jumlah_volume dari kependudukan -->
                                                <th class="text-center">Keterangan</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($kependudukan as $index => $penduduk)
                                                <tr>
                                                    <td class="text-center">{{ $index + 1 }}</td>
                                                    <td>{{ $penduduk->kemasyarakatan }}</td>
                                                    <td>{{ $penduduk->jumlah_volume_kependudukan }}</td>
                                                    <!-- Mengambil jumlah_volume dari model kependudukan -->
                                                    <td>{{ $penduduk->keterangan_kependudukan }}</td>
                                                    <td>
                                                        <a href="{{ route('dashboard.kependudukan.edit', $penduduk->id) }}"
                                                            class="btn btn-warning">Edit</a>
                                                        <form
                                                            action="{{ route('dashboard.kependudukan.destroy', $penduduk->id) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger deletebtn"
                                                                data-entity="Kependudukan">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="text-center">Data Kependudukan Kosong!</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Usaha --}}
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Daftar Usaha</h3>
                                <div class="card-tools">
                                    <a href="{{ route('dashboard.usaha.create') }}" class="btn btn-primary">Add
                                        New Usaha</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Nama Usaha</th>
                                                <th class="text-center">Jumlah/Volume (m²)</th>
                                                <!-- Ini field jumlah_volume_usaha dari usaha -->
                                                <th class="text-center">Keterangan</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($usaha as $index => $ush)
                                                <tr>
                                                    <td class="text-center">{{ $index + 1 }}</td>
                                                    <td>{{ $ush->nama_usaha }}</td>
                                                    <td>{{ $ush->jumlah_volume_usaha }}</td>
                                                    <!-- Mengambil jumlah_volume dari model usaha -->
                                                    <td>{{ $ush->keterangan_usaha }}</td>
                                                    <td>
                                                        <a href="{{ route('dashboard.usaha.edit', $ush->id) }}"
                                                            class="btn btn-warning">Edit</a>
                                                        <form action="{{ route('dashboard.usaha.destroy', $ush->id) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger deletebtn"
                                                                data-entity="Usaha">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="text-center">Data Usaha Kosong!</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Pendidikan --}}
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Daftar Pendidikan</h3>
                                <div class="card-tools">
                                    <a href="{{ route('dashboard.pendidikan.create') }}" class="btn btn-primary">Add
                                        New Pendidikan</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Jenis Pendidikan</th>
                                                <th class="text-center">Nama</th>
                                                <th class="text-center">Jumlah/Volume (m²)</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($pendidikan as $index => $pendidik)
                                                <tr>
                                                    <td class="text-center">{{ $index + 1 }}</td>
                                                    <td>{{ $pendidik->jenis_pendidikan }}</td>
                                                    <td class="bg-white text-dark">
                                                        <ul style="list-style-type: none; padding-left: 0;">
                                                            @php
                                                                $pendidikArray = explode(
                                                                    "\n",
                                                                    $pendidik->nama_pendidikan,
                                                                );
                                                            @endphp
                                                            @foreach ($pendidikArray as $pendidikandemografi)
                                                                <li>{{ trim($pendidikandemografi) }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </td>
                                                    <!-- Mengambil jumlah_volume dari model usaha -->
                                                    <td>{{ $pendidik->jumlah_volume_pendidikan }}</td>
                                                    <td>
                                                        <a href="{{ route('dashboard.pendidikan.edit', $pendidik->id) }}"
                                                            class="btn btn-warning">Edit</a>
                                                        <form
                                                            action="{{ route('dashboard.pendidikan.destroy', $pendidik->id) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger deletebtn"
                                                                data-entity="Pendidikan">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="text-center">Data Usaha Kosong!</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Sarana Usaha --}}
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Daftar Sarana Usaha</h3>
                                <div class="card-tools">
                                    <a href="{{ route('dashboard.saranausaha.create') }}" class="btn btn-primary">Add
                                        New Sarana Usaha</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Jenis Perusahaan</th>
                                                <th class="text-center">Jumlah/Volume (m²)</th>
                                                <th class="text-center">Keterangan</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($saranausaha as $index => $su)
                                                <tr>
                                                    <td class="text-center">{{ $index + 1 }}</td>
                                                    <td>{{ $su->jenis_perusahaan }}</td>
                                                    <td>{{ $su->jumlah_volume_sarana_usaha }}</td>
                                                    <td>{{ $su->keterangan_sarana_usaha }}</td>
                                                    <td>
                                                        <a href="{{ route('dashboard.saranausaha.edit', $su->id) }}"
                                                            class="btn btn-warning">Edit</a>
                                                        <form
                                                            action="{{ route('dashboard.saranausaha.destroy', $su->id) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger deletebtn"
                                                                data-entity="Sarana Usaha">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="text-center">Data Sarana Usaha Kosong!</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>


    </div>

    @section('script')
        <script src="{{ asset('assets/dashboard/plugins/sweetalert2/sweetalert2.all.js') }}"></script>
        <script>
            $('.deletebtn').on('click', function(e) {
                e.preventDefault();
                var form = $(this).parents('form');
                var entity = $(this).data('entity');
                Swal.fire({
                    title: 'Apa kamu yakin?',
                    type: 'warning',
                    icon: 'warning',
                    text: 'Data ' + entity + ' akan dihapus!',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus saja!'
                }).then((result) => {
                    if (result.value) {
                        form.submit();
                    }
                });
            });
        </script>
    @endsection
@endsection
