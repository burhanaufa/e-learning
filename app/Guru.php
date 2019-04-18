<?php



namespace App;



use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;



class Guru extends Authenticatable

{

    use Notifiable;

    // protected $guard = 'guru';


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
        return $this->belongsTo('App\Mapel','mapels_id','nama_mapel');
    }
      public function siswa()
     {
          return $this->belongsToMany('App\Siswa','guru_id','siswa_id');
    }
}
