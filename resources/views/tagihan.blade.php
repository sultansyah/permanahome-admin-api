@extends('base')

@section('title', 'Tagihan')

@section('header_title', 'Tagihan')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-body table-responsive p-0">
                        <table id="tagihan" class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Jumlah Tagihan</th>
                                    <th>Tanggal Dibayar</th>
                                    <th>Status Pembayaran</th>
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
                                @foreach ($tagihan as $tagiha)
                                    <tr>
                                        <td>{{ $tagiha->id }}</td>
                                        <td>{{ $tagiha->jumlah_tagihan }}</td>
                                        <td>{{ $tagiha->tanggal_dibayar }}</td>
                                        <td>{{ ($tagiha->status_pembayaran) ? 'Sudah dibayar' : 'Belum dibayar' }}</td>
                                        <td>{{ $tagiha->user->id }}</td>
                                        <td>{{ $tagiha->user->full_name }}</td>
                                        <td>{{ $tagiha->user->no_hp }}</td>
                                        <td>{{ $tagiha->user->no_wa }}</td>
                                        <td>{{ $tagiha->permana_home_number->paket_layanan->id }}</td>
                                        <td>{{ $tagiha->permana_home_number->paket_layanan->nama }}</td>
                                        <td>{{ $tagiha->permana_home_number->paket_layanan->area }}</td>
                                        <td>{{ $tagiha->permana_home_number->id }}</td>
                                        <td>{{ $tagiha->permana_home_number->full_name }}</td>
                                        <td>{{ $tagiha->permana_home_number->no_hp }}</td>
                                        <td>{{ $tagiha->permana_home_number->no_wa }}</td>
                                        <td>{{ $tagiha->permana_home_number->alamat_instalasi }}</td>
                                        <td>{{ $tagiha->created_at }}</td>
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
        $('#tagihan').DataTable();
    </script>
@endsection
