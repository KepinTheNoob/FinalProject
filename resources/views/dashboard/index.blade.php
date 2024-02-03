@extends('layouts.main')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Dashboard</h1>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Welcome Message</h3>
        </div>
        <div class="card-body">
            <p>Welcome, Let's get started!</p>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
@endsection
<!-- jQuery -->
<script src="<?= asset('./admin-lte/plugins/jquery/jquery.min.js') ?>"></script>
