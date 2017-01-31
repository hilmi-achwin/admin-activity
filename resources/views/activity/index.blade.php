@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Activity Report
@endsection

@section('contentheader_title')
Activity Report
@endsection

@section('main-content')
<br>
<!-- include summernote css/js-->
<div class="flash-message" style="margin-left: -16px;margin-right: -16px; margin-top: 13px;">
  @foreach (['danger', 'warning', 'success', 'info'] as $msg)
  @if(Session::has('alert-' . $msg))
<div class="alert alert-{{ $msg }}">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <p class="" style="border-radius: 0">{{ Session::get('alert-' . $msg) }}</p>
</div>
  {!!Session::forget('alert-' . $msg)!!}
  @endif
  @endforeach
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th>Nomer</th>
      <th>Nama Perusahaan</th>
      <th style="text-align:center">Status</th>
      <th style="text-align:center">Action</th>
    </tr>
  </thead>
  <tbody>
   <?php $number = 1 ?>
   @forelse($activities as $activity) 
    <tr>
      <td width="1%" align="middle">{{$number}}</td>
      <td width="30%">{{$activity->nama_perusahaan}}</td>
      <td width="5%" align="middle">
        @if($activity->status == 'Belum')
        <span class="label label-danger"><i class="fa fa-info-circle" aria-hidden="true"></i> WAITING</span>
        @endif
        @if($activity->status == 'Sudah')
        <span class="label label-info"><i class="fa fa-check-square-o" aria-hidden="true"></i> FINISH</span>
        @endif
      </td>
      <td width="20%" align="middle">
        <a href="{{url('activity/'.$activity->id.'/process')}}"
          @if($activity->status == 'Sudah')
          disabled
          class="btn btn-default btn-md">
          @else
          class="btn btn-primary btn-md">
          @endif 
          
        <i class="fa fa-pencil-square-o"></i> Memproses</a>
      </td>
    </tr>
     <?php $number++ ?>
     @empty
        <tr>
          <td colspan="5"><center>No data</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>



@endsection
@section('code-footer')

<script type="text/javascript">
  $(document).ready(function(){
      $('#myTable').DataTable({
        "ordering": true
      });
      $('[data-toggle="tooltip"]').tooltip();   
  });
</script>


@endsection