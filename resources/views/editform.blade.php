@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Share
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('events.update', $events->id) }}">
        @csrf
        <div class="container">
        <div class="jumbotrone" style="margin-top: 5%;">
        <h1> Update Your Data </h1>
        <hr>
        <input type="hidden" name="method" value="update"/>
        <div class="form-group">
          <label>Name Of Events</label>
          <input type="text" class="form-control" name="title" placeholder="Enter Name" value={{ $events->title }} />
        </div>
        <div class="form-group">
          <label>Start Date Of Event</label>
          <input type="date" class="form-control" name="start_date" placeholder="Enter Start Date"value={{ $events->start_date }} />
        </div>
        <div class="form-group">
          <label>End Date Of Events</label>
          <input type="date" class="form-control" name="end_date" value={{ $events->end_date }} />
        </div>
        {{method_field('PUT')}}
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection