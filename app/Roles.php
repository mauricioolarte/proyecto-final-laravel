<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
		//
		use HasFactory;
		protected $table = "roles";

		protected $fillable = [ 'id', 'nombre', 'created_at', 'updated_at' ];
}
