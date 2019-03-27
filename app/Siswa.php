<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table='siswas';
    protected $fillable= [
        'nama_siswa','nis','pass'
    ];

    public function mapel()
    {
        return $this->hasMany('App\Mapel');
    }
}
