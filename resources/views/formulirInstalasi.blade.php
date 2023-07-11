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
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($formulirInstalasi as $formulir)
                                    <tr>
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
                                        <td>{{ ($formulir->is_accept == 1) ? 'Diterima' : 'Tidak diterima' }}</td>
                                        <td>{{ $formulir->paket_layanan->id }}</td>
                                        <td>{{ $formulir->paket_layanan->area }}</td>
                                        <td>{{ $formulir->paket_layanan->nama }}</td>
                                        <td>{{ $formulir->user->id }}</td>
                                        <td>{{ $formulir->user->full_name }}</td>
                                        <td>{{ $formulir->created_at }}</td>
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
