<?php

 

namespace App;

 

use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;

 

class Guru extends Authenticatable

{

    use Notifiable;

 

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    protected $fillable = [

        'nama_guru', 'nip', 'password',

    ];

 

    /**

     * The attributes that should be hidden for arrays.

     *

     * @var array

     */

    protected $hidden = [

        'password', 'remember_token',

    ];


    public function mapel()
    {
        return $this->hasOne('App\Mapel','foreign_key');
    }
    //  public function siswa()
    // {
    //      return $this->hasMany('App\Siswa','foreign_key');
    // }
}
