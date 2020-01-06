@extends('adminlte::page')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <form method="get" action="{{ route('executive.store') }}">
        <div class="form-group">
              @csrf
              <label for="name">Executive Name:</label>
              <select name="name" id="executivename" class="form-control">
              <option value="executivename">Name</option>
              @foreach($executivenames as $value)
              <option value="{{$value}}">{{$value}}</option>
              @endforeach
              </select>
               </div>
              
          <button type="submit" class="btn btn-primary">Display</button>
            <div class="panel panel-default">
            <br>
                <div class="panel-heading">Chart Demo</div>

                <div class="panel-body">
                    {!! $chart3->html() !!}
                </div>
            </div>
        </div>
    </div>
</div>
{!! Charts::scripts() !!}
{!! $chart3->script() !!}
@endsection