<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abcusers extends Model
{
    use HasFactory;
    protected $table="users";
    protected $fillable=["name","email","email_verified_at","password","remember_token","yetki","created_at","updated_at"];
    
}


