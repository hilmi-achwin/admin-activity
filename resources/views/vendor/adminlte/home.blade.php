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


