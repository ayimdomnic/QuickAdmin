<?php

namespace Ayim\Quickadmin;

use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsersS;
trait AdminAuthTrait
{
	use AuthenticatesAndRegistersUsers;

	public function getLogin()
	{
		return view(quickadmin::auth.login);
	}
	
}