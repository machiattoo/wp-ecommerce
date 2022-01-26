@extends('layouts.main')

@section('content')
    <div class="row justify-content-center mt-4">
        <div class="col-lg-5">
            <div class="card">
                <div class="card-body">
                    <form action="" method="">
                        <div class="mb-3">
                            <label for="exampleInputFullName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="exampleInputFullName">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Well never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword2" class="form-label">Confirmation Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword2">
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                    <small class="d-block text-center">Have Account ? <a href="/login"
                            class="text-decoration-none">Login</a></small>
                </div>
            </div>
        </div>
    </div>
@endsection
