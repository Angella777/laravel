<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use IIluminate\Database\Eloquent\Model;
class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table='users';
    protected $primaryKey='id';

    public function marks(){
        return $this->hasMany(mark::class);
    }
    public $timestamps=false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'file_path',
        'First_Name', 
        'Last_Name', 
        'username', 
        'user_type', 
        'gender', 
        'Date_of_Birth', 
        'address', 
        'subject',
        'email',
        'telephone',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    public function userRole()
    {
        return $this->belongsTo('Spatie\Permission\Models\Role','id','id');
    }
   
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
    
}

