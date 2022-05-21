@extends('layouts.Adminlayout')
@section('content')
              <div class="row">
                <div class="col-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Upload image in gallery</h4>
                      <p class="card-description"> Enter image details </p>
                      <form action="galleryupdate" method="POST" enctype="multipart/form-data">
                        @csrf
                        <form class="forms-sample">
                          <input type="hidden" name="id" value="{{$info->id}}">
                        <div class="form-group">
                          <label for="exampleInputName1">Image Caption Name</label>
                          <input type="text" class="form-control" name="caption" value="{{$info->caption}}" required>
                        </div>
                        <div class="form-group">
                          <div class="mb-3">
                            <label for="formFile" class="form-label">Upload Project Image</label>
                            <input class="form-control" type="file" id="formFile" name="imgfile" value="{{$info->image}}">
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">update</button>
                      </form>
                    </div>
                  </div>
                </div> 

                @endsection