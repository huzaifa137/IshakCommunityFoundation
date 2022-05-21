@extends('layouts.Adminlayout')
@section('content')
        <!-- partial -->
        <div class="colormaster">
        <div class="main-panel ">
          <div class="content-wrapper text-light">
            <div class="page-header">
              <h3 class="page-title"> Form elements </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body"> 
                    <h4 class="card-title">Create a project</h4>
                    <p class="card-description"> Enter project Details </p>
                    <form action="finalise" method="POST" enctype="multipart/form-data">
                      @csrf
                      <form class="forms-sample">
                        <input type="hidden" name="id" value="{{$data->id}}">
                      <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" class="form-control"  name="title" placeholder="Name" value={{$data->title}}  required>
                      </div>
                      <div class="form-group">
                        <div class="mb-3">
                          <label for="formFile" class="form-label">Upload Project Image</label>
                          <input class="form-control" type="file"  name="imgfile" value={{$data->image}}>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Simple description</label>
                        <input type="text" class="form-control" name="simple_desc" maxlength="100" placeholder="simple_desc" required value={{$data->simple_desc}}>
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleTextarea1">Detailed description</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4" name="detailed_desc" value={{$data->detailed_desc}} required></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary me-2">update</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          <!-- content-wrapper ends -->
       @endsection