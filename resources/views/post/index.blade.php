@extends('layouts.app')
@section('container')
    
<div class="row mt-3 mx-3">
  <div class="col-sm-8">

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <div class="card">
            <div class="card-body d-flex justify-content-between">
                <h5 class="card-title">Ask a question</h5>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">Ask</button>
            </div>
        </div>
    

      <div class="mt-4 mb-3 mb-sm-0">
        
        <div class="card mb-3">
          <div class="card-header pt-3">
            <div class="h4">Question</div>
          </div>
          @foreach($posts as $post)
          <div class="card-body d-flex gap-4 " >

              <div class="d-flex flex-column align-items-center">
                <div class="h2">{{ count($post->answers) }}</div>
                <div class="h6">Asnwer</div>
              </div>

              <div class="d-flex flex-column" style="min-width: 90%">

                <h5 class="card-title fs-5 " style="margin: 0"><a class="title-custom" href="/posts/{{ $post->id }}">{{ $post->title }}</a></h5>
                <div class="d-grid gap-2 d-md-block">
                  <span class="badge text-bg-success mt-2 mb-2" style="font-size: 10px;">{{ $post->category->name }}</span>
                </div>
                <div class="d-flex gap-4 " style="font-size: 12px;">

                  <p style="font-size: 12px; margin:0" >
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>
                    Asked by <a href="">{{ $post->user->name }}</a> on {{ $post->created_at->format('d M') }}
                  </p>
                  <p style="font-size: 12px; margin:0">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M323.8 34.8c-38.2-10.9-78.1 11.2-89 49.4l-5.7 20c-3.7 13-10.4 25-19.5 35l-51.3 56.4c-8.9 9.8-8.2 25 1.6 33.9s25 8.2 33.9-1.6l51.3-56.4c14.1-15.5 24.4-34 30.1-54.1l5.7-20c3.6-12.7 16.9-20.1 29.7-16.5s20.1 16.9 16.5 29.7l-5.7 20c-5.7 19.9-14.7 38.7-26.6 55.5c-5.2 7.3-5.8 16.9-1.7 24.9s12.3 13 21.3 13L448 224c8.8 0 16 7.2 16 16c0 6.8-4.3 12.7-10.4 15c-7.4 2.8-13 9-14.9 16.7s.1 15.8 5.3 21.7c2.5 2.8 4 6.5 4 10.6c0 7.8-5.6 14.3-13 15.7c-8.2 1.6-15.1 7.3-18 15.1s-1.6 16.7 3.6 23.3c2.1 2.7 3.4 6.1 3.4 9.9c0 6.7-4.2 12.6-10.2 14.9c-11.5 4.5-17.7 16.9-14.4 28.8c.4 1.3 .6 2.8 .6 4.3c0 8.8-7.2 16-16 16H286.5c-12.6 0-25-3.7-35.5-10.7l-61.7-41.1c-11-7.4-25.9-4.4-33.3 6.7s-4.4 25.9 6.7 33.3l61.7 41.1c18.4 12.3 40 18.8 62.1 18.8H384c34.7 0 62.9-27.6 64-62c14.6-11.7 24-29.7 24-50c0-4.5-.5-8.8-1.3-13c15.4-11.7 25.3-30.2 25.3-51c0-6.5-1-12.8-2.8-18.7C504.8 273.7 512 257.7 512 240c0-35.3-28.6-64-64-64l-92.3 0c4.7-10.4 8.7-21.2 11.8-32.2l5.7-20c10.9-38.2-11.2-78.1-49.4-89zM32 192c-17.7 0-32 14.3-32 32V448c0 17.7 14.3 32 32 32H96c17.7 0 32-14.3 32-32V224c0-17.7-14.3-32-32-32H32z"/></svg>
                    0
                  </p>
                </div>


              </div>
              
              
            </div>
            <hr style="width:90%;" class="align-self-center">
            @endforeach
          </div>
          
        </div>

        {{ $posts->links() }}

   
  </div>

  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <div class="h5">Top users</div>
          <hr style="width:100%">
          <div class="d-flex">
            <img src="{{ asset('img/blank-profile.png') }}" width="60px" alt="">
          </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body">

      </div>
    </div>
  </div>
  
</div>

@include('post.create')
@endsection