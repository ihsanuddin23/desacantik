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
            <div class="col-12">
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
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nomor RT</th>
                                        <th class="text-center">Nomor RW</th>
                                        <th class="text-center">Dusun</th>
                                        <th class="text-center">Nama Ketua RT</th>
                                        <th class="text-center">Tanggal Lahir Ketua RT</th>
                                        <th class="text-center">Pendidikan Ketua RT</th>
                                        <th class="text-center">Pekerjaan Ketua RT</th>
                                        <th class="text-center">Nomor Telepon Ketua RT</th>
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
                                            <td>{{ $identitas->nama_ketua_rt }}</td>
                                            <td>
                                                {{ $identitas->tanggal_lahir_ketua_rt ? \Carbon\Carbon::parse($identitas->tanggal_lahir_ketua_rt)->format('d M Y') : '-' }}
                                            </td>

                                            <td>{{ $identitas->pendidikan_ketua_rt }}</td>
                                            <td>{{ $identitas->pekerjaan_ketua_rt }}</td>
                                            <td>{{ $identitas->nomor_telepon_ketua_rt }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('dashboard.identitasrt.edit', $identitas->id) }}"
                                                    class="btn btn-warning my-2">Edit</a>
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
