<?php

namespace FoxLaby\Mudir\Traits;

use Illuminate\Support\Facades\Auth;

use FoxLaby\Mudir\App\Models\Admin;

trait UserTrait
{
    public function isAdmin()
    {
        $is_admin = Admin::where('user_id', '=', Auth::id())->exists();
        return $is_admin;
    }
}