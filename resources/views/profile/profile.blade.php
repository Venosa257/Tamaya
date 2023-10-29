@extends('layouts.app')
@section('container')

<div class="position-relative">
    <div class="">
        <div class="card_1 mx-auto p-2 m-4">
            <div class="text_1 text-start">
                <p class="fs-2 fw-semibold m-0">User</p>
                <p class="fs-5 light m-0">Tambahkan kredensial profil</p>
                <p class="fw-5 light ">0 Follower • 0 Following</p>
            </div>
            <div class="photo mt-1">
                <img src="img/blank-profile.png" class="rounded-circle" style="width: 18%" alt="">

            </div>
            <div class="text-fixed mt-3 ps-3">
                <p class="fw-5 light">Tulis deskripsi tentang anda</p>
            </div>
            <div class="card-header mt-2">
                <ul class="nav nav-tabs card_1-header-tabs d-flex justify-content-center">
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
             <div class="zz">
                <p class="fs-5 fw-semibold mt-2 ">0 Pertanyaan</p>
             </div>
              <hr>
              <div class="card-body">
                <h5 class="card_1-title"></h5>
                <p class="card_1-text"></p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
        </div>
    </div>
    <div class="">
        <div class="card_2 mx-auto">
            <p class="fs-6 fw-medium ps-3 ">Kredensial & Sorotan</p>
            <hr>
                <p class="text_2 text-start">
                <div class="d-flex align-items-center">
                    <p>
                        <span class=""></span>
                            <i class="bi bi-briefcase" ></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
                            <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                        <a class="link-offset-1 fs-6 ms-5 m-0" href="#" >Tambahkan kredensial pekerjaan</a>
                    </p>
                </div>
                    <p>
                        <i class="bi bi-book"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                            <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                          </svg>
                        <a class="link-offset-1 fs-6 ms-5 m-0" href="#" >Tambahkan kredensial pendidikan </a>
                    </p>
                    <p>
                        <i class="bi bi-geo-alt"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                          </svg>
                        <a class="link-offset-1 fs-6 ms-5 m-0" href="#" >Tambahkan kredensial lokasi</a>
                    </p>
                    <p class="fs-6 ms-5 m-1">Bergabung pada 13 Mei 2023</p>
                </p>

            <hr>
        </div>
    </div>
</div>


@endsection
