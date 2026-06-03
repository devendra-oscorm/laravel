<?php $page="register";?>
@extends('layout.mainlayout')

@section('content')

<div class="main-wrapper authentication-wrapper">
    <div class="container-fuild">

        <div class="w-100 overflow-hidden position-relative flex-wrap d-block vh-100">
            <div class="row justify-content-center align-items-center vh-100 overflow-auto flex-wrap">
                <div class="col-xxl-4 col-lg-6 col-md-6 col-11 mx-auto">

                    <div class="p-4 text-center">
                        <img src="{{ URL::asset('build/img/logo-dark.svg') }}" alt="logo" class="img-fluid">
                    </div>

                    <div class="card authentication-card">

                        <div class="card-header">
                            <div class="text-center">
                                <h5 class="mb-1">Sign Up</h5>
                                <p>Create your DreamsTour Account</p>
                            </div>
                        </div>

                        <div class="card-body">

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('register.store') }}" method="POST">
                                @csrf

                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <div class="input-icon">
                                        <span class="input-icon-addon">
                                            <i class="isax isax-user"></i>
                                        </span>
                                        <input
                                            type="text"
                                            name="name"
                                            class="form-control form-control-lg"
                                            placeholder="Enter Full Name"
                                            value="{{ old('name') }}"
                                            required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <div class="input-icon">
                                        <span class="input-icon-addon">
                                            <i class="isax isax-message"></i>
                                        </span>
                                        <input
                                            type="email"
                                            name="email"
                                            class="form-control form-control-lg"
                                            placeholder="Enter Email"
                                            value="{{ old('email') }}"
                                            required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <div class="input-icon">
                                        <span class="input-icon-addon">
                                            <i class="isax isax-lock"></i>
                                        </span>
                                        <input
                                            type="password"
                                            name="password"
                                            class="form-control form-control-lg pass-input"
                                            placeholder="Enter Password"
                                            required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <div class="input-icon">
                                        <span class="input-icon-addon">
                                            <i class="isax isax-lock"></i>
                                        </span>
                                        <input
                                            type="password"
                                            name="password_confirmation"
                                            class="form-control form-control-lg pass-input"
                                            placeholder="Confirm Password"
                                            required>
                                    </div>
                                </div>

                                <div class="mt-3 mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" required>
                                        <label class="form-check-label">
                                            I agree with the
                                            <a href="{{ url('terms-conditions') }}" class="link-primary">
                                                Terms Of Service
                                            </a>
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <button type="submit"
                                        class="btn btn-xl btn-primary d-flex align-items-center justify-content-center w-100">
                                        Register
                                        <i class="isax isax-arrow-right-3 ms-2"></i>
                                    </button>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <p class="fs-14">
                                        Already have an account?
                                        <a href="{{ route('login') }}" class="link-primary fw-medium">
                                            Sign In
                                        </a>
                                    </p>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="coprright-footer">
        <p class="fs-14">
            Copyright &copy; 2026.
            All Rights Reserved,
            <a href="#" class="text-primary fw-medium">DreamsTour</a>
        </p>
    </div>
</div>

@endsection