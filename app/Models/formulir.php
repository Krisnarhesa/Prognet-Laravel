<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formulir extends Model
{
    use HasFactory;
    protected $fillable = [
        'Fullname',
        'NickName',
        'Nim',
        'Faculty',
        'Email',
        'Password',
        'Date_of_birth',
        'Address',
        'Gender',
        'Experience',
        'Describe_yourself',
        'Favorite_color',
        'Skills_range',
        'Profile_picture',
        'Terms',
    ];
}
