@extends('adminlte::page')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Bank Names
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
      <form method="post" action="{{ route('bank.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">bankname:</label>
              <input type="text" class="form-control" name="bankname"/>
          </div>
         
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection
