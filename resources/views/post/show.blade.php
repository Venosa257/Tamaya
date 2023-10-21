@extends('layouts.app')
@section('container')
    
<div class="row mt-3 mx-3">
    
    
      
    
      <div class="card col-sm-8">
        <div class="card-body d-flex gap-4 ">
          <div class="d-flex flex-column" style="min-width: 90%">
            <h5 class="card-title fs-5"><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h5>
            <p>{{ $post->excerpt }}</p>      
        </div>
      </div>


    
</div>

    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">a
                {{-- <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a> --}}
            </div>
        </div>
    </div>

</div>
@endsection