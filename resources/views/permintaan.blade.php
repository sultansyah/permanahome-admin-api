@extends('base')

@section('title', 'Permintaan')

@section('header_title', 'Permintaan')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-body table-responsive p-0">
                        <table id="permintaan" class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Jenis</th>
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
                                @foreach ($permintaan as $perminta)
                                    <tr>
                                        <td>{{ $perminta->id }}</td>
                                        <td>{{ $perminta->jenis }}</td>
                                        <td>{{ $perminta->status }}</td>
                                        <td>{{ $perminta->deskripsi }}</td>
                                        <td>{{ $perminta->tanggal_diselesaikan }}</td>
                                        <td>{{ $perminta->tindakan }}</td>
                                        <td>{{ $perminta->user->id }}</td>
                                        <td>{{ $perminta->user->full_name }}</td>
                                        <td>{{ $perminta->user->no_hp }}</td>
                                        <td>{{ $perminta->user->no_wa }}</td>
                                        <td>{{ $perminta->permana_home_number->paket_layanan->id }}</td>
                                        <td>{{ $perminta->permana_home_number->paket_layanan->nama }}</td>
                                        <td>{{ $perminta->permana_home_number->paket_layanan->area }}</td>
                                        <td>{{ $perminta->permana_home_number->id }}</td>
                                        <td>{{ $perminta->permana_home_number->full_name }}</td>
                                        <td>{{ $perminta->permana_home_number->no_hp }}</td>
                                        <td>{{ $perminta->permana_home_number->no_wa }}</td>
                                        <td>{{ $perminta->permana_home_number->alamat_instalasi }}</td>
                                        <td>{{ $perminta->created_at }}</td>
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
        $('#permintaan').DataTable();
    </script>
@endsection
