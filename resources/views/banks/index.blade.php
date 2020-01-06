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
          <td>id</td>
          <td>bankname</td>
        </tr>
    </thead>
    <tbody>
        @foreach($banks as $bank)
        <tr>
            <td>{{$bank->id}}</td>
            <td>{{$bank->bankname}}</td>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection