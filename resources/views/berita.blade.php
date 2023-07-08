@extends('base')

@section('title', 'Berita')

@section('header_title', 'Berita')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-body table-responsive p-0">
                        <table id="berita" class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Judul</th>
                                    <th>Konten</th>
                                    <th>Gambar</th>
                                    <th>Nama Admin</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($berita as $beri)
                                <tr>
                                    <td>{{ $beri->id }}</td>
                                    <td>{{ Str::limit($beri->judul, 40, '...') }}</td>
                                    <td>{{ Str::limit($beri->konten, 40, '...') }}</td>
                                    <td>{{ $beri->gambar }}</td>
                                    <td>{{ $beri->admin->name }}</td>
                                    <td>{{ $beri->created_at }}</td>
                                    <td>{{ $beri->updated_at }}</td>
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
        $('#berita').DataTable();
    </script>
@endsection