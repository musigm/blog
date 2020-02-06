<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Auth;

use DB;

class UserController extends Controller
{
    public function boot()
    {
        dd(Auth::user()->role);
    }

    public function show_table()
    {
        $tables = DB::table('users')->paginate(20);
        return view('/administrative',compact('tables'));
    }



    //判斷使用者權限
    // public function someAction()
    // {
    //     if (Gate::allows('admin')) {
    //         $role =true ;
    //     }
    //     if (Gate::denies('admin')) {
    //         $role = false;
    //     }
    //     return view('/administrative', compact('role'));
    // }

    // 只有系統管理者可以執行
    // public function adminAction()
    // {
    //     $this->authorize('admin');

    //     // ...
    // }
}
