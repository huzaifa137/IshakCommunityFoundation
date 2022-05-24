@extends('layouts.Adminlayout')
@section('content')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Projects information</h4>
                    <div class="table-responsive">
                      <table class="table table-dark text-light table-hover table-striped">
                        <thead class="table-primary ">
                          <tr>
                            <th>id</th>
                            <th>project Title</th>
                            <th>Image</th>
                            <th>Simple description</th>
                            <th>Detailed escription</th>
                            <th>Delete</th>
                            <th>Edit</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($data as $item)
                          <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->title}}</td>
                           <td>  <img src="{{ url('public/Image/'.$item->image) }}"></td>
                            <td>{{$item->simple_desc}}</td>
                            <td>{{$item->detailed_desc}}</td>
                            <td><a href="{{'delete/project/'.$item->id}}" class="btn btn-danger">Delete</a></td>
                            <td><a href="{{'edit/'.$item->id}}" class="btn btn-primary">Edit</a></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="content-wrapper">
            <div class="row">
              <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Gallery information</h4>
                    <div class="table-responsive">
                      <table class="table table-dark text-light table-hover table-striped">
                        <thead class="table-primary ">
                          <tr>
                            <th>id</th>
                            <th>Image</th>
                            <th>Caption</th>
                            <th>Delete</th>
                            <th>Edit</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($results as $item)
                          <tr>
                            <td>{{$item->id}}</td>
                           <td>  <img src="{{ url('public/galley_pics/'.$item->image) }}"></td>
                            <td>{{$item->caption}}</td>
                            <td><a href="{{'delete/gallery/'.$item->id}}" class="btn btn-danger">Delete</a></td>
                            <td><a href="{{'update/'.$item->id}}}" class="btn btn-primary">Edit</a></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>


              <div class="content-wrapper">
                <div class="row">
                  <div class="col-lg-12 stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Activities information</h4>
                        <div class="table-responsive">
                          <table class="table table-dark text-light table-hover table-striped">
                            <thead class="table-primary ">
                              <tr>
                                <th>id</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>money_up</th>
                                <th>goal</th>
                                <th>Delete<th>
                                <th>Edit</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($info as $item)
                              <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->title}}</td>
                                <td><img src="{{url('public/activity_pics/'. $item->image)}}" alt=""></td>
                                <td>{{$item->goal}}</td>
                                <td>{{$item->money_up}}</td>
                                <td><a class="btn btn-danger" href="{{'delete/activity/'.$item->id}}">Delete</a></td>
                                <td><a href="{{'change/'.$item->id}}" class="btn btn-primary">Edit</a></td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>

                  
          <div class="content-wrapper">
            <div class="row">
              <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Sponsor a child information</h4>
                    <div class="table-responsive">
                      <table class="table table-dark text-light table-hover table-striped">
                        <thead class="table-primary ">
                          <tr>
                            <th>id</th>
                            <th>firstname</th>
                            <th>lastname</th>
                            <th>image</th>
                            <th>age</th>
                            <th>location</th>
                            <th>School name</th>
                            <td>Grade</td>
                            <th>supportcatagory</th> 
                            <th>Delete</th>
                            <th>Edit</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($metadata as $item)
                          <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->firstname}}</td>
                            <td>{{$item->lastname}}</td>
                            <td> <img src="{{url('public/sponsor_a_child/'.$item->image)}}"></td>
                            <td>{{$item->age}}</td>
                            <td>{{$item->location}}</td>
                            <td>{{$item->schoolname}}</td>
                            <td>{{$item->grade}}</td>
                            <td>{{$item->supportcatogory}}</td>
                            <td><a href="{{'delete/sponsor/'. $item->id}}" class="btn btn-danger" >Delete</a></td>
                            <td><a href="{{'modify/'.$item->id}}" class="btn btn-primary">Edit</a></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
        @endsection