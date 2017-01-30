@extends('adminlte::layouts.app')

@section('htmlheader_title')
Dashboard
@endsection

@section('contentheader_title')
Dashboard
@endsection

@section('code-header')


@endsection

@section('main-content')
 <form id="profileForm" method="post" class="form-horizontal">
    <h2>Pre-check</h2>
    <section data-step="0">
        <div class="form-group">
            <label class="col-xs-3 -label">A. Fisik</label>
            <div class="col-xs-5">
                <input type="textarea" rows="10" cols="30" class="form-control" name="Fisik" />
            </div>
        </div>

            
        <br>
        <div class="form-group">
        <h2>Komponen</h2>
            <label class="col-xs-3 control-label">Operating Sistem (OS)</label>
            <div class="col-xs-5">
                <input type="text"  class="form-control" name="OS" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-3 control-label">Modul Terpasang</label>
            <div class="col-xs-5">
                <input type="checkbox" name="modul terpasang" value="modul pib"> Modul PIB <br>
                <input type="checkbox"  name="modul terpasang" value="modul peb" > Modul PEB<br>
                <input type="checkbox"  name="modul terpasang" value="modul tpb"> Modul TPB <br>
                <input type="checkbox" name="modul terpasang" value="modul pengangkut"> Modul Pengangkut <br>
                <input type="checkbox"  name="modul terpasang" value="modul antri manifest" > Modul Antri Manifest<br>
                <input type="checkbox"  name="modul terpasang" value="modul bank"> Modul Bank<br>
                <input type="checkbox"  name="modul terpasang" value="modul bank interface"> Modul Bank Interface <br>
                <input type="checkbox"  name="modul terpasang" value="lain-lain"> Lain-Lain<br>
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-3 control-label">Modem</label>
            <div class="col-xs-5">
                <input type="text"  name="modem" /><br>
                <input type="radio" name="modem" value="tidak-ada"> Tidak ada <br>
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-3 control-label">Accessories</label>
            <div class="col-xs-5">
                <input type="radio" name="accessories" value="ada" />Ada (mouse, keyboard, flashdisk, dll)<br>
                <input type="radio" name="accessories" value="tidak-ada"> Tidak ada <br>
            </div>
        </div>

        <div class="form-group">
        <h2>Setting Komputer</h2>
            <label class="col-xs-3 control-label">No. Dial IPLUS</label>
            <div class="col-xs-5">
                <input type="text" class="form-control" name="no-dial-iplus" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-3 control-label">IP EXTREME</label>
            <div class="col-xs-5">
                <input type="text"  class="form-control" name="ip-extreme" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-3 control-label">Directory Modul</label>
            <div class="col-xs-5">
                <input type="text"  class="form-control" name="directory-modul" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-3 control-label">Lain-Lain</label>
            <div class="col-xs-5">
                <input type="textarea" rows="10" cols="30" class="form-control" name="lain-lain" />
            </div>
        </div>
    </section>

    <h2>Tindakan Perbaikan</h2>
    <section data-step="1">
        <div class="form-group">
            <label class="col-xs-3 control-label">Tindakan Perbaikan</label>
            <div class="col-xs-5">
                <input type="textarea" rows="30" cols="90" class="form-control" name="tindakan-perbaikan" />
            </div>
        </div>
    </section>

    <h2>Post-check</h2>
    <section data-step="2">

        <div class="form-group">
        <div>
            <h2>Fisik</h2>
        </div>  
            <label class="col-xs-3 control-label">Mengembalikan ke fungsi awal?</label>
            <div class="col-xs-5">
                <input type="radio" name="fungsi-awal" value="ya" /> Ya <br>
                <input type="radio" name="fungsi-awal" value="tidak"> Tidak<br>
            </div>
        </div>

        <div>
            <h2>Non-Fisik</h2>
        </div>  

        <div class="form-group">
            <label class="col-xs-3 control-label">Fungsi Modul EDII</label>
            <div class="col-xs-5">
                <input type="radio" name="fungsi-edii" value="berfungsi" /> Berfungsi <br>
                <input type="radio" name="fungsi-awal" value="tidak-berfungsi">Tidak Berfungsi<br>
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-3 control-label">Fungsi Pembentukan EDIFACT</label>
            <div class="col-xs-5">
                <input type="radio" name="fungsi-edifact" value="berfungsi" /> Berfungsi <br>
                <input type="radio" name="fungsi-edifact" value="tidak-berfungsi">Tidak Berfungsi<br>
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-3 control-label">Fungsi Komunikasi</label>
            <div class="col-xs-5">
                <input type="radio" name="fungsi-komunikasi" value="berfungsi" /> Berfungsi <br>
                <input type="radio" name="fungsi-komunikasi" value="tidak-berfungsi">Tidak Berfungsi<br>
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-3 control-label">Penyelesaian Semua Keluhan</label>
            <div class="col-xs-5">
                <input type="radio" name="keluhan" value="ya" /> Ya <br>
                <input type="radio" name="keluhan" value="tidak">Tidak<br>
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-3 control-label">Serah terima perangkat dalam baik dan lengkap</label>
            <div class="col-xs-5">
                <input type="radio" name="keluhan" value="ya"> Ya
                <input type="radio" name="keluhan" value="tidak">Tidak<br>
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-3 control-label">Lain-Lain</label>
            <div class="col-xs-5">
                <input type="textarea" rows="10" cols="30" class="form-control" name="Lain-lainPostCheck" />
            </div>
        </div>
        
    </section>
</form>

<div class="modal fade" id="welcomeModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Welcome</h4>
            </div>
            <div class="modal-body">
                <p class="text-center">Thanks for signing up</p>
            </div>
        </div>
    </div>
</div>

@endsection
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
      

    
        });
$("#profileForm ").steps({
            headerTag: "h2",
            bodyTag: "section",
          
        });

</script>
@endsection
