<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karir extends Model
{
    use HasFactory;
    protected $fillable = ['ID_KARIR', "TITLE", "NAME","IMG_PATH", "DESC", "LOCATION", "END_DATE" ];
    protected $primaryKey = 'ID_KARIR';
}
