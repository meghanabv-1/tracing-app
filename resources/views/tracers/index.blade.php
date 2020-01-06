@extends('adminlte::page')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table">
    <thead>
        <tr>
          <td>tracername</td>
        </tr>
    </thead>
    <tbody>
        @foreach($tracers as $tracer)
        <tr>
            <td>{{$tracer->tracername}}</td>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection