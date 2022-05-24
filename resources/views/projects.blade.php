@extends('layouts.apps')
@section('content')

<section id="inner-banner">
<div class="overlay">
<div class="container">
<div class="row"> 
<div class="col-sm-6"><h1>PROJECTS</h1></div>
<div class="col-sm-6">
  <h6 class="breadcrumb"><a href="index.html">Home</a> / Projects</h6></div>
</div>
</div>
</div>
</section>

<section id="pro-sec">
<div class="container">
<div class="row text-center" style="margin-top:-30px;">

    @foreach ($data as $item)
    <div class="col-sm-6 col-md-4 clearfix top-off">
      <div class="grid-image"><img src="{{ url('public/Image/'.$item->image) }}"></div>
      <div class="post-content">
      <h3>{{$item->simple_desc}}</h3>
      <hr>
      <p>{{$item->detailed_desc}}</p>
      <a href="donate">Donate Now</a>
      </div>
      </div>        
    @endforeach



</div>
</div>
</section>
@endsection