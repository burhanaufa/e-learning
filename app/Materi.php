<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $guarded = [];
    protected $fillable= [
        'nama_materi','konten_materi'
    ];
    public function mapel()
    {
        return $this->belongsTo(Mapel::class,'mapels_id');
    }
    public function pertanyaan()
    {
        return $this->hasMany('App\Pertanyaan');
    }
}
