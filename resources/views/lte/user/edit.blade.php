@extends('lte.layout')
@section('content')
    <div class="content-header">

        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 row">
                    <h1 class="mr-5 ">Users</h1>
                    {{-- <span class="col-sm-6 row">
                        <h4 class="">Create a new User</h4>
                        <button>
                            <a class="btn" href="{{ route('users.create') }} ">
                                click here</a>


                        </button>
                    </span> --}}

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
            <h2> {{ $user->name }} Edit your User </h2>
            <form action="{{ route('users.update', $user) }}" method="POST">
                @method('PUT')
                @csrf
                <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }} "
                    placeholder="name" />
                <div class="validate">
                    @error('name')
                        {{ $message }}
                    @enderror
                </div>
                <input type="text" class="form-control" name="lastName" value="{{ old('lastName', $user->lastName) }} "
                    placeholder="lastName" />
                <div class="validate">
                    @error('lastName')
                        {{ $message }}
                    @enderror
                </div>
                <input type="email" class="form-control" name="email" value="{{ old('email', $user->email) }} "
                    placeholder="email" />
                <div class="validate">
                    @error('email')
                        {{ $message }}
                    @enderror
                </div>
                <input type="text" class="form-control" name="phone" value="{{ old('phone', $user->phone) }} "
                    placeholder="phone" />
                <div class="validate">
                    @error('phone')
                        {{ $message }}
                    @enderror
                </div>
                <input type="text" class="form-control" name="identification"
                    value="{{ $user->identification }} " placeholder="identification" min="20" />
                <div class="validate">
                    @error('identification')
                        {{ $message }}
                    @enderror
                </div>
                


                <button type="submit" class="btn btn-success"> enviar</button>
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
@endsection
