<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AraclarModel extends Model
{
    use HasFactory;
    protected $table="araclar";
    protected $fillable=["plaka","marka","model","modelyili","yakittipi","km","created_at","updated_at"];
    protected $guarded=[];

    
}
