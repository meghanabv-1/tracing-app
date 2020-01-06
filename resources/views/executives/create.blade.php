@extends('adminlte::page')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Details
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
    <form method="post" action="{{ route('executive.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Executive Name:</label>
              <select name="executivename" id="fieldexecutive" class="form-control">
              <option value="">Name</option>
              @foreach($fieldexecutives as $value)
              <option value="{{$value}}">{{$value}}</option>
              @endforeach
              </select>
               </div>
               <div class="form-group">
              <label for="name">Loan Application No :</label>
              <input type="text" class="form-control" name="loan_application_no"/>
          </div>
          <div class="form-group">
              <label for="name">Initiative :</label>
              <input type="text" class="form-control" name="initiative"/>
          </div>
          <div class="form-group">
              <label for="name">settlement :</label>
              <input type="text" class="form-control" name="settlement"/>
          </div>
          <div class="form-group">
              <label for="name">Installment :</label>
              <input type="text" class="form-control" name="installment"/>
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