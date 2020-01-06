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
  <table class="table ">
    <thead>
        <tr>
          <td>teamleadname</td>
          <td>bankname</td>
          <td>tracername</td>
          <td>executivename</td>
          <td>collection</td>
          <td>date</td>
        </tr>
    </thead>
    <tbody>
        @foreach($overalls as $overall)
        <tr>
            <td>{{$overall->teamleadname}}</td>
            <td>{{$overall->bankname}}</td>
            <td>{{$overall->tracername}}</td>
            <td>{{$overall->executivename}}</td>
            <td>{{$overall->collection}}</td>
            <td>{{$overall->date}}</td>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection