@extends('lte.layout')
@section('content')
    <div class="content-header">

        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 row">
                    <h1 class="mr-5 ">Users</h1>
                    <span class="col-sm-6 row">
                        <h4 class="">Create a new User</h4>
                        <button>
                            <a class="btn" href="{{ route('users.create') }} ">
                                click here</a>


                        </button>
                    </span>

                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Users v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="content">|
        <div class="container-fluid">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">LastName</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Identification</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $user && $user->id ? $user->id : 'not found' }} </th>
                            <td>{{ $user && $user->name ? $user->name : 'not found' }}</td>
                            <td>{{ $user && $user->lastName ? $user->lastName : 'not found' }}</td>
                            <td>{{ $user && $user->email ? $user->email : 'not found' }}</td>
                            <td>{{ $user && $user->phone ? $user->phone : 'not found' }}</td>
                            <td>{{ $user && $user->identification ? $user->identification : 'not found' }}</td>
                            <td><a class="btn btn-warning" href="{{ route('users.edit', $user) }} ">

                                    edit

                                </a> </td>
                            <td>
                                <form action="{{ route('users.destroy', $user) }} " method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        Delete
                                    </button>

                                </form>
                            </td>

                        </tr>

                        @endforeach
                    </tbody>
            </table>
        </div>
    </div>
@endsection
