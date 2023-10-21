@extends('layouts.app')
@section('container')
    
<div class="row mt-3 mx-3">
  <div class="col-sm-8">

        <div class="card">
            <div class="card-body d-flex justify-content-between">
                <h5 class="card-title">Ask a question</h5>
                <a href="" class="btn btn-primary">Ask</a>
            </div>
        </div>
    

      <div class="mt-4 mb-3 mb-sm-0">
        @foreach($posts as $post)
          <div class="card">
            <div class="card-body d-flex gap-4 ">

              <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="h2">0</div>
                <div class="h6">Asnwer</div>
              </div>

              <div class="d-flex flex-column" style="min-width: 90%">

                <h5 class="card-title fs-5"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h5>
                <p>{{ $post->excerpt }}</p>
                <div class="d-grid gap-2 d-md-block mt-3">
                  <span class="badge text-bg-secondary">Secondary</span>
                </div>

                <div class="d-flex  justify-content-center ms-auto">
                  <p>0</p>
                  <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"/></svg>
                  
                  <img src="" alt="a">
                  <p>aaaaa</p>
                </div>

              </div>

              
            </div>
          </div>

          @endforeach
      </div>

   
  </div>

  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        {{-- <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a> --}}
      </div>
    </div>
  </div>
  
</div>
@endsection