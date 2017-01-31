<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    //
    protected $table = 'perusahaan';

    protected $primaryKey = 'id';

    protected $fillable = [
       
    ];

    protected $guarded = [];
}