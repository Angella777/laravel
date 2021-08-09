<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addStudentmodel extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = [
        'firstname', 
            'lastname', 
            'username', 
            'user_type', 
            'gender', 
            'address', 
            'subject',
            'email',
            'telephone',
            
    ];
}
