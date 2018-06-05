<?php

namespace App\Http\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
	use Notifiable;

    protected $table = 'Students';
    protected $primaryKey="id";

    // protected $guarded=["_token"];

    protected $fillable=[
		"name",
		"f_name",
		"m_name",
		"address",
		"phone",
		"class",
		"roll",
	];

	protected $hidden = [
        'remember_token',
    ];

    public function getAuthPassword () {

	    return $this->id;

	}
}
