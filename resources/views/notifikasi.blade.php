@extends('base')

@section('title', 'Notifikasi')

@section('header_title', 'Notifikasi')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-body table-responsive p-0">
                        <table id="notifikasi" class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Pesan</th>
                                    <th>User ID</th>
                                    <th>User Name</th>
                                    <th>PermanaHomeNumber ID</th>
                                    <th>PermanaHomeNumber Name</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($notifikasi as $notif)
                                    <tr>
                                        <td>{{ $notif->id }}</td>
                                        <td>{{ $notif->pesan }}</td>
                                        <td>{{ $notif->user->id ?? '' }}</td>
                                        <td>{{ $notif->user->full_name ?? '' }}</td>
                                        <td>{{ $notif->permana_home_number->id ?? '' }}</td>
                                        <td>{{ $notif->permana_home_number->full_name ?? '' }}</td>
                                        <td>{{ $notif->created_at }}</td>
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
        $('#notifikasi').DataTable();
    </script>
@endsection
