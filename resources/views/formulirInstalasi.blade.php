@extends('base')

@section('title', 'Formulir Instalasi')

@section('header_title', 'Formulir Instalasi')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-body table-responsive p-0">
                        <table id="formulirInstalasi" class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Lengkap</th>
                                    <th>Email</th>
                                    <th>No Hp</th>
                                    <th>No Wa</th>
                                    <th>Tanda Tangan</th>
                                    <th>KTP</th>
                                    <th>Negara</th>
                                    <th>Provinsi</th>
                                    <th>Kota</th>
                                    <th>Alamat Instalasi</th>
                                    <th>Kode Pos</th>
                                    <th>Apakah Diterima?</th>
                                    <th>Paket Layanan ID</th>
                                    <th>Paket Layanan Area</th>
                                    <th>Paket Layanan</th>
                                    <th>User ID</th>
                                    <th>User</th>
                                    <th>Created At</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($formulirInstalasi as $formulir)
                                    <tr <?= $formulir->is_accept == 1 ? 'style="color: red;"' : '' ?>>
                                        <td>{{ $formulir->id }}</td>
                                        <td>{{ $formulir->full_name }}</td>
                                        <td>{{ $formulir->email }}</td>
                                        <td>{{ $formulir->no_hp }}</td>
                                        <td>{{ $formulir->no_wa }}</td>
                                        <td><img src="{{ url("storage/$formulir->tanda_tangan") }}" width="50"></td>
                                        <td><img src="{{ url("storage/$formulir->ktp") }}" width="50"></td>
                                        <td>{{ $formulir->negara }}</td>
                                        <td>{{ $formulir->provinsi }}</td>
                                        <td>{{ $formulir->kota }}</td>
                                        <td>{{ $formulir->alamat_instalasi }}</td>
                                        <td>{{ $formulir->kode_pos }}</td>
                                        <td>{{ $formulir->is_accept == 1 ? 'Diterima' : 'Tidak diterima' }}</td>
                                        <td>{{ $formulir->paket_layanan->id }}</td>
                                        <td>{{ $formulir->paket_layanan->area }}</td>
                                        <td>{{ $formulir->paket_layanan->nama }}</td>
                                        <td>{{ $formulir->user->id }}</td>
                                        <td>{{ $formulir->user->full_name }}</td>
                                        <td>{{ $formulir->created_at }}</td>
                                        @if ($formulir->is_accept == 0)    
                                        <td>
                                            <button type="button" class="btn btn-default" data-toggle="modal"
                                                data-target="#modal-sm{{ $formulir->id }}">
                                                Terima?
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="modal-sm{{ $formulir->id }}">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Anda Yakin?</h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Terima instalasi no {{ $formulir->id }}?</p>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default"
                                                                data-dismiss="modal">Close</button>
                                                            <a href="{{ route('admin.formulir-instalasi.terima', ['id' => $formulir->id]) }}"
                                                                class="btn btn-primary">Save changes</a>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->
                                        </td>
                                            @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('js')
    <script>
        $('#formulirInstalasi').DataTable();
    </script>
@endsection
