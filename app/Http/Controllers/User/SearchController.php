<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function __invoke()
    {
        $search = $_GET['search'];
        dd($search);
        $users = DB::table('users')->orderBy('id', 'desc')->get();
//        $users = User::all();
        $genders = User::getGender();
        return view('user.search', compact('users', 'genders'));
    }
}
