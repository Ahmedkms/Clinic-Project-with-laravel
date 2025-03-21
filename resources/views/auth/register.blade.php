@extends('layout.app')

@section('title', 'register')

@section('content')
<div class="container">
    <div class="d-flex flex-column gap-3 account-form mx-auto mt-5">
        <form class="form" action="{{ route('addUser') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-items">
                <div class="mb-3">
                    <label class="form-label required-label" for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" >
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" >
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" >
                </div>
                <div class="mb-3">
                    <label class="form-label" for="phone">Phone</label>
                    <input type="tel" class="form-control" id="phone" name="phone">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="image">Profile Image</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Create Account</button>
        </form>
        <div class="d-flex justify-content-center gap-2">
            <span>Already have an account?</span><a class="link" href="{{ route('login') }}">Login</a>
        </div>
    </div>
</div>

@endsection