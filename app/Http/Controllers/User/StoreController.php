<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Models\User;
use Carbon\Carbon;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['date_of_birth'] = Carbon::parse($data['date_of_birth'])->diff(\Carbon\Carbon::now())->format('%y');
        User::firstOrCreate($data);

        return redirect()->route('user.index');
    }
}
