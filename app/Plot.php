<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plot extends Model
{
    protected $table = 'pekerjaan';

    protected $fillable = [
        'nama_pekerjaan',
        'satuan_durasi',
        'bobot'
    ];

    public function perencanaan(){
        return $this->hasMany('App\Pekerjaan','pekerjaan_id','id')->where('is_perencanaan',true);
    }

    public function realisasi(){
        return $this->hasMany('App\Pekerjaan','pekerjaan_id','id')->where('is_perencanaan',false);
    }
}
