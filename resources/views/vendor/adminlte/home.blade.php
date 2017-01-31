@extends('adminlte::layouts.app')

@section('htmlheader_title')
Dashboard
@endsection

@section('contentheader_title')
Dashboard
@endsection

@section('main-content')
<hr>
<div class="col-md-3 col-sm-6 col-xs-12">
  <a href="{{url('user')}}">
  <div class="info-box">
    <span class="info-box-icon bg-aqua"><i class="ion ion-ios-people"></i></span>

    <div class="info-box-content">
      <span class="info-box-text">Belum di <br>Proses</span>
      <span class="info-box-number">5<small> users</small></span>
    </div>
    <!-- /.info-box-content -->
  </div>
  </a>
  <!-- /.info-box -->
</div>
<!-- /.col -->
<a href="{{url('payment')}}">
<div class="col-md-3 col-sm-6 col-xs-12">
  <div class="info-box">
    <span class="info-box-icon bg-green"><i class="ion-ios-checkmark"></i></span>

    <div class="info-box-content">
      <span class="info-box-text">Proses<br>selesai</span>
      <span class="info-box-number">5<small> proses</small></span>
    </div>
    <!-- /.info-box-content -->
  </div>
  <!-- /.info-box -->
</div>
</a>

@endsection
<<<<<<< HEAD
=======
@section('code-footer')
<script src="{{ asset('/js/jquery.steps.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('/css/jquery.steps.css') }}">
<style type="text/css">
  .wizard .content {
    min-height: 100px;
}

.wizard .content > .body {
    width: 100%;
    height: auto;
    padding: 15px;
    position: relative;
}

input[type=radio]{
    display: inline;
}
</style>
<script>
$(document).ready(function() {
    function adjustIframeHeight() {
        var $body   = $('body'),
            $iframe = $body.data('iframe.fv');
        if ($iframe) {
            // Adjust the height of iframe
            $iframe.height($body.height());
        }
    }
      
>>>>>>> 9cfa637f7b72485354b59483d947c6f06a110c89


