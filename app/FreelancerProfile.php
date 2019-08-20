<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FreelancerProfile extends Model
{
    protected $table = "freelancers";
	protected $primaryKey = 'id';
	public $timestamps = false;

	const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
}
