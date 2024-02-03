@extends('layouts.main')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Team Participation</h1>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    @if (auth()->user()->is_admin)
        <a href="{{ route('team.create') }}" class="btn btn-success mb-3">Tambah</a>
    @endif

    <!-- Default box -->
    <div class="card">
        <div class="card-header bg-primary">
            <h3 class="card-title">Data team</h3>
        </div>
        <div class="card-body">
            <hr/>
            <table class="table table-striped table-bordered table-hover" id="list-data">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Team</th>
                        @if (auth()->user()->is_admin)
                        <th>Action</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($team as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->team_name }}</td>
                            
                            @if (auth()->user()->is_admin)
                            <td>
                                <a href="{{ route('team.detail', $row->id) }}" class="btn btn-warning btn-xs">Detail</a>
                                <a href="{{ route('team.edit', $row->id) }}" class="btn btn-primary btn-xs">Edit</a>
                                <a href="{{ route('team.destroy', $row->id) }}" class="btn btn-danger btn-xs" data-confirm-delete="true">Delete</a>
                            </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
@endsection
