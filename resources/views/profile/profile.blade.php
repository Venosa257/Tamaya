@extends('layouts.app')
@section('container')

<div class="position-relative">
    <div class="">
        <div class="card mx-auto p-2 m-3">
            <div class="text-center">
                <p class="fs-2 fw-semibold">zzzzzzzzzzzzzzzzzzzz</p>
                <p></p>
            </div>
            <div class="photo">
                <img src="img/ishimi.jpeg" class="rounded-circle" style="width: 30%" alt="">
            </div>
        </div>
        <div class="card mx-auto">
            <div class="card-header">
              <ul class="nav nav-tabs card-header-tabs d-flex justify-content-center">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="true" href="#">Active</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
    </div>
</div>
@endsection
