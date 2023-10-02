@extends('layouts.login')
@section('container')
    
<div>
    <div class="card">
        <div class="card-body" style="width: 70vh">
            <h1 class="fw-bold text-center">Register</h1>
            <p class="card-text text-center">Create an account </p>
            <form action="/register" method="post">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="username">
                    @error('username')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="password">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="confirm password">
                    @error('password_confirmation')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary my-4 ">Register</button>
                </div>
                <p class="text-center">Already have an account?
                    <a href="">Log in</a>
                </p>
            </form>
            
        </div>
    </div>
</div>

@endsection