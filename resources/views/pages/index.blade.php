@extends('layouts.app')

@section('content')
<!-- 
<div class='container-fluid'>

<h1>{{ $title ?? '' }}</h1>

<div class='row'>



</div> -->
<section class="bgimage">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h5>Hello, world! Full width Hero-unit header</h5>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a href="#" class="btn btn-primary btn-large">Learn more »</a></p>
      </div>
    </div>
  </div>
</section>

<!-- <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Fluid jumbotron</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div> -->

</div>

@if(count($posts)>0)

<div class='container'>

<div class='row'>
<div class="card-deck">
    @foreach($posts as $post)
  
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
<div class='col-4'>
  <div class="card ">
    <img class="card-img-top img-thumbnail img-fluid" src="/storage/cover_images/{{$post->cover_image}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}} </a></h5>
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

      

@else


@endif

</div>
@endsection