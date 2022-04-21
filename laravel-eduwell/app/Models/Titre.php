<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titre extends Model
{
    use HasFactory;

	protected $fillable = [
		'h1',
		'h2',
	]; // model_anchor

	protected $table = "titres";
}
