<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Customer Site</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Styles -->
        
    </head>
    <body>
    <div class="container">
    <br>
    <br>
    <img src="https://i.imgbox.com/KeEIS0FT.png" alt="about-profil" width="950" height="70" class="col-xs-12" style="align-content: center;"><br>
    <br><p class="col-xs-12" style="background: #ffffff; padding: 10px; margin: 0; text-align: center; line-height: 13px; color: black; font-size: 20px; font-style: bold;">Activity Report</p><br><br><br><br><br>
  <div class="row">
    <div class="col-xs-2"><div style="border: solid 1px #000000; background: #ffffff; padding: 15px; margin: 0; text-align: left; line-height: 13px; color: black; font-size: 10px">
      <label for="seq">Sequence No. :</label><br>
      <input type="text" class="col-xs-12" id="seq" name="sequence_number" style="text-align: center;" value="{{$activity->sequence_number}}"><br><br>
    </div></div>
    <div class="col-xs-2"><p style="border: solid 1px #000000; background: #ffffff; padding: 15px; margin: 0; text-align: left; line-height: 13px; color: black; font-size: 10px">
      <label for="date">Tanggal :</label><br>
      <input type="text" class="col-xs-12" id="date" name="created_at" style="text-align: center;"value="{{$tanggal }}"><br><br>
      </p></div>
    <div class="col-xs-2"><p style="border: solid 1px #000000; background: #ffffff; padding: 15px; margin: 0; text-align: left; line-height: 13px; color: black; font-size: 10px">
      <label for="arrival">Waktu Datang :</label><br>
      <input type="text" class="col-xs-12" id="arrival" name="created_at" style="text-align: center;"value="{{$activity->waktu_kedatangan}}"><br><br>
    </p></div>
    <div class="col-xs-2"><p style="border: solid 1px #000000; background: #ffffff; padding: 15px; margin: 0; text-align: left; line-height: 13px; color: black; font-size: 10px">
      <label for="start">Waktu Mulai :</label><br>
      <input type="text" class="col-xs-12" id="start" name="created_at" style="text-align: center;"value="{{$activity->waktu_mulai}}"><br><br>
    </p></div>
    <div class="col-xs-2"><p style="border: solid 1px #000000; background: #ffffff; padding: 15px; margin: 0; text-align: left; line-height: 13px; color: black; font-size: 10px"> 
    <label for="finish">Waktu Selesai :</label><br>
      <input type="text" class="col-xs-12" id="finish" name="updated_at" style="text-align: center;"value="{{$activity->waktu_selesai}}"><br><br>
    </p></div>
    <div class="col-xs-2"><p style="border: solid 1px #000000; background: #ffffff; padding: 15px; margin: 0; text-align: left; line-height: 13px; color: black; font-size: 10px">
      <label for="place">Place of Work:</label><br>
      EDII Site<br><br>
    </p></div>
  </div>
  <br>

  <form class="form-horizontal">
  <div class="row">
  <div class="col-xs-12">
  <div style="border: solid 1px #000000; background: #ffffff; padding: 10px; margin: 0; text-align: justify; line-height: 10px; color: black; font-size: 10px">
  <label class="col-xs-12" for="name">Identitas Perusahaan :</label><br>
        <label class="col-xs-12" for="name"></label><br>
          
           <label class="col-xs-2" for="nama_perusahaan">Nama Perusahaan:</label>
            <input type="text" class="col-xs-10" id="nama_perusahaan" name="nama_perusahaan" value="{{$perusahaan->nama_perusahaan}}"><br><br><br>
            <label class="col-xs-2" for="addr">Alamat:</label>
            <input type="text" class="col-xs-10" id="addr" name="alamat" value="{{$perusahaan->alamat}}"><br><br><br>
            <label class="col-xs-2" for="tlp">No. Telepon:</label>
            <input type="text" class="col-xs-10" id="tlp" name="nomor_telepon" value="{{$perusahaan->nomor_telepon}}"><br><br><br>
            <label class="col-xs-2" for="hp">HP:</label>
            <input type="text" class="col-xs-10" id="hp" name="no_hp" value="{{$perusahaan->no_hp}}"><br><br><br>
            <label class="col-xs-2" for="fax">Fax:</label>
            <input type="text" class="col-xs-10" id="fax" name="fax" value="{{$perusahaan->fax}}" ><br><br><br>
        
            <label class="col-xs-2" for="mail">e-mail:</label>
            <input type="email" class="col-xs-10" id="mail" name="email" value="{{$perusahaan->email}}"><br><br><br>
      
            <label class="col-xs-2" for="cp">Kontak Person:</label>
            <input type="text" class="col-xs-10" id="cp" name="kontak_person" value="{{$perusahaan->kontak_person}}"><br><br><br>
       
            <label class="col-xs-2" for="npwp">NPWP:</label>
            <input type="text" class="col-xs-10" id="npwp" name="npwp" value="{{$perusahaan->npwp}}"><br><br><br>
        
        
            <label class="col-xs-2" for="edi">Edi Number:</label>
            <input type="text" class="col-xs-10" id="edi" name="edi_number" value="{{$perusahaan->edi_number}}"><br><br><br>
        
            <label class="col-xs-2" for="ena">Enabler:</label>
            <input type="text" class="col-xs-10" id="ena" name="enabler" value="{{$perusahaan->enabler}}"><br><br><br>
            <label class="col-xs-2" for="jenis">Jenis Perusahaan:</label>
            <input type="text" class="col-xs-10" id="jenis" name="jenis_perusahaan" value="{{$perusahaan->jenis_perusahaan}}"><br><br>
  </div>
  </div>
  </div>
  </form>
  <br>  <br> 
  <form class="form-horizontal">
  <div class="row">
  <div class="col-xs-6">
  <label class="col-xs-12" style="font-size: 10px;" for="detail">Detail Permasalahan :</label>
  <textarea class="form-control" rows="5" id="detail" style="font-size: 10px;" name=:"detail_permasalahan">{{$activity->detail_permasalahan}}
</textarea><br>
  </div>
  <div class="col-xs-6">
   <label class="col-xs-12" style="font-size: 10px;" for="tindakan">Tindakan Perbaikan :</label>
   <textarea class="form-control" rows="5" id="tindakan" style="font-size: 10px;" name="tindakan_perbaikan">{{$activity->tindakan_perbaikan}}
</textarea><br>
  </div>
  </div>
  </form>
  <form class="form-horizontal">
  <div class="row">
  <div class="col-xs-6">
  <div style="background: #ffffff; padding: 10px; margin: 0; text-align: justify; line-height: 23px; color: black; font-size: 10px">
  <label class="col-xs-12" for="awal" style="line-height: 10px;">Cek Awal (Pre-Check) </label><br>
  <label class="col-xs-12" for="fisik" style="line-height: 10px;">A. Fisik </label>
  <textarea class="form-control" rows="3" id="fisik" style="font-size: 10px;">{{$precheck->fisik}}</textarea><br>
  <label class="col-xs-12" for="komponen">B. Komponen </label>
  <label class="col-xs-6" for="os" style="line-height: 10px;">1. Operating Sistem (OS) : </label>
  <p class="col-xs-6"  name="os" style="line-height: 10px;" value="">{{$precheck->os}}</p>
  <br><br>
  <label class="col-xs-6" for="modul_terpasang" style="line-height: 10px;" >2. Modul Terpasang : </label>
  <p class="col-xs-6"  name="modul_terpasang" style="line-height: 10px;" value="">{{$precheck->modul_terpasang}}</p>
  <br>
  <label class="col-xs-6" for="modem" style="line-height: 10px;">3. Modem : </label>
  <p class="col-xs-6"  name="modem" style="line-height: 10px;" value="">{{$precheck->modem}}</p>
  <br>
  <label class="col-xs-6" for="acc" style="line-height: 10px;">4. Accessories : </label>
  <p class="col-xs-6"  name="accessories" style="line-height: 10px;" value="" >{{$precheck->accessories}}</p>
  <br>
  <label class="col-xs-6" for="set" style="line-height: 10px;">5. Setting Komputer </label>
  <p class="col-xs-6"  name="set" style="line-height: 10px;"></p>
  <br>
  <label class="col-xs-6" for="dial" style="line-height: 10px;">a. No. Dial IPLUS : </label>
  <p class="col-xs-6"  name="num_dial_iplus" style="line-height: 10px;" value="" >{{$precheck->num_dial_iplus}}</p>
  <br>
  <label class="col-xs-6" for="ipex" style="line-height: 10px;">b. IP EXTREME: </label>
  <p class="col-xs-6"  name="ip_extreme" style="line-height: 10px;" value="" >{{$precheck->ip_extreme}}</p>
  <br>
  <label class="col-xs-6" for="direc" style="line-height: 10px;">c. Directori Modul : </label>
  <p class="col-xs-6"  name="directory_modul" style="line-height: 10px;" value="" >{{$precheck->directory_modul}}</p>
  <br>
  <label class="col-xs-6" for="lain" style="line-height: 10px;">d. Lain-lain : </label>
  <textarea class="form-control" rows="3" id="lain" style="font-size: 10px;">{!! $precheck->lainlain !!}</textarea>
    </div>
  </div>
  <div class="col-xs-6">
  <div style="background: #ffffff; padding: 10px; margin: 0; text-align: justify; line-height: 23px; color: black; font-size: 10px">
   <label class="col-xs-12" for="akhir" style="line-height: 10px;">Cek Akhir (postcheck) </label><br>
  <label class="col-xs-12" for="fisik2" style="line-height: 10px;">A. Fisik </label><br>
  <label class="col-xs-6" for="1" style="line-height: 10px;">1. Mengembalikan ke setting awal </label>
  <p class="col-xs-6"  name="pengambalian_fungsi_awal" style="line-height: 10px;" value="" >{{$postcheck->pengembalian_fungsi_awal}}</p>
  <br>
  <label class="col-xs-12" for="non" style="line-height: 10px;">B. Non Fisik </label><br>
  <label class="col-xs-6" for="mod" style="line-height: 10px;">1. Fungsi Modul EDII : </label>
  <p class="col-xs-6" name="fungsi_modul_edii" style="line-height: 10px;" value="" >{{$postcheck->fungsi_model_edii}}</p>
  <br>
  <label class="col-xs-6" for="edifact" style="line-height: 20px;">2. Fungsi Pembentukan EDIFACT (Harus bisa) : </label>
  <p class="col-xs-6"  name="fungsi_pembentukan_edifact" style="line-height: 20px;" value="" >{{$postcheck->fungsi_pembentukan_edifact}}</p>
  <br><br>
  <label class="col-xs-6" for="komunikasi" style="line-height: 10px;">3. Fungsi Komunikasi : </label>
  <p class="col-xs-6"  name="fungsi_komunikasi" style="line-height: 10px;" value="" >{{$postcheck->fungsi_komunikasi}}</p>
  <br>
  <label class="col-xs-6" for="keluhan" style="line-height: 10px;">4. Penyelesaian Semua Keluhan : </label>
  <p class="col-xs-6"  name="penyelesaian_semua_keluhan" style="line-height: 10px;"  value="" >{{$postcheck->penyelesaian_semua_keluhan}}</p>
  <br>
  <label class="col-xs-6" for="serah" style="line-height: 20px;">5. Serah Terima perangkat dalam baik dan lengkap </label>
  <p class="col-xs-6"  name="serah-terima" style="line-height: 20px;" value="" >{{$postcheck->serah_terima}}</p>
  <br><br>
  <label class="col-xs-12" for="lain2" style="line-height: 10px;">6. Lain-lain : </label>
  <textarea class="form-control" rows="3" id="lain2" style="font-size: 10px;">{{$postcheck->lainlain}}</textarea>
  </div>
  <p class="col-xs-12" for="dengan" style="font-size: 10px;">Dengan ini saya menyatakan telah menerima perangkat komputer dan <br> kelengkapannya sesuai data diatas dengan lengkap dan baik </p><br><br><br><br>
    <div class="col-xs-3" >
      <div class="col-xs-12" style="font-size: 10px">
      Customer:<br>
      <p style="font-size: 10px" value="">{{ $perusahaan->kontak_person }}</p>
  </div>
  </div>
  <div class="col-xs-3">
      <div class="col-xs-12" style="font-size: 10px">
      Petugas: <br>
      <p style="font-size: 10px" value="" >{{ $activity->nama_admin }}</p>
  </div>
  </div>
 
    </div>
    

    </div>

  </form>

 </div>
 </body>
 </html>