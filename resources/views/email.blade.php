@extends('adminlte::page')
@section('content')
<div class="row">
        <section class="col-lg-7 connectedSortable">
        <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>
              <h3 class="box-title">Quick Email</h3>
              <!-- tools box -->
              <form method="post" action="{{url('send')}}" enctype="multipart/form-data">
              
                {{ csrf_field() }}
                  <input type="text" class="form-control" id="email" name="emailto" placeholder="Email to:">
                  <input type="text" class="form-control" id="email" name="subject" placeholder="Subject">
                  <textarea class="textarea"  id="email" placeholder="Message" name="message"
                  style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            <div class="form-group">
                <div class="btn btn-default btn-file">
                  <i class="fa fa-paperclip"></i> Attachment
                  <input type="file"  id="email" name="attachment">
                </div>
              </div>
              <input type="submit" value="send">
            </form>
         </div>
         </div>
         </div>
         </section>
         @stop
 
