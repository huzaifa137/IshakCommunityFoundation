@extends('layouts.apps')
@section('content')
<section id="inner-banner">
<div class="overlay">
<div class="container">
<div class="row"> 
<div class="col-sm-6"><h1>ACTIVITIES</h1></div>
<div class="col-sm-6">
  <h6 class="breadcrumb"><a href="index.html">Home</a> / Activities</h6></div>
</div>
</div>
</div>
</section>

<section id="about-sec">
<div class="container">
<div class="row text-left">

    @foreach ($data as $item)
        
<div class="act-box clearfix">
<div class="col-md-6">
<div class="image"><img src="{{url('public/activity_pics/'.$item->image)}}"></div>
</div>
<div class="col-md-6">
<div class="act-pad">
<h4>{{$item->title}}</h4>
<p>{{$item->details}}</p>
<div class="price"><span class="goal" style="color: red">Goal: ${{$item->goal}}</span></div>
<a href="donate" class="btn1">donate now</a>
<div class="clearfix"></div>
</div>
</div>
</div>
@endforeach
</div>
</div>
</section>

@endsection