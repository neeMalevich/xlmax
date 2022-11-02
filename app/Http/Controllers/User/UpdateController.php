<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User;
use Carbon\Carbon;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, User $user)
    {
        $data = $request->validated();
        $genders = User::getGender();
        $data['date_of_birth'] = Carbon::parse($data['date_of_birth'])->diff(\Carbon\Carbon::now())->format('%y');
        User::updated($data);

        return view('user.show', compact('user', 'genders'));
    }
}
