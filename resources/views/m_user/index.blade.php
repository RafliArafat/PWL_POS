{{-- @extends('m_user/template')
@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>CRUD user</h2>
        </div>
        <div class="float-right">
            <a href="{{ route('m_user.create') }}" class="btn btn-success"> Input User</a>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<table class="table table-bordered">
    <tr>
        <th width="20px" class="text-center">User id</th>
        <th width="150px" class="text-center">Level id</th>
        <th width="200px" class="text-center">username</th>
        <th width="200px" class="text-center">nama</th>
        <th width="150px" class="text-center">password</th>
    </tr>
    @foreach ($useri as $m_user)
        <tr>
            <td>{{ $m_user->user_id }}</td>
            <td>{{ $m_user->level_id }}</td>
            <td>{{ $m_user->username }}</td>
            <td>{{ $m_user->nama }}</td>
            <td>{{ $m_user->password }}</td>

            <td class="text-center">
                <form action="{{ route('m_user.destroy', $m_user->user_id) }}" method="POST">
                    <a href="{{ route('m_user.show', $m_user->user_id) }}" class="btn btn-info btn-sm">Show</a>
                    <a href="{{ route('m_user.edit', $m_user->user_id) }}" class="btn btn-primary btn-sm">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection --}}
@extends('m_user/template')

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="mb-0">CRUD User</h2>
            <a href="{{ route('m_user.create') }}" class="btn btn-success">Input User</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th class="text-center">User ID</th>
                <th class="text-center">Level ID</th>
                <th class="text-center">Username</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Password</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($useri as $m_user)
            <tr>
                <td class="text-center">{{ $m_user->user_id }}</td>
                <td class="text-center">{{ $m_user->level_id }}</td>
                <td>{{ $m_user->username }}</td>
                <td>{{ $m_user->nama }}</td>
                <td>{{ $m_user->password }}</td>
                <td class="text-center">
                    <form action="{{ route('m_user.destroy', $m_user->user_id) }}" method="POST">
                        <a href="{{ route('m_user.show', $m_user->user_id) }}" class="btn btn-info btn-sm">Show</a>
                        <a href="{{ route('m_user.edit', $m_user->user_id) }}" class="btn btn-primary btn-sm">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
