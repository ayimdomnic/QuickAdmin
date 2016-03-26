<?php 

namespace Ayim\Quickadmin;

use Illuminate\Foundation\Auth\ResetPasswords;

trait QuickadminPasswordTrait
{
	use ResetPasswords;

	public function getEmail()
	{
		return view('quickadmin::auth.password'.['ctrl_name'=>'\\'.static::class
			]);
	}

	public function getRest($token =null)
	{
		if (is_null($token)){
			throw new Exception NotFoundHttpException;
			
		}

		return view ('quickadmin::auth.reset',['ctrl_name'=>'\\'.ststic::class])->with('token', $token);
	}
} 