@extends('layouts.app')

@section('content')


@if(count($posts)>0)
<div class='container'>

<div class='row justify-content-center'>
 <h1 class='latestPostText'></h1>
<div class="card-deck">
    @foreach($posts as $post)

<div class='col-4 col-md-4 col-sm-12'>
  <div class="card ">
  <h2 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}} </a></h2>
    <img class="card-img-top img-thumbnail img-fluid" src="/storage/cover_images/{{$post->cover_image}}" alt="Card image cap">
    <div class="card-body">
      <!-- <h4 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}} </a></h4> -->
      <p class="card-text">{{$post->body}}</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Written on {{$post->created_at}}</small>
    </div>
  </div>
</div>


    @endforeach
        <p class='align-self-end'><a href='/posts'>See more posts...</a></p>
    </div>
    <br>
    </div>

    <br>
      

@else
@endif

@endsection