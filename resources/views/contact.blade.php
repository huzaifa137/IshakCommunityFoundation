@extends('layouts.app')
@section('content')
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
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12789754.135904364!2d-103.6801893!3d38.4992109!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1502302011686" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
<p>3104 Doctors Drive, Los Angeles,<br>
California, United States</p>
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