@extends('layout.app')

{{-- customize layout section --}}

@section('subtitle', 'User')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'User')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>CRUD user</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('m_user.create') }}"> Input User</a>
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
            <th width="20px" class="text-center">Id</th>
            <th width="150px" class="text-center">Level</th>
            <th width="200px" class="text-center">Username</th>
            <th width="200px" class="text-center">nama</th>
            <th width="150px" class="text-center">password</th>
            <th width="100px" class="text-center">Action</th>
        </tr>
        @foreach ($useri as $m_user)
            <tr>
                <td>{{ $m_user->user_id }}</td>
                <td>{{ $m_user->level->level_nama }}</td>
                <td>{{ $m_user->username }}</td>
                <td>{{ $m_user->nama }}</td>
                <td>{{ $m_user->password }}</td>

                <td class="text-center">
                    <form action="{{ route('m_user.destroy',$m_user->user_id) }}" method="POST">
                        <div class="row">
                            <div class="col d-flex">
                                <a class="btn btn-info btn-sm" href="{{ route('m_user.show',$m_user->user_id) }}">Show</a>
                                <a class="btn btn-primary btn-sm" href="{{ route('m_user.edit',$m_user->user_id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
                            </div>
                        </div>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

@push('scripts')
@endpush


{{-- @extends('m_user/template')
@section('content')
    
    @endsection --}}