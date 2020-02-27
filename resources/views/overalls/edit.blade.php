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
      <form method="post" action="{{ route('overalls.update', $overall->id) }}">
        @csrf
        <div class="form-group">
        <label for="name">teamlead:</label>
              <select name="teamlead" id="teamlead" class="form-control">
              <option value="">Teamlead</option>
              @foreach($teamleads as $key=>$value)
              <option value="{{$key}}">{{$value}}</option>
              @endforeach
              </select>
               </div>
          <div class="form-group">
              <label for="bank">bank:</label>
              <select name="bank" id="bank" class="form-control">
              <option value="">Bank</option>
              @foreach($banks as $key=>$value)
              <option value="{{$key}}">{{$value}}</option>
              @endforeach
              </select>
          </div>
          <div class="form-group">
              <label for="name">tracer:</label>
              <select name="tracer" id="tracer" class="form-control">
              <option value="">Tracer</option>
              @foreach($tracers as $key=>$value)
              <option value="{{$key}}">{{$value}}</option>
              @endforeach
              </select>
          </div>
          <div class="form-group">
              <label for="name">fieldexecutive :</label>
              <select name="fieldexecutive" id="fieldexecutive" class="form-control">
              <option value="">Fieldexecutive</option>
              @foreach($fieldexecutives as $key=>$value)
              <option value="{{$key}}">{{$value}}</option>
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
          {{method_field('PUT')}}
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection