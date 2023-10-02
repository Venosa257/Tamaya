@extends('layouts.login')
@section('container')
    
<div>
    <div class="card">
        <div class="card-body" style="width: 70vh">
            <h1 class="fw-bold text-center">Login</h1>
            <p class="card-text text-center">Login with your account </p>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="password">
                </div>
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-primary my-4 ">Login</button>
                </div>
                
                <p class="text-center">Don't have an account? 
                    <a href="">Sign in</a>
                </p>
            </form>
            
        </div>
    </div>
</div>

@endsection