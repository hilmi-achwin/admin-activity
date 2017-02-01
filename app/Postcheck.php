<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postcheck extends Model
{
    //
    protected $table = 'post-check';

    protected $primaryKey = 'id';

    protected $fillable = [
       'id_activity', 'pengembalian_fungsi_awal', 'fungsi_model_edii', 'fungsi_pembentukan_edifact', 'fungsi_komunikasi', 'penyelesaian_semua_keluhan', 'serah_terima', 'lainlain'
    ];

    protected $guarded = [];
}