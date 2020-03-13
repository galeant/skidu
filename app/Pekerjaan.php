<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    protected $table = 'eksekusi';
    protected $fillable = [
        'pekerjaan_id',
        'bobot_eksekusi',
        'urutan_durasi',
        'is_perencanaan'
    ];
    protected $casts = [
        'bobot_eksekusi' => 'double'
    ];
}
