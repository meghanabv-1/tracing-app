@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Performance
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br/>
    @endif
      <form method="post" action="{{ route('tracer.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">teamlead:</label>
              <input type="text" class="form-control" name="teamlead"/>
               </div>
          <div class="form-group">
              <label for="name">bank:</label>
              <input type="text" class="form-control" name="bank"/>
          </div>
          <div class="form-group">
              <label for="name">tracer:</label>
              <input type="text" class="form-control" name="tracer"/>
          </div>
          <div class="form-group">
              <label for="name">fieldexecutive :</label>
              <input type="text" class="form-control" name="fieldexecutive"/>
          </div>
          <div class="form-group">
              <label for="price">collection :</label>
              <input type="text" class="form-control" name="collection"/>
          </div>
          <div class="form-group">
              <label for="date">date:</label>
              <input type="date" class="form-control" name="date"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection