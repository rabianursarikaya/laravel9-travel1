<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {

        return view('home.index');
    }
    public function aboutus()
    {
        return view( 'home.about');

    }
public function login()

{
return view( 'admin.login');
}

    public function test()
    {
        return view('home.test');
    }

    public function param($id)
    {
        //echo "Parameter 1:",$id;
        //echo "<br>Parameter :",$number;
       // echo "<br>Sum Parameters :",$id+$number;
        return view('home.test2',
        [
        'id'=>$id]);
    }
    public function save(Request $request)
    {
        //echo "Save Function<br>";
        //echo "First Name :",$_REQUEST["fname"];
        //echo "Last Name :",$_REQUEST["lname"];
        return view('home.test');
    }
}
