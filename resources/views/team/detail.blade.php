@extends('layouts.main')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Team Detail</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ isset($team) ? 'Detail' : 'Form' }} Team</h3>
        </div>
        <div class="card-body">
       
                @csrf
                @if(isset($team))
                    @method('PUT')
                @endif

                <div class="form-group">
                    <label for="team_name">Nama Tim</label>
                    <p>{{ $team->team_name }}</p>
                
                </div>

                <div class="form-group">
                    <label for="name_leader">Nama Leader</label>
                    <p>{{ $team->name_leader }}</p>
                </div>

                <div class="form-group">
                    <label for="profile_leader">Profile Leader</label>
                    <p>{{ $team->profile_leader }}</p>
                </div>

                <div class="form-group">
                    <label for="name_member">Nama Member</label>
                    <p>{{ $team->name_member }}</p>
                </div>

                <div class="form-group">
                    <label for="profile_member">Profile Member</label>
                    <p>{{ $team->profile_member }}</p>
                </div>


    
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
@endsection
