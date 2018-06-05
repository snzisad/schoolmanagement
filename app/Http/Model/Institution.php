<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
	protected $table = 'insttitution_details';
    protected $primaryKey="id";

    protected $fillable=[
		"Address",
		"Moto",
		"Estd",
		"Eiin",
		"Head",
		"Chairman",
		"Phone",
		"Email",
	];
}
