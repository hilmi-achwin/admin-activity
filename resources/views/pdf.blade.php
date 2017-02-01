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
    <img src="https://i.imgbox.com/KeEIS0FT.png" alt="about-profil" width="750" height="70">
    <p class="col-xs-8" style="background: #ffffff; padding: 10px; margin: 0; text-align: center; line-height: 13px; color: black; font-size: 13px">Activity Report</p><br><br><br>
  <div class="row">
  <div class="col-xs-4">
     <label class ="col-xs-4" for="seq" style="font-size: 10px;">Sequence No. :</label>
       <p class="col-xs-8" value="seq" name="seq" >...............</p><br><br>
        <label class ="col-xs-4" for="date" style="font-size: 10px;">Tanggal (dd/mm/yy) :</label>
       <p class="col-xs-8" value="date" name="date" >...............</p><br><br>
       <label class ="col-xs-4" for="arriv" style="font-size: 10px;">Waktu Kedatangan:</label>
       <p class="col-xs-8" value="arriv" name="created_at" >.............</p>
     
  </div>
  <div class="col-xs-4">
     <label class ="col-xs-4" for="start" style="font-size: 10px;">Waktu Mulai :</label>
       <p class="col-xs-8" value="start" name="created_at" >...............</p><br><br>
        <label class ="col-xs-4" for="finish" style="font-size: 10px;">Waktu Selesai :</label>
       <p class="col-xs-8" value="finish" name="updated_at" >...............</p><br><br>
       <label class ="col-xs-4" for="place" style="font-size: 10px;">Place of Work:</label>
       <p class="col-xs-8" value="place" name="place" >EDII Site</p>
     
  </div>
  </div>

  <form class="form-horizontal">
  <div class="row">
  <div class="col-xs-8">
  <div style="border: solid 1px #000000; background: #ffffff; padding: 10px; margin: 0; text-align: justify; line-height: 10px; color: black; font-size: 10px">
  <label class="col-xs-8" for="name">Identitas Perusahaan :</label><br>
        <label class="col-xs-4" for="name"></label><br>
          
           <label class="col-xs-2" for="nama_perusahaan">Nama Perusahaan:</label>
            <input type="text" class="col-xs-8" id="nama_perusahaan" name="nama_perusahaan"><br><br><br>
            <label class="col-xs-2" for="addr">Alamat:</label>
            <input type="text" class="col-xs-8" id="addr" name="alamat"><br><br><br>
            <label class="col-xs-2" for="tlp">No. Telepon:</label>
            <input type="text" class="col-xs-8" id="tlp" name="nomor_telepon"><br><br><br>
            <label class="col-xs-2" for="hp">HP:</label>
            <input type="text" class="col-xs-8" id="hp" name="no_hp"><br><br><br>
            <label class="col-xs-2" for="fax">Fax:</label>
            <input type="text" class="col-xs-8" id="fax" name="fax" ><br><br><br>
        
            <label class="col-xs-2" for="mail">e-mail:</label>
            <input type="email" class="col-xs-8" id="mail" name="e-mail"><br><br><br>
      
            <label class="col-xs-2" for="cp">Kontak Person:</label>
            <input type="text" class="col-xs-8" id="cp" name="kontak_person"><br><br><br>
       
            <label class="col-xs-2" for="npwp">NPWP:</label>
            <input type="text" class="col-xs-8" id="npwp" name="npwp"><br><br><br>
        
        
            <label class="col-xs-2" for="edi">Edi Number:</label>
            <input type="text" class="col-xs-8" id="edi" name="edi_number"><br><br><br>
        
            <label class="col-xs-2" for="ena">Enabler:</label>
            <input type="text" class="col-xs-8" id="ena" name="ena"><br><br><br>
            <label class="col-xs-2" for="jenis">Jenis Perusahaan:</label>
            <input type="text" class="col-xs-8" id="jenis" name="jenis"><br><br>
  </div>
  </div>
  </div>
  </form>
  <br> 
  <form class="form-horizontal">
  <div class="row">
  <div class="col-xs-4">
  <label class="col-xs-8" style="font-size: 10px;" for="detail">Detail Permasalahan :</label>
  <textarea class="form-control" rows="3" id="detail"></textarea>
  </div>
  <div class="col-xs-4">
   <label class="col-xs-8" style="font-size: 10px;" for="tindakan">Tindakan Perbaikan :</label>
   <textarea class="form-control" rows="3" id="tindakan"></textarea>
  </div>
  </div>
  </form>
  <form class="form-horizontal">
  <div class="row">
  <div class="col-xs-4">
  <div style="background: #ffffff; padding: 10px; margin: 0; text-align: justify; line-height: 23px; color: black; font-size: 10px">
  <label class="col-xs-8" for="awal" style="line-height: 5px;">Cek Awal (Pre-Check) </label><br>
  <label class="col-xs-8" for="fisik" style="line-height: 5px;">A. Fisik </label>
  <textarea class="form-control" rows="2" id="fisik"></textarea>
  <label class="col-xs-8" for="komponen">B. Komponen </label>
  <label class="col-xs-8" for="os" style="line-height: 5px;">1. Operating Sistem (OS) : </label>
  <p class="col-xs-4" value="os" name="os" style="line-height: 5px;">...............</p>
  <br>
  <label class="col-xs-8" for="modul_terpasang" style="line-height: 5px;">2. Modul Terpasang : </label>
  <p class="col-xs-4" value="modul_terpasang" name="modul_terpasang" style="line-height: 5px;">...............</p>
  <br>
  <label class="col-xs-8" for="modem" style="line-height: 5px;">3. Modem : </label>
  <p class="col-xs-4" value="modem" name="modem" style="line-height: 5px;">...............</p>
  <br>
  <label class="col-xs-8" for="acc" style="line-height: 5px;">4. Accessories : </label>
  <p class="col-xs-4" value="acc" name="acc" style="line-height: 5px;"  >...............</p>
  <br>
  <label class="col-xs-8" for="set" style="line-height: 5px;">5. Setting Komputer </label>
  <p class="col-xs-4" value="set" name="set" style="line-height: 5px;">.               </p>
  <br>
  <label class="col-xs-8" for="dial" style="line-height: 5px;">a. No. Dial IPLUS : </label>
  <p class="col-xs-4" value="dial" name="dial" style="line-height: 5px;"  >...............</p>
  <br>
  <label class="col-xs-8" for="ipex" style="line-height: 5px;">b. IP EXTREME: </label>
  <p class="col-xs-4" value="ipex" name="ipex" style="line-height: 5px;"  >...............</p>
  <br>
  <label class="col-xs-8" for="direc" style="line-height: 5px;">c. Directori Modul : </label>
  <p class="col-xs-4" value="direc" name="direc" style="line-height: 5px;"  >...............</p>
  <br>
  <label class="col-xs-8" for="lain" style="line-height: 5px;">d. Lain-lain : </label>
  <textarea class="form-control" rows="2" id="lain"></textarea>
    </div>
  </div>
  <div class="col-xs-4">
  <div style="background: #ffffff; padding: 10px; margin: 0; text-align: justify; line-height: 23px; color: black; font-size: 10px">
   <label class="col-xs-8" for="akhir" style="line-height: 5px;">Cek Akhir (Post-Check) </label><br>
  <label class="col-xs-8" for="fisik2" style="line-height: 5px;">A. Fisik </label><br>
  <label class="col-xs-8" for="1" style="line-height: 5px;">1. Mengembalikan ke setting awal </label>
  <p class="col-xs-4" value="1" name="1" style="line-height: 5px;" >...............</p>
  <br>
  <label class="col-xs-8" for="non" style="line-height: 5px;">B. Non Fisik </label><br>
  <label class="col-xs-8" for="mod" style="line-height: 5px;">1. Fungsi Modul EDII : </label>
  <p class="col-xs-4" value="mod" name="mod" style="line-height: 5px;" >...............</p>
  <br>
  <label class="col-xs-8" for="edifact" style="line-height: 10px;">2. Fungsi Pembentukan EDIFACT (Harus bisa) : </label>
  <p class="col-xs-4" value="edifact" name="edifact" style="line-height: 10px;" >...............</p>
  <br>
  <label class="col-xs-8" for="komunikasi" style="line-height: 5px;">3. Fungsi Komunikasi : </label>
  <p class="col-xs-4" value="komunikasi" name="komunikasi" style="line-height: 5px;" >...............</p>
  <br>
  <label class="col-xs-8" for="keluhan" style="line-height: 5px;">4. Penyelesaian Semua Keluhan : </label>
  <p class="col-xs-4" value="keluhan" name="keluhan" style="line-height: 5px;"  >...............</p>
  <br>
  <label class="col-xs-8" for="serah" style="line-height: 10px;">5. Serah Terima perangkat dalam baik dan lengkap </label>
  <p class="col-xs-4" value="serah" name="serah" style="line-height: 10px;">......................</p>
  <br>
  <label class="col-xs-8" for="lain2" style="line-height: 5px;">6. Lain-lain : </label>
  <textarea class="form-control" rows="2" id="lain2"></textarea>
  </div>
 
    </div>
    <p class="col-xs-8" for="dengan" style="font-size: 10px;">Dengan ini saya menyatakan telah menerima perangkat komputer dan <br> kelengkapannya sesuai data diatas dengan lengkap dan baik </p><br>
    <div class="col-xs-2" >
      <div class="col-xs-8" style="font-size: 10px">
      Customer : <br>
      <p style="font-size: 10px">................</p>
  </div>
  </div>
  <div class="col-xs-2">
      <div class="col-xs-8" style="font-size: 10px">
      Petugas : <br>
      <p style="font-size: 10px">................</p>
  </div>
  </div>

    </div>

  </form>

 </div>
 </body>
 </html>