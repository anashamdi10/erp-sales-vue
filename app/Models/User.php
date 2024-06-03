<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = [
        'id', 'name', 'email', 'email_verified_at', 'password', 'two_factor_secret', 
        'two_factor_recovery_codes', 'two_factor_confirmed_at', 'remember_token', 'created_at',
        'updated_at'
    ];
}
