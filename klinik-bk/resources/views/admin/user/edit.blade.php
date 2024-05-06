@extends('layouts.master')

@section('title', 'Edit Users')


@section('content')




    <div class="container px-4">
        <div class="card mt-4">

            <div class="card-header text-center bg-gray">
                <h4 class="waduh text-white">Edit Users</h4>
                <a href="{{ url('admin/users') }}" class="btn float-end custom-btn">
                    <i class="fas fa-arrow-left"></i> Return
                </a>
            </div>
            
                <div class="card-body">
                    
                    <div class="mb-3">
                        <label for="">Full Name</label>
                        <p class="form-control bg-disabled">{{ $user->name }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="">Email</label>
                        <p class="form-control bg-disabled">{{ $user->email }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="">Created At</label>
                        <p class="form-control bg-disabled">{{ $user->created_at->format('d/m/Y') }}</p>
                    </div>
                    <hr>
                    <form action="{{ url('admin/update-user/'.$user->id) }}" method="post">
                        @csrf
                        @method('put')


                        <div class="mb-3">
                            <label for="">Role As</label>
                            <select name="role_as" class="form-control">
                                <option value="1" {{ $user->role_as == '1' ? 'selected' : '' }}>Admin</option>
                                <option value="0" {{ $user->role_as == '0' ? 'selected' : '' }}>Pasien (Default)</option>
                                <option value="2" {{ $user->role_as == '2' ? 'selected' : '' }}>Dokter</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <button class="btn btn-primary">Update User Role</button>
                        </div>
                    </form>
                </div>

           
        </div>


    </div>


@endsection
