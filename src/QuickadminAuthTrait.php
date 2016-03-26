<?php

namespace Ayim\Quickadmin;

use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

trait QuickadminAuthTrait
{
    use AuthenticatesAndRegistersUsers;

    public function getLogin()
    {
        return view(quickadmin::auth.login);
    }
}
