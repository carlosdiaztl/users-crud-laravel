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
    

    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"> Create new User</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('users.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="" class="form-label">Name</label>
                                                <input type="text" class="form-control" name="name" placeholder="name" />
                                                <div class="validate">
                                                    @error('name')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="" class="form-label">LastName</label>
                                                <input type="text" class="form-control" name="lastName" placeholder="lastName" />
                                                <div class="validate">
                                                    @error('lastName')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="" class="form-label">Email</label>
                                                <input type="email" class="form-control" name="email" placeholder="email" />
                                                <div class="validate">
                                                    @error('email')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="" class="form-label">Phone</label>
                                                <input type="text" class="form-control" name="phone" placeholder="phone" />
                                                <div class="validate">
                                                    @error('phone')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                
                
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="" class="form-label">Password</label>
                                                <input type="text" class="form-control" name="password" placeholder="password" />
                                                <div class="validate">
                                                    @error('password')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="" class="form-label">Identification</label>
                                                <input type="text" class="form-control" name="identification" placeholder="identification"
                                                min="20" />
                                            <div class="validate">
                                                @error('identification')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                
                                </div>
                
                
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">

                                <button type="submit" class="btn btn-success"> enviar</button>
                            </div>
                
                                @if (Session::get('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ Session::get('success') }}
                
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                
                                    </div>
                                @endif
                                @if (Session::get('fail'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ Session::get('fail') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                
                                    </div>
                                @endif
                
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
@endsection
