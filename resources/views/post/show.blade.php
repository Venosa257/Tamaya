@extends('layouts.app')
@section('container')

<div class="row mt-3 mx-3 ">
    
    <div class="col-sm-7">

        <div class="card col-sm-6 mb-3" style="min-width: 100%">
            <div class="card-body d-flex gap-4 ">
                <div class="d-flex gap-3">
                    <div class="d-flex justify-content-center  ">
                        <img class="profile-picture" src="{{ asset('img/blank-profile.png') }}" height="40px" alt="a">
                    </div>
                    <div class="d-flex flex-column" style="min-width: 90% ">
                        <h5 class="card-title fs-5">{{ $post->title }}</h5>
                        <p style="font-size: 12px; margin:0">Asked by <a href="">{{ $post->user->name }}</a> on {{ $post->created_at->format('d M') }}</p>   
                        <hr style="min-width:570px">
                        <p >{{ $post->body }}</p>
                        <form action="/like" method="post" style=" margin: 0;">
                            @csrf
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            <button type="submit" class="d-flex align-items-center gap-2 like">
                                @if($post->likes->where('user_id',auth()->user()->id)->where('post_id',$post->id)->isNotEmpty())
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M313.4 32.9c26 5.2 42.9 30.5 37.7 56.5l-2.3 11.4c-5.3 26.7-15.1 52.1-28.8 75.2H464c26.5 0 48 21.5 48 48c0 18.5-10.5 34.6-25.9 42.6C497 275.4 504 288.9 504 304c0 23.4-16.8 42.9-38.9 47.1c4.4 7.3 6.9 15.8 6.9 24.9c0 21.3-13.9 39.4-33.1 45.6c.7 3.3 1.1 6.8 1.1 10.4c0 26.5-21.5 48-48 48H294.5c-19 0-37.5-5.6-53.3-16.1l-38.5-25.7C176 420.4 160 390.4 160 358.3V320 272 247.1c0-29.2 13.3-56.7 36-75l7.4-5.9c26.5-21.2 44.6-51 51.2-84.2l2.3-11.4c5.2-26 30.5-42.9 56.5-37.7zM32 192H96c17.7 0 32 14.3 32 32V448c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V224c0-17.7 14.3-32 32-32z"/></svg>
                                @else
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M323.8 34.8c-38.2-10.9-78.1 11.2-89 49.4l-5.7 20c-3.7 13-10.4 25-19.5 35l-51.3 56.4c-8.9 9.8-8.2 25 1.6 33.9s25 8.2 33.9-1.6l51.3-56.4c14.1-15.5 24.4-34 30.1-54.1l5.7-20c3.6-12.7 16.9-20.1 29.7-16.5s20.1 16.9 16.5 29.7l-5.7 20c-5.7 19.9-14.7 38.7-26.6 55.5c-5.2 7.3-5.8 16.9-1.7 24.9s12.3 13 21.3 13L448 224c8.8 0 16 7.2 16 16c0 6.8-4.3 12.7-10.4 15c-7.4 2.8-13 9-14.9 16.7s.1 15.8 5.3 21.7c2.5 2.8 4 6.5 4 10.6c0 7.8-5.6 14.3-13 15.7c-8.2 1.6-15.1 7.3-18 15.1s-1.6 16.7 3.6 23.3c2.1 2.7 3.4 6.1 3.4 9.9c0 6.7-4.2 12.6-10.2 14.9c-11.5 4.5-17.7 16.9-14.4 28.8c.4 1.3 .6 2.8 .6 4.3c0 8.8-7.2 16-16 16H286.5c-12.6 0-25-3.7-35.5-10.7l-61.7-41.1c-11-7.4-25.9-4.4-33.3 6.7s-4.4 25.9 6.7 33.3l61.7 41.1c18.4 12.3 40 18.8 62.1 18.8H384c34.7 0 62.9-27.6 64-62c14.6-11.7 24-29.7 24-50c0-4.5-.5-8.8-1.3-13c15.4-11.7 25.3-30.2 25.3-51c0-6.5-1-12.8-2.8-18.7C504.8 273.7 512 257.7 512 240c0-35.3-28.6-64-64-64l-92.3 0c4.7-10.4 8.7-21.2 11.8-32.2l5.7-20c10.9-38.2-11.2-78.1-49.4-89zM32 192c-17.7 0-32 14.3-32 32V448c0 17.7 14.3 32 32 32H96c17.7 0 32-14.3 32-32V224c0-17.7-14.3-32-32-32H32z"/></svg>
                                @endif
                                <span>{{ count($post->likes) }}</span>
                            </button>
                        </form>   
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
                    <div class="d-flex gap-3 " style="min-width: 100%">
                        <div>
                            <img class="profile-picture" src="{{ asset('img/blank-profile.png') }}" height="40px" alt="a">
                        </div>
                        <div class="d-flex flex-column" style="min-width: 90%">
                            <div class="d-flex gap-4">

                                <div class="h6">{{ $answer->user->name }}</div>
                                {{-- <div style="font-size: 14px">a</div> --}}
                            </div>
                            <p style="font-size: 14px">{{ $answer->body }}</p>  
                            <div class="d-flex align-items-center gap-2 ">
                                {{-- <form action="" method="post" style=" margin: 0;">
                                    @csrf
                                    <button type="submit" class="d-flex align-items-center gap-2 like">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M323.8 34.8c-38.2-10.9-78.1 11.2-89 49.4l-5.7 20c-3.7 13-10.4 25-19.5 35l-51.3 56.4c-8.9 9.8-8.2 25 1.6 33.9s25 8.2 33.9-1.6l51.3-56.4c14.1-15.5 24.4-34 30.1-54.1l5.7-20c3.6-12.7 16.9-20.1 29.7-16.5s20.1 16.9 16.5 29.7l-5.7 20c-5.7 19.9-14.7 38.7-26.6 55.5c-5.2 7.3-5.8 16.9-1.7 24.9s12.3 13 21.3 13L448 224c8.8 0 16 7.2 16 16c0 6.8-4.3 12.7-10.4 15c-7.4 2.8-13 9-14.9 16.7s.1 15.8 5.3 21.7c2.5 2.8 4 6.5 4 10.6c0 7.8-5.6 14.3-13 15.7c-8.2 1.6-15.1 7.3-18 15.1s-1.6 16.7 3.6 23.3c2.1 2.7 3.4 6.1 3.4 9.9c0 6.7-4.2 12.6-10.2 14.9c-11.5 4.5-17.7 16.9-14.4 28.8c.4 1.3 .6 2.8 .6 4.3c0 8.8-7.2 16-16 16H286.5c-12.6 0-25-3.7-35.5-10.7l-61.7-41.1c-11-7.4-25.9-4.4-33.3 6.7s-4.4 25.9 6.7 33.3l61.7 41.1c18.4 12.3 40 18.8 62.1 18.8H384c34.7 0 62.9-27.6 64-62c14.6-11.7 24-29.7 24-50c0-4.5-.5-8.8-1.3-13c15.4-11.7 25.3-30.2 25.3-51c0-6.5-1-12.8-2.8-18.7C504.8 273.7 512 257.7 512 240c0-35.3-28.6-64-64-64l-92.3 0c4.7-10.4 8.7-21.2 11.8-32.2l5.7-20c10.9-38.2-11.2-78.1-49.4-89zM32 192c-17.7 0-32 14.3-32 32V448c0 17.7 14.3 32 32 32H96c17.7 0 32-14.3 32-32V224c0-17.7-14.3-32-32-32H32z"/></svg>
                                        <span>0</span>
                                    </button>
                                </form> --}}

                                <span class="ms-auto d-flex align-items-center gap-2 comment">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="0.9em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M123.6 391.3c12.9-9.4 29.6-11.8 44.6-6.4c26.5 9.6 56.2 15.1 87.8 15.1c124.7 0 208-80.5 208-160s-83.3-160-208-160S48 160.5 48 240c0 32 12.4 62.8 35.7 89.2c8.6 9.7 12.8 22.5 11.8 35.5c-1.4 18.1-5.7 34.7-11.3 49.4c17-7.9 31.1-16.7 39.4-22.7zM21.2 431.9c1.8-2.7 3.5-5.4 5.1-8.1c10-16.6 19.5-38.4 21.4-62.9C17.7 326.8 0 285.1 0 240C0 125.1 114.6 32 256 32s256 93.1 256 208s-114.6 208-256 208c-37.1 0-72.3-6.4-104.1-17.9c-11.9 8.7-31.3 20.6-54.3 30.6c-15.1 6.6-32.3 12.6-50.1 16.1c-.8 .2-1.6 .3-2.4 .5c-4.4 .8-8.7 1.5-13.2 1.9c-.2 0-.5 .1-.7 .1c-5.1 .5-10.2 .8-15.3 .8c-6.5 0-12.3-3.9-14.8-9.9c-2.5-6-1.1-12.8 3.4-17.4c4.1-4.2 7.8-8.7 11.3-13.5c1.7-2.3 3.3-4.6 4.8-6.9c.1-.2 .2-.3 .3-.5z"/></svg>
                                    <span style="font-size: 14px">Comment</span>
                                </span>
                            </div>
                        </div>                                                    
                    </div>
                </div>
                <div class="card-body d-flex gap-4 hide-comment " style="padding: 0 15px">
                    @foreach($answer->comments as $comment)
                    <hr style="width:100%; margin:0" >
                    <div class="d-flex gap-3 my-3" style="min-width: 100%">
                        <div>
                            <img class="profile-picture" src="{{ asset('img/blank-profile.png') }}" height="40px" alt="a">
                        </div>
                        <div class="d-flex flex-column" style="min-width: 90%">
                            <div class="d-flex gap-4">

                                <div class="h5">{{ auth()->user()->name }}</div>
                                {{-- <div style="font-size: 14px">a</div> --}}
                            </div>
                            <p style="margin:0">{{ $comment->comment}}</p>  
                            
                        </div>                                                    
                    </div>
                    @endforeach
                    <div class="d-flex gap-3 " style="min-width: 100%">
                        <div>
                            <img class="profile-picture"  src="{{ asset('img/blank-profile.png') }}" height="40px" alt="a">
                        </div>
                        <form action="/comment" method="post" class="d-flex gap-2 my-2 align-self-center" style="min-width: 90%">
       
                            @csrf
                            <input type="hidden" name="answer_id" value="{{ $answer->id }}">
                            <input class="form-control form-control-sm" type="text" style="width:80%" name="comment" placeholder="Add comment" aria-label="default input example">
                            <button type="submit" class="btn btn-success btn-sm">Add Comment</button>
            
                        </form>                                                    
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
                    <button type="submit" class="btn btn-primary mt-3">Add answer</button>
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

<script>
    const commentButton = document.querySelectorAll('.comment');
    const comment = document.querySelectorAll('.hide-comment')
    for (let i = 0; i < commentButton.length; i++) {
        commentButton[i].addEventListener('click', function() {
        console.log(i);
        comment[i].classList.toggle("show-comment");
        });
    }
    
    
</script>
@endsection