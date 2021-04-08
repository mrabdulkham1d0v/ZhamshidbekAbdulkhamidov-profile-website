<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    protected $table = "user-info";
    protected $fillable = ['Name', 'Surname','Email', 'Photo'];
    use HasFactory;
}
