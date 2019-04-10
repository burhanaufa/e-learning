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
        return $this->belongsTo('App\Mapel','mapels_id');
    }
      public function siswa()
     {
          return $this->belongsToMany('App\Siswa','foreign_key');
    }
}
