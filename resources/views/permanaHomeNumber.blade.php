@extends('base')

@section('title', 'Permana Home Number')

@section('header_title', 'Permana Home Number')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-body table-responsive p-0">
                        <table id="permanaHomeNumber" class="table table-hover text-nowrap">
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
                                    <th>Area</th>
                                    <th>Paket Layanan</th>
                                    <th>Admin</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($permanaHomberNumbers as $permanaHomberNumber)
                                    <tr>
                                        <td>{{ $permanaHomberNumber->id }}</td>
                                        <td>{{ $permanaHomberNumber->full_name }}</td>
                                        <td>{{ $permanaHomberNumber->email }}</td>
                                        <td>{{ $permanaHomberNumber->no_hp }}</td>
                                        <td>{{ $permanaHomberNumber->no_wa }}</td>
                                        <td><img src="{{ url("storage/$permanaHomberNumber->tanda_tangan") }}" width="50"></td>
                                        <td><img src="{{ url("storage/$permanaHomberNumber->ktp") }}" width="50"></td>
                                        <td>{{ $permanaHomberNumber->negara }}</td>
                                        <td>{{ $permanaHomberNumber->provinsi }}</td>
                                        <td>{{ $permanaHomberNumber->kota }}</td>
                                        <td>{{ $permanaHomberNumber->alamat_instalasi }}</td>
                                        <td>{{ $permanaHomberNumber->kode_pos }}</td>
                                        <td>{{ $permanaHomberNumber->paket_layanan->area }}</td>
                                        <td>{{ $permanaHomberNumber->paket_layanan->nama }}</td>
                                        <td>{{ $permanaHomberNumber->admin->name }}</td>
                                        <td>{{ $permanaHomberNumber->created_at }}</td>
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
        $('#permanaHomberNumber').DataTable();
    </script>
@endsection
