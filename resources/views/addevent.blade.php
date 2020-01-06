@extends('layout')

@section('content')
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            <div class="panel-heading" style="background: #206da4; color: white;">
            </div>
            <div class="panel-body">
            <h1> Task: add data </h1>
            <form method="post" action="{{ route('events.store') }}">
    {{csrf_field()}}
    <label for="">Enter Name Of Events </label>
    <input type="text" class="form-control" name="title" placeholder="enter the name"/><br/>
    <label for="">Enter Start Of Events </label>
    <input type="date" class="form-control" name="start_date" placeholder="enter the name"/><br/>
    <label for="">Enter End Of Events </label>
    <input type="date" class="form-control" name="end_date" placeholder="enter the name"/><br/>

    <input type="submit" class="btn btn-primary" name="submit" value="add event data"/>
    </form>
    </div>
    </div>
    </div>
    </div>
    @endsection