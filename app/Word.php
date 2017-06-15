<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $fillable = ['spintax'];

    public function writer()
    {
    	return $this->belongsTo(User::class);
    }
}
