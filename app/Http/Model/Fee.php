<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
	protected $table = 'fees';
    protected $primaryKey="id";

    protected $guarded=[
		"_token",
	];
}
