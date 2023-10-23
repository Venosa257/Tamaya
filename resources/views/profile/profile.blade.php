@extends('layouts.app')
@section('container')

<div class="position-relative">
    <div class="">
        <div class="card mx-auto p-2 m-4 gradient-custom">
            <div class="text text-start">
                <p class="fs-2 fw-semibold m-0">Ragil Prasetya Putra Bima</p>
                <p class="fs-5 light m-0">Tambahkan kredensial profil</p>
                <p class="fw-5 light ">0 Follower • 0 Following</p>
            </div>
            <div class="photo mt-1">
                <img src="img/ishimi.jpeg" class="rounded-circle" style="width: 18%" alt="">

            </div>
            <div class="text-fixed mt-3 ps-3">
                <p class="fw-5 light">Tulis deskripsi tentang anda</p>
            </div>
            <div class="card-header mt-2">
                <ul class="nav nav-tabs card-header-tabs d-flex justify-content-center">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="#">Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="#">Jawaban</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="#">Pertanyaan</a>
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
