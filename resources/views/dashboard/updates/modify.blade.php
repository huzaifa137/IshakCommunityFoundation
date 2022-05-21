@extends('layouts.Adminlayout')
@section('content')
        
    
<div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">SPONSER A CHILD</h4>
        <form action="sponsormodify" method="POST" enctype="multipart/form-data">
          @csrf 
        <form class="form-sample">
            <input type="hidden" name="id" value="{{$data->id}}">
          <p class="card-description"> Child info </p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">First Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="firstname" value="{{$data->firstname}}" required/>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Last Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control"  name="lastname" value="{{$data->lastname}}" required/>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Age</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control" value="{{$data->age}}" name="age" required/>
                </div>
            </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Country</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="country" value="{{$data->location}}" required/>
                  </div>
                </div>
              </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Child pic</label>
                <div class="col-sm-9">
                  <input type="file" class="form-control" name="image" value="{{$data->image}}" required/>
                </div>
              </div>
            </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Date of Birth</label>
                <div class="col-sm-9">
                  <input type="date" class="form-control" name="date" placeholder="dd/mm/yyyy" value="{{$data->birthday}}" required/>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Support Catagory</label>
                <div class="col-sm-9">
                  <select class="form-control" name="supportcatagory" value="{{$data->supportcatogory}}" required>
                    <option value="Educaation support">Education support</option>
                    <option value="shelter support">Shelter support</option>
                    <option value="Food support">Food support</option>
                    <option value="Heatlh support">Health support</option>
                  </select>
                </div>
              </div>
            </div>
          <button type="submit" class="btn btn-primary me-2">update</button>
        </form>
      </div>
    </div>
  </div>
  

@endsection