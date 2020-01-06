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
          <td>username</td>
          <td>collection</td>
          <td>month</td>
          <td>year</td>
        </tr>
    </thead>
    <tbody>
        @foreach($performances as $performance)
        <tr>
            <td>{{$performance->username}}</td>
            <td>{{$performance->collection}}</td>
            <td>{{$performance->month}}</td>
            <td>{{$performance->year}}</td>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection