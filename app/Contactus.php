<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
     protected $table = 'contactuses';
 
	public $fillable = ['name','email','phone','message'];
}
