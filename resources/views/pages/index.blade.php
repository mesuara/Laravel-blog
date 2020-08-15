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
<!-- <div class='row'>
    <br> -->
<!-- <div class="d-flex flex-row justify-content-center" style='height:100%;'>
<div class='col-12'>
<h2>Confeeshirt</h2>
</div>
<div class='col-12'>
       <a href="/about" class="btn heroBtn align-self-center">Learn more »</a>
</div>
      </div>
</div> -->


<div class='row'>

</div>

</div>


<br>
@php 
$i =0;
@endphp
@if(count($posts)>0)



<div class='container'>

<div class='row'>
<div class="card-deck">
    @foreach($posts as $post)
    @php 
        $i ++;
    @endphp
    @if($i > 3)
        @break
    @endif
  
                <!-- <div class='row'>
                        <div class='col-md-4'>
                                <img src='/storage/cover_images/{{$post->cover_image}}' style="width:100%">
                        </div>
                        <div class='col-md-8'>
                        <li class='list-group-item'>
                                 <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                                 <small>Written on {{$post->created_at}}</small>

                         </li>
                        </div>
                </div> -->
                <!-- <div class="col-sm-6">
                <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="/storage/cover_images/{{$post->cover_image}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}} </a></h5>
    <p class="card-text">{{$post->body}}</p> -->
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
  <!-- </div>
</div>
 </div> -->
<div class='col-4 col-md-6 col-sm-12'>
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
    </div>
    </div>

    <br>
      

@else


@endif





</div>
@endsection