<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Precheck extends Model
{
    //
    protected $table = 'pre-check';

    protected $primaryKey = 'id';

    protected $fillable = [
       'fisik', 'id_activity', 'os', 'modul_terpasang', 'modem', 'accessories', 'num_dial_iplus', 'ip_extreme', 'directory_modul', 'lainlain'
    ];

    protected $guarded = [];
}