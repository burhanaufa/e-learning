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
        return $this->hasMany('App\Materi','foreign_key');
    }
    public function guru()
    {
        return $this->hasMany('App\Guru','foreign_key');
    }
    public function siswa()
    {
        return $this->belongsToMany('App\Siswa','siswa_id')
        ->withPivot(['nama_siswa']);
    }
}
