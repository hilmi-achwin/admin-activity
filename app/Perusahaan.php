<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    //
    protected $table = 'perusahaan';

    protected $primaryKey = 'id';

    protected $fillable = [
       'nama_perusahaan', 'alamat', 'nomor_telepon', 'fax', 'no_hp', 'email', 'kontak_person', 'npwp', 'edi_number', 'enabler', 'jenis_perusahaan'
    ];

    protected $guarded = [];
}