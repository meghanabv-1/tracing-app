@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="large-box bg-aqua">
          <div class="inner">
            <p>METRO SOLUTIONS</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="about" class="large-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="large-box bg-green">
          <div class="inner">
            <p>EMAIL BOX</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="email" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="large-box bg-yellow">
          <div class="inner">
            <p>EVENT CALENDAR</p>
          </div>
          <div class="icon">
            <i class="ion ion-calendar"></i>
          </div>
          <a href="events" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="large-box bg-red">
          <div class="inner">
            <p>BANK PARTNERS</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="bank" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>   
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
    <div class="col-sm-8">
      <!-- Left col -->
      <br>
        <!-- Custom tabs (Charts with tabs)-->
        {!! $chart->html() !!}
</div>
          <br>
        <div class="col-lg-4">
        <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Quick Email</h3>
              <!-- tools box -->
              <form method="post" action="{{url('send')}}" enctype="multipart/form-data">
              
                {{ csrf_field() }}
                  <input type="text" class="form-control" name="emailto" placeholder="Email to:">
                  <input type="text" class="form-control" name="subject" placeholder="Subject">
                  <textarea class="textarea" placeholder="Message" name="message"
                            style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            <div class="form-group">
                <div class="btn btn-default btn-file">
                
                  <i class="fa fa-paperclip"></i> Attachment
                  <input type="file" name="attachment">
                </div>
              </div>
              <input type="submit" value="send">
            </form>
         </div>
         </div>
         </div>
</div>

 
{!! Charts::scripts() !!}
{!! $chart->script() !!}
@stop

