<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class EditController extends Controller
{
    public function __invoke(User $user)
    {
        $genders = User::getGender();
        return view('user.edit', compact('genders', 'user'));
    }
}
