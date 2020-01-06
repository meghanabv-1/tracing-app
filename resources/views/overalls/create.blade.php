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
      </div><br/>
    @endif
    <form method="post" action="{{ route('overall.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">teamlead:</label>
              <select name="teamleadname" id="teamlead" class="form-control">
              <option value="">Teamlead</option>
              @foreach($teamleads as $value)
              <option value="{{$value}}">{{$value}}</option>
              @endforeach
              </select>
               </div>
          <div class="form-group">
              <label for="bank">bank:</label>
              <select name="bankname" id="bank" class="form-control">
              <option value="">Bank</option>
              @foreach($banks as $value)
              <option value="{{$value}}">{{$value}}</option>
              @endforeach
              </select>
          </div>
          <div class="form-group">
              <label for="name">tracer:</label>
              <select name="tracername" id="tracer" class="form-control">
              <option value="">Tracer</option>
              @foreach($tracers as $value)
              <option value="{{$value}}">{{$value}}</option>
              @endforeach
              </select>
          </div>
          <div class="form-group">
              <label for="name">fieldexecutive :</label>
              <select name="executivename" id="fieldexecutive" class="form-control">
              <option value="">Fieldexecutive</option>
              @foreach($fieldexecutives as $value)
              <option value="{{$value}}">{{$value}}</option>
              @endforeach
              </select>
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