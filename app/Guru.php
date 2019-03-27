<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table='gurus';
    protected $fillable= [
        'nama_guru','nip','pass'
    ];
    public function mapel()
    {
        return $this->hasOne('App\Mapel');
    }
}
