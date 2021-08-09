<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userprofile extends Model
{
    use HasFactory;
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
        'mark1',
        'mark2',
        'mark3',
        'mark4',
        'status',
        'avg'
    ];
}
