<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $fillable= [
        'nama_mapel'
    ];
    public function materi()
    {
        return $this->hasMany('App\Materi');
    }
    public function guru()
    {
        return $this->belongsTo('App\Guru');
    }
    public function siswa()
    {
        return $this->belongsTo('App\Siswa');
    }
}
