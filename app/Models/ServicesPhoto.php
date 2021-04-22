<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ServicesInfo;

class ServicesPhoto extends Model
{
    use HasFactory;
    protected $table = 'services_photo';
    protected $fillable = ['photo'];
    public function serviceInfo(){
        return $this->belongTo(ServicesInfo::class);
    }
}
