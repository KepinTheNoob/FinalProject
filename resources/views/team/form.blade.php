@extends('layouts.main')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Team</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ isset($team) ? 'Edit' : 'Form' }} Team</h3>
        </div>
        <div class="card-body">
            <form action="{{ isset($team) ? route('team.update', $team->id) : route('team.store') }}" method="POST">
                @csrf
                @if(isset($team))
                    @method('PUT')
                @endif

                <div class="form-group">
                    <label for="team_name">Nama Tim</label>
                    <input type="text" name="team_name" id="team_name" class="form-control" placeholder="Enter full name" value="{{ old('team_name') ?? $team->team_name ?? '' }}">
                    @error('team_name')
                        @include('partials.error-message', ['field' => 'team_name'])
                    @enderror
                </div>

                <div class="form-group">
                    <label for="name_leader">Nama Leader</label>
                    <input type="text" name="name_leader" id="name_leader" class="form-control" placeholder="Enter Nama Leader" value="{{ old('name_leader') ?? $team->name_leader ?? '' }}">
                    @error('name_leader')
                        @include('partials.error-message', ['field' => 'name_leader'])
                    @enderror
                </div>

                <div class="form-group">
                    <label for="profile_leader">Profile Leader</label>
                    <input type="text" name="profile_leader" id="profile_leader" class="form-control" placeholder="Enter Profile Leader" value="{{ old('profile_leader') ?? $team->profile_leader ?? '' }}">
                    @error('profile_leader')
                        @include('partials.error-message', ['field' => 'profile_leader'])
                    @enderror
                </div>

                <div class="form-group">
                    <label for="name_member">Nama Member</label>
                    <input type="text" name="name_member" id="name_member" class="form-control" placeholder="Enter Nama Member " value="{{ old('name_member') ?? $team->name_member ?? '' }}">
                    @error('name_member')
                        @include('partials.error-message', ['field' => 'name_member'])
                    @enderror
                </div>

                <div class="form-group">
                    <label for="profile_member">Profile Member</label>
                    <input type="profile_member" name="profile_member" id="profile_member" class="form-control" placeholder="Enter Profile Member" value="{{ old('profile_member') ?? $team->profile_member ?? '' }}">
                    @error('profile_member')
                        @include('partials.error-message', ['field' => 'profile_member'])
                    @enderror
                </div>


                <button type="submit" class="btn btn-primary">{{ isset($team) ? 'Update' : 'Submit' }}</button>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
@endsection
