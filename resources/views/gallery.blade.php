@extends('layouts.apps')
@section('content')
<section id="inner-banner">
<div class="overlay">
<div class="container">
<div class="row"> 
<div class="col-sm-6"><h1>GALLERY</h1></div>
<div class="col-sm-6">
  <h6 class="breadcrumb"><a href="index.html">Home</a> / Gallery</h6></div>
</div>
</div>
</div>
</section>

<section id="gallery-sec" style="margin-top:40px;">
  <div class="container">
  <div class="row text-center">
  <ul class="clearfix">
    @foreach ($data as $item)
    <li>
     <a href="{{url('public/galley_pics/'.$item->image)}}" class="swipebox" title="{{$item->caption}}">
     <div class="image"><img src="{{url('public/galley_pics/'.$item->image)}}">
     <div class="overlay"><i class="fa fa-search-plus"></i></div>
     </div></a>
     </li>
  @endforeach
     </ul>
     </div>
     </div>
     </section>
@endsection