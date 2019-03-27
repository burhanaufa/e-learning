<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $fillable= [
        'nama_materi','konten_materi'
    ];
    public function mapel()
    {
        return $this->belongsTo('App\Mapel');
    }
    public function Kuis()
    {
        return $this->hasOne('App\Kuis');
    }
}
