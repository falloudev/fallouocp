<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	protected $fillable = [
		'prenom', 'nom', 'age', 'email','specialite','mobile','region','ville','diplome','diplomem','file' 
	];

}
