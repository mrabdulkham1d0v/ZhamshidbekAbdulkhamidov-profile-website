<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ServicesPhoto;

class ServicesInfo extends Model
{
    use HasFactory;
    protected $table = 'services_info';
    protected $fillable = ['name','info','photoId'];
    public function servicePhoto(){
        return $this->hasOne(ServicesPhoto::class);
    }
}
