@extends('layouts.admin')
@section('log')
<div class="bg-light min-vh-100 d-flex flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card-group d-block d-md-flex row">
                    <div class="card col-md-5 p-4 mb-0">
                        <div class="card-body">
                            <h1>Login</h1>
                            <p class="text-medium-emphasis">Sign In to your account</p>
                            @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif
                            @if(session('loginError'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('loginError') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif
                            <form action="/Login" method="post">
                                @csrf
                                <div class="input-group mb-3"><span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="icons/svg/free.svg#cil-user"></use>
                                        </svg></span>
                                    <input class="form-control @error('email')is-invalid @enderror" name="email"
                                        type="email" placeholder="Email adress" value="{{ old('email') }}">
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="input-group mb-4"><span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="icons/svg/free.svg#cil-lock-locked">
                                            </use>
                                        </svg></span>
                                    <div class="border border-1 d-flex">
                                        <input class="form-control @error('password')is-invalid @enderror border-0 me-2"
                                            name="password" type="password" id="password" placeholder="Password"
                                            width="200px">
                                        <i class="bi bi-eye-slash-fill text-center me-3 my-1" style="cursor:pointer;"
                                            id="show" onclick="showpassword()"></i>
                                    </div>
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <button class="btn btn-primary px-4" type="submit">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection