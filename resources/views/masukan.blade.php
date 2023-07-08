@extends('base')

@section('title', 'Masukan')

@section('header_title', 'Masukan')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-body table-responsive p-0">
                        <table id="masukan" class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Deskripsi</th>
                                    <th>User ID</th>
                                    <th>User Name</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($masukan as $masuk)
                                    <tr>
                                        <td>{{ $masuk->id }}</td>
                                        <td>{{ $masuk->deskripsi }}</td>
                                        <td>{{ $masuk->user->id }}</td>
                                        <td>{{ $masuk->user->full_name }}</td>
                                        <td>{{ $masuk->created_at }}</td>
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
        $('#masukan').DataTable();
    </script>
@endsection
