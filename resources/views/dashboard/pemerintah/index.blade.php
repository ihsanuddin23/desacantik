@extends('dashboard.master')
@section('title', 'Data Pemerintah')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Pemerintah</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Pemerintah</li>
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
                                <h3 class="card-title">Data Pemerintah</h3>
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
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-center">Thumbnail</th>
                                                <th class="text-center">Nama</th>
                                                <th class="text-center">Jabatan</th>
                                                <th class="text-center">NIAP</th>
                                                <th class="text-center">Tempat, Tanggal Lahir</th>
                                                <th class="text-center">Agama</th>
                                                <th class="text-center">Pendidikan Terakhir</th>
                                                <th class="text-center">Nomor SK</th>
                                                <th class="text-center">Tanggal SK</th>
                                                <th class="text-center">Masa Jabatan</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Tupoksi Jabatan</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($pemerintah as $data)
                                                <tr>
                                                    <td class="text-center">{{ $loop->iteration }}</td>
                                                    <td class="text-center">
                                                        @if ($data->thumbnail && file_exists(public_path('thumbnails/' . $data->thumbnail)))
                                                            <img src="{{ asset('thumbnails/' . $data->thumbnail) }}"
                                                                alt="{{ $data->nama }}"
                                                                style="width: 100px; height: auto;">
                                                        @else
                                                            <img src="{{ asset('thumbnails/default.png') }}"
                                                                alt="Default Image" style="width: 100px; height: auto;">
                                                        @endif
                                                    </td>
                                                    <td>{{ $data->nama }}</td>
                                                    <td>{{ $data->jabatan }}</td>
                                                    <td>{{ $data->niap }}</td>
                                                    <td>{{ $data->tempat_lahir }},
                                                        {{ is_string($data->tanggal_lahir) ? date('d M Y', strtotime($data->tanggal_lahir)) : $data->tanggal_lahir->format('d M Y') }}
                                                    </td>
                                                    <td>{{ $data->agama }}</td>
                                                    <td>{{ $data->pendidikan_terakhir }}</td>
                                                    <td>{{ $data->nomor_sk ?? '-' }}</td>
                                                    <td>{{ is_string($data->tanggal_sk) ? date('d M Y', strtotime($data->tanggal_sk)) : $data->tanggal_sk->format('d M Y') }}
                                                    </td>
                                                    <td>{{ $data->masa_jabatan }}</td>
                                                    <td>{{ $data->status }}</td>
                                                    <td>{{ $data->tupoksi_jabatan }}</td>
                                                    <td>
                                                        <div class="d-flex justify-content-center">
                                                            <a href="{{ route('dashboard.pemerintah.edit', $data->id) }}"
                                                                class="btn btn-warning mr-1">Edit</a>
                                                            <form
                                                                action="{{ route('dashboard.pemerintah.destroy', $data->id) }}"
                                                                method="POST" class="mr-1">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-danger deletebtn">Delete</button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="14" class="text-center">Tidak ada data!</td>
                                                </tr>
                                            @endforelse
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                            <div class="card-footer clearfix">
                                <ul class="pagination pagination-sm m-0 float-right">
                                    {{ $pemerintah->links() }}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

@section('script')
    <script src="{{ asset('assets/dashboard/plugins/sweetalert2/sweetalert2.all.js') }}"></script>
    <script>
        $('.deletebtn').on('click', function(e) {
            e.preventDefault();
            var form = $(this).parents('form');
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: 'Data ini akan dihapus secara permanen!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    </script>
@endsection
