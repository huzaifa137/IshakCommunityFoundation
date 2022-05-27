
@extends('layouts.Adminlayout')
@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Create an Activity</h4>
          <p class="card-description"> Enter activity Details </p>
          <form action="activitychange" method="POST" enctype="multipart/form-data">
            @csrf
            <form class="forms-sample">
                <input type="hidden" name="id" value="{{$data->id}}">
            <div class="form-group">
              <label for="exampleInputName1">Title</label>
              <input type="text" class="form-control" name="title" value="{{$data->title}}" placeholder="Name" required>
            </div>
            <div class="form-group">
              <label for="exampleTextarea1">Detailed description</label>
              <textarea class="form-control" id="exampleTextarea1" rows="4" name="detail" required></textarea>
            </div>
            <div class="form-group">
              <div class="mb-3">
                <label for="formFile" class="form-label">Upload Project Image</label>
                <input class="form-control" type="file" id="formFile" value="{{$data->image}}" name="image">
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputName1">goal</label>
              <input type="number" class="form-control" name="goal" value="{{$data->goal}}" placeholder="goal to be raised" required>
            </div>

            <div class="form-group">
              <label for="exampleInputName1">Rasised Amount</label>
              <input type="number" class="form-control" name="money_up" value="{{$data->money_up}}" placeholder="Amount Raised" required>
            </div>
            <button type="submit" class="btn btn-primary me-2">Update</button>
          </form>
        </div>
      </div>
    </div>
@endsection