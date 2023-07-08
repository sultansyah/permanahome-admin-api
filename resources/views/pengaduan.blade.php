@extends('base')

@section('title', 'Pengaduan')

@section('header_title', 'Pengaduan')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-body table-responsive p-0">
                        <table id="pengaduan" class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Jenis</th>
                                    <th>Divisi</th>
                                    <th>status</th>
                                    <th>Deskripsi</th>
                                    <th>Tanggal Diselesaikan</th>
                                    <th>Tindakan</th>
                                    <th>User ID</th>
                                    <th>User Nama</th>
                                    <th>User No Hp</th>
                                    <th>User No Wa</th>
                                    <th>Paket ID</th>
                                    <th>Paket Nama</th>
                                    <th>Paket Area</th>
                                    <th>Permana Home Number ID</th>
                                    <th>Permana Home Number Nama</th>
                                    <th>Permana Home Number No Hp</th>
                                    <th>Permana Home Number No Wa</th>
                                    <th>Permana Home Number Alamat Instalasi</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pengaduan as $pengadu)
                                    <tr>
                                        <td>{{ $pengadu->id }}</td>
                                        <td>{{ $pengadu->jenis }}</td>
                                        <td>{{ $pengadu->divisi }}</td>
                                        <td>{{ $pengadu->status }}</td>
                                        <td>{{ $pengadu->deskripsi }}</td>
                                        <td>{{ $pengadu->tanggal_diselesaikan }}</td>
                                        <td>{{ $pengadu->tindakan }}</td>
                                        <td>{{ $pengadu->user->id }}</td>
                                        <td>{{ $pengadu->user->full_name }}</td>
                                        <td>{{ $pengadu->user->no_hp }}</td>
                                        <td>{{ $pengadu->user->no_wa }}</td>
                                        <td>{{ $pengadu->permana_home_number->paket_layanan->id }}</td>
                                        <td>{{ $pengadu->permana_home_number->paket_layanan->nama }}</td>
                                        <td>{{ $pengadu->permana_home_number->paket_layanan->area }}</td>
                                        <td>{{ $pengadu->permana_home_number->id }}</td>
                                        <td>{{ $pengadu->permana_home_number->full_name }}</td>
                                        <td>{{ $pengadu->permana_home_number->no_hp }}</td>
                                        <td>{{ $pengadu->permana_home_number->no_wa }}</td>
                                        <td>{{ $pengadu->permana_home_number->alamat_instalasi }}</td>
                                        <td>{{ $pengadu->created_at }}</td>
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
        $('#pengaduan').DataTable();
    </script>
@endsection
