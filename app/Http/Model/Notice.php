<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{

    protected $table = 'notices';
    protected $primaryKey="id";

    protected $guarded=["_token"];
}
