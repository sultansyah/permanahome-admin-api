@extends('base')

@section('title', 'Permana Home Number User Linked')

@section('header_title', 'Permana Home Number User Linked')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-body table-responsive p-0">
                        <table id="userPermanaHomeNumber" class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Apakah Aktif?</th>
                                    <th>User ID</th>
                                    <th>PermanaHomeNumber ID</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($userPermanaHomeNumber as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ ($user->is_active) ? 'Aktif' : 'Tidak aktif' }}</td>
                                        <td>{{ $user->user->id }}</td>
                                        <td>{{ $user->permana_home_number->id }}</td>
                                        <td>{{ $user->created_at }}</td>
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
        $('#userPermanaHomeNumber').DataTable();
    </script>
@endsection
