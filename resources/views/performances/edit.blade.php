@extends('adminlte::page')

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
      <form method="post" action="{{ route('performances.update', $performance->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">username:</label>
          <input type="text" class="form-control" name="username" value={{ $performance->username }} />
        </div>
        <div class="form-group">
          <label for="price">collection :</label>
          <input type="text" class="form-control" name="collection" value={{ $performance->collection }} />
        </div>
        <div class="form-group">
          <label for="month">month:</label>
          <input type="text" class="form-control" name="month" value={{ $performance->month }} />
        </div>
        <div class="form-group">
          <label for="year">year:</label>
          <input type="text" class="form-control" name="year" value={{ $performance->year }} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection