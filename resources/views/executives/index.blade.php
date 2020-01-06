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
    </div><br/>
  @endif
  <table class="table">
    <thead>
        <tr>
          <td>executivename</td>
          <td>loan_appllication_no</td>
          <td>initiative</td>
          <td>settlement</td>
          <td>installment</td>
          <td>date</td>
        </tr>
    </thead>
    <tbody>
        @foreach($executives as $executive)
        <tr>
            <td>{{$executive->executivename}}</td>
            <td>{{$executive->loan_application_no}}</td>
            <td>{{$executive->initiative}}</td>
            <td>{{$executive->settlement}}</td>
            <td>{{$executive->installment}}</td>
            <td>{{$executive->date}}</td>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection