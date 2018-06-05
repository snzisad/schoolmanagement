<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
	protected $table = 'catagories';
    protected $primaryKey="id";

    protected $fillable=[
		"catagory",
	];
}
