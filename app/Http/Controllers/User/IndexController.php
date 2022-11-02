<?php

namespace App\Http\Controllers\User;

use App\Filters\UserFilter;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function __invoke(UserFilter $request)
    {
        /*
         filter и getGender берёться из модели User
        Реализация фильтра происходит в папке App/Filters
         */

//        $users = DB::table('users')->orderBy('id', 'desc')->get();
        $users = User::filter($request)->get();
//        $users = User::all();
        $genders = User::getGender();
        return view('user.index', compact('users', 'genders'));
    }
}
