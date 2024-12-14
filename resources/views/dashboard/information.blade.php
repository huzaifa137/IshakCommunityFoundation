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
                      <table class="table table-dark text-light  0.-hover table-striped">
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
                           <td>  <img src="{{ url('/public/public/Image/'.$item->image) }}"></td>
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
                           <td>  <img src="{{ url('/public/public/galley_pics/'.$item->image) }}"></td>
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
                                <th>Details</th>
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
                                <td><img src="{{url('/public/public/activity_pics/'. $item->image)}}" alt=""></td>
                                <td>{{$item->details}}</td>
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

        @endsection