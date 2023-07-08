@extends('base')

@section('title', 'Paket Layanan')

@section('header_title', 'Paket Layanan')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-body table-responsive p-0">
                        <table id="paketLayanan" class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Area</th>
                                    <th>Nama</th>
                                    <th>Deskripsi</th>
                                    <th>Biaya</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($paketLayanan as $paket)
                                    <tr>
                                        <td>{{ $paket->id }}</td>
                                        <td>{{ $paket->area }}</td>
                                        <td>{{ $paket->nama }}</td>
                                        <td>{{ $paket->deskripsi }}</td>
                                        <td>{{ $paket->biaya }}</td>
                                        <td>{{ $paket->created_at }}</td>
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
        $('#paketLayanan').DataTable();
    </script>
@endsection
