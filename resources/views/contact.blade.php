@extends('layouts.apps')
@section('content')
@include('includes.messages')
<section id="inner-banner">
<div class="overlay">
<div class="container">
<div class="row"> 
<div class="col-sm-6"><h1>CONTACT US</h1></div>
<div class="col-sm-6">
  <h6 class="breadcrumb"><a href="index.html">Home</a> / Contact us</h6></div>
</div>
</div>
</div>
</section>

<div class="google-maps">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63835.16296130462!2d33.14702717595798!3d0.44555292551716863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177e7b862c391f47%3A0x300fe90f956a9f4a!2sJinja%2C%20Uganda!5e0!3m2!1sen!2sin!4v1653720352336!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<section id="about-sec">
<div class="container">
<div class="row text-center" style=" margin-top:-20px;">
<div class="col-md-4" style=" margin-top:20px;">
<div class="con-box">
<div class="fancy-box-icon">
<i class="fa fa-mobile-phone"></i>
</div>
<h3>PHONE</h3>
<div class="fancy-box-content">
<p>Phone 01: +1-310-341-3870<br>
Phone 02: +1-310-341-387</p>
</div>
</div>
</div>
<div class="col-md-4" style=" margin-top:20px;">
<div class="con-box" style="background:#2f3191;">
<div class="fancy-box-icon">
<i class="fa fa-map-marker"></i>
</div>
<h3>ADDRESS</h3>
<div class="fancy-box-content">
<p>Near , Bujagali<br>
Jinja, Uganda</p>
</div>
</div>
</div>
<div class="col-md-4" style=" margin-top:20px;">
<div class="con-box">
<div class="fancy-box-icon">
<i class="fa fa-envelope-o"></i>
</div>
<h3>EMAIL</h3>
<div class="fancy-box-content">
<p>info@charityhope.com<br>
help@charityhope.com</p>
</div>
</div>
</div>

@if (count($errors->any))
      <ul>
        @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
        @endforeach
      </ul>
@endif  


<div class="clearfix"></div>
<h2>IF YOU GOT ANY QUESTIONS<br>
PLEASE DO NOT HESITATE TO SEND US A MESSAGE.</h2>
<form action="contact" method="POST">
@csrf
<div class="con-form clearfix">
<div class="col-md-4">
<input type="text" name="name"  size="40" value="{{old('name')}}" id="name" aria-required="true" aria-invalid="false" placeholder="Your Name*" required>
<span style="color:red">@error('name') {{$message}} @enderror</span>
</div>
<div class="col-md-4">
<input type="email" name="email" size="100" value="{{old('email')}}" aria-required="true" aria-invalid="false" placeholder="Your Email*" required>
<span style="color: red">@error('email') {{$message}} @enderror</span>
</div>
<div class="col-md-4">
<input type="text" name="subject"  size="100" class="" id="subject" aria-invalid="false" placeholder="Subject" required>
<span style="color:red"> @error('subject') {{$message}}@enderror </span>
</div>
<div class="col-md-12">
<textarea name="message" cols="100" rows="5" class="" id="message" aria-invalid="false" placeholder="Message" required></textarea>
<span style="color:red"> @error('message') {{$message}}@enderror </span>
</div>
<div class="col-xs-12 submit-button">
<input type="submit" value="send message" class="btn2" id="sub" style="border:none; margin: 20px 0 0 0">
</div>
</div>
</form>
</div>
</div>
</section>

@endsection