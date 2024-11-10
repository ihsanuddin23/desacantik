@extends('dashboard.master')
@section('title', 'Identitas RT')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Demografi RT</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Demografi RT</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        {{-- Identitas RT --}}
        <div class="row">
            <div class="col-12 ml-2"> <!-- Menambahkan ml-2 untuk memberi jarak -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Identitas RT</h3>
                        <div class="card-tools">
                            <a href="{{ route('dashboard.identitasrt.create') }}" class="btn btn-primary">Add New Identitas
                                RT</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nomor RT</th>
                                        <th class="text-center">Nomor RW</th>
                                        <th class="text-center">Dusun</th>
                                        <th class="text-center">Nama Ketua RT</th>
                                        <th class="text-center">Jumlah KK</th>
                                        <th class="text-center">Jumlah Laki-laki</th>
                                        <th class="text-center">Jumlah Perempuan</th>
                                        <th class="text-center">Jumlah Penduduk</th>

                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($identitasrt as $index => $identitas)
                                        <tr>
                                            <td class="text-center">
                                                {{ ($identitasrt->currentPage() - 1) * $identitasrt->perPage() + $loop->iteration }}
                                            </td>
                                            <td>{{ $identitas->nomor_rt }}</td>
                                            <td>{{ $identitas->nomor_rw }}</td>
                                            <td>{{ $identitas->dusun }}</td>
                                            <td>{{ ucwords(strtolower($identitas->nama_ketua_rt)) }}</td>

                                            <td>{{ $identitas->jumlah_kk }}</td>
                                            <td>{{ $identitas->laki_laki }}</td>
                                            <td>{{ $identitas->perempuan }}</td>
                                            <td>{{ $identitas->perempuan + $identitas->laki_laki }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('dashboard.identitasrt.show', $identitas->id) }}"
                                                    class="btn btn-info">Show</a>
                                                <a href="{{ route('dashboard.identitasrt.edit', $identitas->id) }}"
                                                    class="btn btn-warning">Edit</a>
                                                <form action="{{ route('dashboard.identitasrt.destroy', $identitas->id) }}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger deletebtn"
                                                        data-entity="Identitas RT">Delete</button>
                                                </form>
                                            </td>

                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="10" class="text-center">Data Identitas RT Kosong!</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-footer clearfix">
                        <div class="float-right">
                            {{ $identitasrt->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Pendidikan RT --}}
        <div class="row">
            <div class="col-12 ml-2"> <!-- Menambahkan ml-2 untuk memberi jarak -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Pendidikan RT</h3>
                        <div class="card-tools">
                            <a href="{{ route('dashboard.pendidikanrt.create') }}" class="btn btn-primary">Add New
                                Pendidikan RT</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nomor RT</th>
                                        <th class="text-center">Nomor RW</th>
                                        <th class="text-center">Dusun</th>
                                        <th class="text-center">Nama RT</th>
                                        <th class="text-center">Jumlah</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($pendidikanrt as $index => $pendidikan)
                                        <tr>
                                            <td class="text-center">
                                                {{ ($pendidikanrt->currentPage() - 1) * $pendidikanrt->perPage() + $loop->iteration }}
                                            </td>
                                            <td>{{ $pendidikan->identitasRt->nomor_rt ?? '-' }}</td>
                                            <td>{{ $pendidikan->identitasRt->nomor_rw ?? '-' }}</td>
                                            <td>{{ $pendidikan->identitasRt->dusun ?? '-' }}</td>
                                            <td>{{ ucwords(strtolower($pendidikan->identitasRt->nama_ketua_rt)) ?? '-' }}
                                            </td>
                                            <td>{{ $pendidikan->total }}</td>

                                            <td class="text-center">
                                                <a href="{{ route('dashboard.pendidikanrt.show', $pendidikan->id) }}"
                                                    class="btn btn-info">Show</a>
                                                <a href="{{ route('dashboard.pendidikanrt.edit', $pendidikan->id) }}"
                                                    class="btn btn-warning">Edit</a>
                                                <form
                                                    action="{{ route('dashboard.pendidikanrt.destroy', $pendidikan->id) }}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger deletebtn"
                                                        data-entity="Pendidikan RT">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="10" class="text-center">Data Pendidikan RT Kosong!</td>
                                        </tr>
                                    @endforelse
                                </tbody>

                            </table>
                        </div>
                    </div>

                    <div class="card-footer clearfix">
                        <div class="float-right">
                            {{ $pendidikanrt->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Pekerjaan RT --}}
        <div class="row">
            <div class="col-12 ml-2"> <!-- Menambahkan ml-2 untuk memberi jarak -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Pekerjaan RT</h3>
                        <div class="card-tools">
                            <a href="{{ route('dashboard.pekerjaanrt.create') }}" class="btn btn-primary">Add New
                                Pekerjaan RT</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nomor RT</th>
                                        <th class="text-center">Nomor RW</th>
                                        <th class="text-center">Dusun</th>
                                        <th class="text-center">Nama RT</th>
                                        <th class="text-center">Jumlah Penduduk</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($pekerjaanrt as $index => $pekerjaan)
                                        <tr>
                                            <td class="text-center">
                                                {{ ($pekerjaanrt->currentPage() - 1) * $pekerjaanrt->perPage() + $loop->iteration }}
                                            </td>
                                            <td>{{ $pekerjaan->identitasRt->nomor_rt ?? '-' }}</td>
                                            <td>{{ $pekerjaan->identitasRt->nomor_rw ?? '-' }}</td>
                                            <td>{{ $pekerjaan->identitasRt->dusun ?? '-' }}</td>
                                            <td>{{ $pekerjaan->identitasRt->nama_ketua_rt ?? '-' }}</td>
                                            <td>{{ $pekerjaan->jumlah_penduduk ?? '0' }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('dashboard.pekerjaanrt.show', $pekerjaan->id) }}"
                                                    class="btn btn-info">Show</a>
                                                <a href="{{ route('dashboard.pekerjaanrt.edit', $pekerjaan->id) }}"
                                                    class="btn btn-warning">Edit</a>
                                                <form
                                                    action="{{ route('dashboard.pekerjaanrt.destroy', $pekerjaan->id) }}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger deletebtn"
                                                        data-entity="Pekerjaan RT">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center">Data Pekerjaan RT Kosong!</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-footer clearfix">
                        <div class="float-right">
                            {{ $pekerjaanrt->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                    icon: 'warning',
                    text: 'Data ' + entity + ' akan dihapus!',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus saja!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        </script>
    @endsection
@endsection
