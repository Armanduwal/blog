<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        return view('Welcome');
    }

    public function about(){
        return view('about');
}

    public function home(){
        return view('home');
    }
    public function  insert()
    {
        $data['name']='Manish duwal';
        $data['email']='manishduwal123@gmail.com';
        $data['password']='Manchesterunited123';
        $data['utype']='admin';

        //if (DB::table('students')->insert($data)){
           // echo 'yes';
          //  {
        //echo 'no';

        $users= DB::table('students')->get();
        dd($users);
            }
            }



    //}

//}
