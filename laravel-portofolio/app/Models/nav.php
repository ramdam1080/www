<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nav extends Model
{
    use HasFactory;
    protected $table="navs";
    protected $fillable =["href","class","lien","span"];
}
