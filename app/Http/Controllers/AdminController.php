<?php

namespace App\Http\Controllers;
use App\User;
use App\UserData;
use Illuminate\Http\Request;

class AdminController extends Controller
{
        /**
     * Check Authentication here
     *
     * @return if auth then enter here or goto auth root
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /*
     * get Dashboard Here.
     * Dashboard Registration couter here.
     * */

    public function getDashboard()
    {
    //     // $streg = RegistrationData::where('type', '=', 0)->count();
    //     // $jbreg = RegistrationData::where('type', '=', 1)->count();
    //     // $totalinv = RegistrationData::where('invite', '=', '1')->count();
          $user = User::all()->count();
        return view('dashboard.dashboard')
    //         //->withStreg($streg)
    //        // ->withJbreg($jbreg)
    //        // ->withTotalinv($totalinv)
            ->withUser($user);
    }


        /*
     * All User List Show Here.
     * and here we invite Student
     * */
    public function getUserList()
    {
        $userlist = UserData::orderBy('id','DESC')->where('type','=',0)->get();
        return view('dashboard.userlist')->withUsertlist($userlist);
    }



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/dashboard');
    }












}
