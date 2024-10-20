<div class="col-lg-8 oredoo-content">
    <div class="row justify-content-center">
        @foreach ($pemerintahdesa as $data)
            <div class="col-md-8 mb-4">
                <div class="card bg-light text-dark" style="width: 100%;">
                    <div class="row no-gutters">
                        <div class="col-md-5 d-flex flex-column align-items-center justify-content-center">
                            <img src="{{ asset('thumbnails/' . $data->thumbnail) }}" class="card-img mb-2"
                                alt="{{ $data->nama }}" style="max-width: 90%; max-height: 80%;">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#tupoksiModal{{ $data->id }}">
                                Tupoksi Jabatan
                            </button>
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <table class="table table-borderless text-dark">
                                    <tbody>
                                        <tr>
                                            <td style="padding: 0.3rem;"><strong>Nama</strong></td>
                                            <td style="padding: 0.3rem;">: {{ $data->nama }}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0.3rem;"><strong>Jabatan</strong></td>
                                            <td style="padding: 0.3rem;">: {{ $data->jabatan }}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0.3rem;"><strong>NIAP</strong></td>
                                            <td style="padding: 0.3rem;">: {{ $data->niap }}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0.3rem;"><strong>Tempat, Tanggal Lahir</strong></td>
                                            <td style="padding: 0.3rem;">: {{ $data->tempat_lahir }},
                                                {{ is_string($data->tanggal_lahir) ? date('d M Y', strtotime($data->tanggal_lahir)) : $data->tanggal_lahir->format('d M Y') }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0.3rem;"><strong>Agama</strong></td>
                                            <td style="padding: 0.3rem;">: {{ $data->agama }}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0.3rem;"><strong>Pendidikan Terakhir</strong></td>
                                            <td style="padding: 0.3rem;">: {{ $data->pendidikan_terakhir }}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0.3rem;"><strong>Nomor SK</strong></td>
                                            <td style="padding: 0.3rem;">: {{ $data->nomor_sk ?? '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0.3rem;"><strong>Tanggal SK</strong></td>
                                            <td style="padding: 0.3rem;">:
                                                {{ is_string($data->tanggal_sk) ? date('d M Y', strtotime($data->tanggal_sk)) : $data->tanggal_sk->format('d M Y') }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0.3rem;"><strong>Masa Jabatan</strong></td>
                                            <td style="padding: 0.3rem;">: {{ $data->masa_jabatan }}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0.3rem;"><strong>Status</strong></td>
                                            <td style="padding: 0.3rem;">: {{ $data->status }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="tupoksiModal{{ $data->id }}" tabindex="-1" role="dialog"
                aria-labelledby="tupoksiModalLabel{{ $data->id }}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tupoksiModalLabel{{ $data->id }}">Tupoksi Jabatan -
                                {{ $data->nama }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Tambahkan informasi tupoksi jabatan di sini -->
                            <p>Informasi tupoksi jabatan untuk {{ $data->nama }}.</p>
                            <!-- Contoh: -->
                            <ul>
                                <li>Tugas 1</li>
                                <li>Tugas 2</li>
                                <li>Tugas 3</li>
                                <!-- Ganti dengan data yang relevan -->
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
