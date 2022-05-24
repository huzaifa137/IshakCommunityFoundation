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
                  <div class="card-body card-body1">
                    <h4 class="card-title">Create a project</h4>
                    <p class="card-description"> Enter project Details </p>
                    <form action="project" method="POST" enctype="multipart/form-data">
                      @csrf
                      <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" class="form-control" name="title" max="400" maxlength="4000" placeholder="Name" required>
                      </div>
                      <div class="form-group">
                        <div class="mb-3">
                          <label for="formFile" class="form-label">Upload Project Image</label>
                          <input class="form-control" type="file" id="formFile" name="imgfile">
                        </div>
                      </div>
              
                      <div class="form-group">
                        <label for="exampleTextarea1">Simple description</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4" name="simple_desc" required></textarea>
                      </div>

                      <div class="form-group">
                        <label for="exampleTextarea1">Detailed description</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4" name="detailed_desc" required></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
             
              <div class="row">
                <div class="col-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body card-body1">
                      <h4 class="card-title">Upload image in gallery</h4>
                      <p class="card-description"> Enter image details </p>
                      <form action="gallery" method="POST" enctype="multipart/form-data">
                        @csrf
                        <form class="forms-sample">
                        <div class="form-group">
                          <label for="exampleInputName1">Image Caption Name</label>
                          <input type="text" class="form-control" name="caption" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                          <div class="mb-3">
                            <label for="formFile" class="form-label">Upload Project Image</label>
                            <input class="form-control" type="file" id="formFile" name="imgfile">
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                      </form>
                    </div>
                  </div>
                </div>
               
                <div class="row">
                  <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body card-body1">
                        <h4 class="card-title">Create an Activity</h4>
                        <p class="card-description"> Enter activity Details </p>
                        <form action="activity" method="POST" enctype="multipart/form-data">
                          @csrf
                          <form class="forms-sample">
                          <div class="form-group">
                            <label for="exampleInputName1">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Name" required>
                          </div>
                          <div class="form-group">
                            <div class="mb-3">
                              <label for="formFile" class="form-label">Upload Project Image</label>
                              <input class="form-control" type="file" id="formFile" name="image">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputName1">goal</label>
                            <input type="number" class="form-control" name="goal" placeholder="goal to be raised" required>
                          </div>

                          <div class="form-group">
                            <label for="exampleInputName1">Rasised Amount</label>
                            <input type="number" class="form-control" name="money_up" placeholder="Amount Raised" required>
                          </div>
                          <button type="submit" class="btn btn-primary me-2">Submit</button>
                        </form>
                      </div>
                    </div>
                  </div>

           <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body card-body1">
                    <h4 class="card-title">SPONSER A CHILD</h4>
                    <form action="sponsor" method="POST" enctype="multipart/form-data">
                      @csrf 
                    <form class="form-sample">
                      <p class="card-description"> Child info </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">First Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="firstname" required/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Last Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control"  name="lastname" required/>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Age</label>
                            <div class="col-sm-9">
                              <input type="number" class="form-control" name="age" required/>
                            </div>
                        </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">City</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="city" required/>
                              </div>
                            </div>
                          </div>
                    
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Child pic</label>
                            <div class="col-sm-9">
                              <input type="file" class="form-control" name="image" required/>
                            </div>
                          </div>
                        </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">School name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="schoolname"  required/>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Grade</label>
                            <div class="col-sm-9">
                              <input type="number" class="form-control" name="grade"  required/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Support Catagory</label>
                            <div class="col-sm-9">
                              <select class="form-control" name="supportcatagory" required>
                                <option value="Educaation support">Education support</option>
                                <option value="shelter support">Shelter support</option>
                                <option value="Food support">Food support</option>
                                <option value="Heatlh support">Health support</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
          <!-- content-wrapper ends -->
       @endsection