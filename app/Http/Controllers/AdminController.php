<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Admin\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'admin/admin_my_profile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function admin_login()
    {
        return view('admin/admin_login');
    }
    protected function guard()
    {
        return \Auth::guard('admin'); //管理者認証のguardを指定
    }
    //public function logout(Request $request)
    //{
    //    $this-&gt;guard()-&gt;logout();
    //
    //    $request-&gt;session()-&gt;invalidate();
    //
    //  return $this-&gt;loggedOut($request) ?: redirect('/admin/');  // ログアウト後のリダイレクト先
    //}
}
