<?php

namespace Ayim\Quickadmin;

use Illuminate\Database\Eloquent\Model;

class QuickadminTask extends Model
{
	public function scopeActive($query, $active =true)
	{
		return $query->whereActive($active);
	}
}