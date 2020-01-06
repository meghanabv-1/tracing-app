@extends('layout')

@section('content')

<div class="container">
    <div class="row">
    <table class="table table-striped">
    <thead>
        <tr class="warning">
          <td>title</td>
          <td>Start Date</td>
          <td>End Date</td>
          <td>Edit</td>
        </tr>
    </thead>
    <tbody>
        @foreach($events as $event)
        <tr>
            <td>{{$event->title}}</td>
            <td>{{$event->start_date}}</td>
            <td>{{$event->end_date}}</td>
            <th><a href="{{action('EventController@edit', $event['id'])}}" class="btn btn-success"> Edit</a>
            </th>
       </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection