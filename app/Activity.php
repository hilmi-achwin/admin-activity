<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //
    protected $table = 'activity';

    protected $primaryKey = 'id';

    protected $fillable = [
       'nama_perusahaan','detail_permasalahan', 'tindakan_perbaikan', 'sequence_number', 'nama_admin','status', 
    ];

    protected $guarded = [];
}