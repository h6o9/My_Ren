<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginTracking extends Model
{
    use HasFactory;

    protected $table = 'login_tracking';
    protected $fillable = [
        'user_id',
        'login_at',
        'logout_at',
    ];
}
