@extends('lte.layout')
@section('styles')
    <link rel="stylesheet" href="{{ asset('lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('lte/dist/css/template/users.css') }} ">

@endsection
@section('scripts')
    <script src="{{ asset('lte/dist/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('lte/dist/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('lte/dist/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('lte/dist/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('lte/dist/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('lte/dist/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('lte/dist/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{ asset('lte/dist/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{ asset('lte/dist/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{ asset('lte/dist/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('lte/dist/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{ asset('lte/dist/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    <script src="{{ asset('lte/dist/js/template/users.js') }} "></script>
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Users</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header ">
                            <div class="d-flex justify-content-between">
                               
                                

                                <h3 class="card-title">Users</h3>
                                <a href="{{route('users.create')}} " class="btn btn-success">Create User</a >
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="table-users" class="table table-striped table-bordered nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>LastName</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Identification</th>
                                        <th>Actions</th>
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
                                            <td>{{ $user && $user->identification ? $user->identification : 'not found' }}
                                            </td>
                                            <td class="d-flex"><a class="btn btn-warning mr-2"
                                                    href="{{ route('users.edit', $user) }} ">

                                                    <i class="far fa-edit text-white"></i>

                                                </a>

                                                <form action="{{ route('users.destroy', $user) }} " method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </button>

                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->


                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    {{-- <div class="content">|
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
    </div> --}}
@endsection
