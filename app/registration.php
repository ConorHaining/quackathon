<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registration extends Model
{
    public $table = 'registration';
 
	public $fillable = ['forename','surname','email', 'university', 'tshirt', 'lunch', 'dinner', 'breakfast', 'dietary'];
}
