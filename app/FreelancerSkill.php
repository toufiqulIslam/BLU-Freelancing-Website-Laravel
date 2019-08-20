<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FreelancerSkill extends Model
{
    protected $table = "skills";
	protected $primaryKey = 'id';
	public $timestamps = false;

	const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
}
