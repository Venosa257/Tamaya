@extends('layouts.app')
@section('container')

<div class="row mt-3 mx-3 ">
    
    <div class="col-sm-7">

        <div class="card col-sm-6 mb-3" style="min-width: 100%">
            <div class="card-body d-flex gap-4 ">
                <div class="d-flex gap-3">
                    <div class="d-flex justify-content-center  ">
                        <img src="" alt="a" srcset="">
                    </div>
                    <div class="d-flex flex-column" style="min-width: 90%">
                        <h5 class="card-title fs-5">{{ $post->title }}</h5>
                        <p>Asked by Udin on Dec 18</p>   
                        <div class="d-grid gap-2 d-md-block mt-1">
                            <span class="badge text-bg-secondary">Secondary</span>
                        </div>
                        <hr style="min-width:500px">
                        <p>{{ $post->body }}</p>   
                    </div>
                </div>
            </div>
        </div>

        @if(empty($post->answers[0]))
        <div class="card col-sm-6 mb-2" style="min-width: 100%">
            <div class="card-body d-flex gap-4 ">
                <div class="d-flex gap-3">
                      <div>This question does not have any answers yet. </div>  
                    </div>
                </div>
            </div>
        @else

            @foreach($post->answers as $answer)
            <div class="card col-sm-6 mb-2" style="min-width: 100%">
                <div class="card-body d-flex gap-4 ">
                    <div class="d-flex gap-3">
                            <div class="d-flex flex-column" style="min-width: 90%">
                                <p>{{ $answer->body }}</p>   
                                <p>Answer by Udin on Dec 18</p>   
                            </div>
                            
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
        
        <div class="card col-sm-6 mb-5" style="min-width: 100%">
            <div class="card-body d-flex gap-4 flex-column">
                <form action="/answer" method="post">
                    @csrf
                    <div class="h4">Your Answer</div>
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <div class="mt-4">
                        <input id="body" type="hidden" name="body" required>
                        <trix-editor input="body"></trix-editor>
                        @error('body')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Add question</button>
                </form>
            </div>
        </div>
    </div>
    

  
      
    

        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">a
                </div>
            </div>
        </div>

</div>
@endsection