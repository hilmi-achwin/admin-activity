@extends('adminlte::layouts.app')

@section('htmlheader_title')
Dashboard
@endsection

@section('contentheader_title')
Dashboard
@endsection

@section('code-header')
<style type="text/css">
.textarea { margin-top: 100px }
</style>

@endsection

@section('main-content')
 <form id="profileForm" method="post" class="form-horizontal" action="{!!url('/activity/'.$activity->id.'/process')!!}" >
 <input type="hidden" name="_token" value="{!! csrf_token() !!}">
 <input type="hidden" name="id_activity" value="{!! $activity->id !!}">

    <h2>Identitas Perusahaan</h2>

    <section data-step="0">
        <div class="form-group">
            <label class="col-xs-3 control-label">Nama Perusahaan:</label>
            <div class="col-xs-5">
                <input type="text"  class="form-control" name="nama_perusahaan" value="{!! $perusahaan->nama_perusahaan !!}" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-3 control-label">Alamat</label>
            <div class="col-xs-5">
                <input type="text"  class="form-control" name="alamat" value="{!! $perusahaan->alamat !!}"/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-3 control-label">Nomor Telepon:</label>
            <div class="col-xs-5">
                <input type="text"  class="form-control" name="nomor_telepon" value="{!! $perusahaan->nomor_telepon !!}"/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-3 control-label">Nomor HP:</label>
            <div class="col-xs-5">
                <input type="text"  class="form-control" name="no_hp" value="{!! $perusahaan->no_hp !!}"/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-3 control-label">Fax:</label>
            <div class="col-xs-5">
                <input type="text"  class="form-control" name="fax" value="{!! $perusahaan->fax !!}"/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-3 control-label">E-mail:</label>
            <div class="col-xs-5">
                <input type="text"  class="form-control" name="email" value="{!! $perusahaan->email !!}"/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-3 control-label">Contact Person:</label>
            <div class="col-xs-5">
                <input type="text"  class="form-control" name="kontak_person" value="{!! $perusahaan->kontak_person !!}"/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-3 control-label">NPWP:</label>
            <div class="col-xs-5">
                <input type="text"  class="form-control" name="npwp" value="{!! $perusahaan->npwp !!}"/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-3 control-label">EDI Number:</label>
            <div class="col-xs-5">
                <input type="text"  class="form-control" name="edi_number" value="{!! $perusahaan->edi_number !!}"/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-3 control-label">Enabler:</label>
            <div class="col-xs-5">
                <label class="checkbox-inline">
                    <input type="checkbox" name="enabler" value="X2" {!! (str_contains($perusahaan->enabler,'X2'))? 'checked' : '' !!}> X2 <br>
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" name="enabler" value="EXTREME" {!! (str_contains($perusahaan->enabler,'EXTREME'))? 'checked' : '' !!}> EXTREME <br>
                 </label>
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" name="enabler" value="Lainnya" {!! (str_contains($perusahaan->enabler,'Lainnya'))? 'checked' : '' !!}> Lainnya <br>
                </label>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-3 control-label">Jenis Perusahaan:</label>
            <div class="col-xs-5">
                    <input type="checkbox" name="jenis_perusahaan[]" value="Eksportir" {!! (str_contains($perusahaan->jenis_perusahaan,'Eksportir'))? 'checked' : '' !!}> Eksportir <br>
                    <input type="checkbox" name="jenis_perusahaan[]" value="Importir" {!! (str_contains($perusahaan->jenis_perusahaan,'Importir'))? 'checked' : '' !!}>Importir<br>
                    <input type="checkbox" name="jenis_perusahaan[]" value="PPJK" {!! (str_contains($perusahaan->jenis_perusahaan,'PPJK'))? 'checked' : '' !!}> PPJK <br>
                    <input type="checkbox" name="jenis_perusahaan[]" value="Eksportir dan Importir" {!! (str_contains($perusahaan->jenis_perusahaan,'Eksportir dan Importir'))? 'checked' : '' !!}> Eksportir dan Importir <br>
                    <input type="checkbox" name="jenis_perusahaan[]" value="Shipping Line" {!! (str_contains($perusahaan->jenis_perusahaan,'Shipping Line'))? 'checked' : '' !!}> Shipping Line<br>
                    <input type="checkbox" name="jenis_perusahaan[]" value="Airline" {!! (str_contains($perusahaan->jenis_perusahaan,'Airline'))? 'checked' : '' !!}> Airline<br>
                    <input type="checkbox" name="jenis_perusahaan[]" value="Bank " {!! (str_contains($perusahaan->jenis_perusahaan,'Bank'))? 'checked' : '' !!}> Bank<br>
                    <input type="checkbox" name="jenis_perusahaan[]" value="lainnya" {!! (str_contains($perusahaan->jenis_perusahaan,'lainnya'))? 'checked' : '' !!}> Lainnya<br>
             </div>
        </div>
       


    </section>

    <!--STEP 1-->
    <h2>Pre-check</h2>
    <section data-step="1">

        <div class="form-group">
            <h2>A. Fisik</h2>
            <label></label>
            <div>
                <textarea name = "fisik" rows="9" cols="60" style="vertical-align: left;"></textarea>
            </div>
        </div>

            
        <br>
        <div class="form-group">
        <h2>B. Komponen</h2>
            <label class="col-xs-3 control-label">Operating Sistem (OS)</label>
            <div class="col-xs-5">
                <input type="text"  class="form-control" name="os" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-3 control-label">Modul Terpasang</label>
            <div class="col-xs-5">
                <input type="checkbox" name="modul_terpasang[]" value="modul pib"> Modul PIB <br>
                <input type="checkbox" name="modul_terpasang[]" value="modul peb" > Modul PEB<br>
                <input type="checkbox" name="modul_terpasang[]" value="modul tpb"> Modul TPB <br>
                <input type="checkbox" name="modul_terpasang[]" value="modul pengangkut"> Modul Pengangkut <br>
                <input type="checkbox" name="modul_terpasang[]" value="modul antri manifest" > Modul Antri Manifest<br>
                <input type="checkbox" name="modul_terpasang[]" value="modul bank"> Modul Bank<br>
                <input type="checkbox" name="modul_terpasang[]" value="modul bank interface"> Modul Bank Interface <br>
                <input type="checkbox" name="modul_terpasang[]" value="lain-lain"> Lain-Lain<br>
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-3 control-label">Modem</label>
            <div class="col-xs-5">
                <label class="text-inline">
                    <input type="text"  name="modem" placeholder="ada,..."/>
                </label>
                <label class="radio-inline">
                    <input type="radio" name="modem" value="tidak-ada"> Tidak ada <br>
                </label>
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-3 control-label">Accessories</label>
            <div class="col-xs-5">
                <label class="radio-inline">
                    <input type="radio" name="accessories" value="ada" />Ada (mouse, keyboard, flashdisk, dll)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="accessories" value="tidak-ada"> Tidak ada 
                </label>
            </div>
        </div>

        <div class="form-group">
        <h2>Setting Komputer</h2>
            <label class="col-xs-3 control-label">No. Dial IPLUS</label>
            <div class="col-xs-5">
                <input type="text" class="form-control" name="num_dial_iplus" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-3 control-label">IP EXTREME</label>
            <div class="col-xs-5">
                <input type="text"  class="form-control" name="ip_extreme" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-3 control-label">Directory Modul</label>
            <div class="col-xs-5">
                <input type="text"  class="form-control" name="directory_modul" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-3 control-label">Lain-Lain</label>
            <div class="col-xs-5">
                <textarea name = "lain-lainPre" rows="5" cols="55" style="vertical-align: left;"></textarea>
            </div>
        </div>
    </section>

    <!--STEP 2-->
    <h2>Tindakan Perbaikan</h2>
    <section data-step="2">
        <div class="form-group">
            <label class="col-xs-3 control-label">Detail Permasalahan</label>
            <div class="col-xs-5">
                <textarea name = "detail_permasalahan" rows="10" cols="75" style="vertical-align: left;">{!! $activity->detail_permasalahan !!}</textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-3 control-label">Tindakan Perbaikan</label>
            <div class="col-xs-5">
                <textarea name = "tindakan_perbaikan" rows="10" cols="75" style="vertical-align: left;"></textarea>
            </div>
        </div>
    </section>

    <!--STEP 3-->
    <h2>Post-check</h2>
    <section data-step="3">

        <div class="form-group">
        <div>
            <h2>Fisik</h2>
        </div>  
            <label class="col-xs-3 control-label">Mengembalikan ke fungsi awal?</label>
            <div class="col-xs-5">
                <label class="radio-inline">
                    <input type="radio" name="pengembalian_fungsi_awal" value="ya" /> Ya <br>
                </label>
                <label class="radio-inline">
                    <input type="radio" name="pengembalian_fungsi_awal" value="tidak"> Tidak<br>
                </label>    
            </div>
        </div>

        <div class="form-group">
            <div>
                <h2>Non-Fisik</h2>
            </div> 
            <label class="col-xs-3 control-label">Fungsi Modul EDII</label>
            <div class="col-xs-5">
                <label class="radio-inline">
                    <input type="radio" name="fungsi_model_edii" value="berfungsi" /> Berfungsi <br>
                </label>
                <label class="radio-inline">
                    <input type="radio" name="fungsi_model_edii" value="tidak-berfungsi">Tidak Berfungsi<br>
                </label>
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-3 control-label">Fungsi Pembentukan EDIFACT</label>
            <div class="col-xs-5">
                <label class="radio-inline">
                    <input type="radio" name="fungsi_pembentukan_edifact" value="berfungsi" /> Berfungsi <br>
                </label>
                <label class="radio-inline">
                    <input type="radio" name="fungsi_pembentukan_edifact" value="tidak-berfungsi">Tidak Berfungsi<br>
                </label>
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-3 control-label">Fungsi Komunikasi</label>
            <div class="col-xs-5">
                <label class="radio-inline">
                    <input type="radio" name="fungsi_komunikasi" value="berfungsi" /> Berfungsi <br>
                </label>
                <label class="radio-inline">
                    <input type="radio" name="fungsi_komunikasi" value="tidak-berfungsi" />Tidak Berfungsi<br>
                </label>
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-3 control-label">Penyelesaian Semua Keluhan</label>
            <div class="col-xs-5">
                <label class="radio-inline">
                    <input type="radio" name="penyelesaian_semua_keluhan" value="ya" /> Ya <br>
                </label>
                <label class="radio-inline">
                    <input type="radio" name="penyelesaian_semua_keluhan" value="tidak">Tidak<br>
                </label>
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-3 control-label">Serah terima perangkat dalam baik dan lengkap</label>
            <div class="col-xs-5">
                <label class="radio-inline">
                    <input type="radio" name="serah_terima" value="ya"> Ya <br>
                </label>
                <label class="radio-inline">
                    <input type="radio" name="serah_terima" value="tidak">Tidak<br>
                </label>
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-3 control-label">Lain-Lain</label>
            <div class="col-xs-5">
                <textarea name = "lain-lainPost" rows="5" cols="55" style="vertical-align: left;"></textarea>
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
<script src="{!! asset('/js/jquery.steps.min.js') !!}"></script>
<link rel="stylesheet" href="{!! asset('/css/jquery.steps.css') !!}">
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
      

    
        });
$("#profileForm ").steps({
            headerTag: "h2",
            bodyTag: "section",
          onFinished: function (event, currentIndex)
        {
            var form = $(this);

            // Submit form input

            form.submit();
        }
        
        });

</script>
@endsection