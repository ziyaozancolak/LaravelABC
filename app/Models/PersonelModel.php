<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AraclarModel;

class PersonelModel extends Model
{
    use HasFactory;
    protected $table="personeller";
    protected $fillable=["adsoyad","yas","mail","ceptel","personelaraci","created_at","updated_at"];
    protected $guarded=[];

    
    
    public function araclar(){

        return $this->hasOne(AraclarModel::class,'id','personelaraci');

    }
}
