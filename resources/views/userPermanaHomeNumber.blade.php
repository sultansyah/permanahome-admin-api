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
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Profile Picture</th>
                                    <th>No Hp</th>
                                    <th>No Wa</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($userPermanaHomeNumber as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->full_name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->password }}</td>
                                        <td><img src="{{ url("storage/$user->profile_picture") }}" width="50"></td>
                                        <td>{{ $user->no_hp }}</td>
                                        <td>{{ $user->no_wa }}</td>
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
