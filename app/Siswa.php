<?php



namespace App;



use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;



class Siswa extends Authenticatable

{

    use Notifiable;



    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    protected $fillable = [

        'nama_siswa', 'nis', 'password',

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
         return $this->belongsToMany('App\Mapel','mapel_id')
         ->withPivot(['nama_mapel']);
     }

    public function guru()
    {
        return $this->belongsToMany('App\Guru','guru_siswa');
    }

}
