@extends('layouts.app')

@section('content')
<!-- 
<div class='container-fluid'>

<h1>{{ $title ?? '' }}</h1>

<div class='row'>



</div> -->
<section class="bgimage">

</section>

<div class='mainInfo'>
    <br>
    <div>
        <h1>About <br>Confeeshirt</h1>
    </div>
    <div>
        <p>This is a blog about shirts/socks/swag collected from tech conferences. The purpose of this blog is to showcase the great companies and say thank you to them this way.</p>
    </div>
    <br>
</div>



</div>




@if(count($posts)>0)



<div class='container'>

<div class='row justify-content-center'>
 <h1 class='latestPostText'>Latest blog posts</h1>
<div class="card-deck">
{{-- spaghetti code  I know there is a better way to do this but for now going the hard way to show only the last thre --}}
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





</div>
@endsection