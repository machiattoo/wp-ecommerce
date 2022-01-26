@extends('layouts.main')

@section('content')
    <div class="row justify-content-center mt-4">
        <div class="col-lg-5">
            <div class="card">
                <div class="card-body">
                    <form action="" method="">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Well never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                    <small class="d-block text-center">Not have account ? <a href="/register"
                            class="text-decoration-none">Register</a></small>
                </div>
            </div>
        </div>
    </div>
@endsection
