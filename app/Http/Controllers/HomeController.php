<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
/*use App\Http\Controllers\AdminPanel\CategoryController as AdminHomeController;*/

class HomeController extends Controller
{

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function Index()
    {
        return view('home.index');
    }
    public function test($id, $name)
    {
        $data['id'] = $id;
        $data['name'] = $name;
        return view('home.test', $data);
        //return view('home.test',['id' => $id,'name'=>$name]);

        /* echo "id Number :",$id;
        echo "<br>Name :", $name;

        for($i=1;$i<=$id;$i++){
            echo "<br> $i - $name";
        }*/
    }
    public function login()
    {       return view('admin_login');
    }
    public function logincheck(Request $request)
    {


        if ($request->isMethod('post')) {
            $credentials = $request->only('email','password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended(('admin'));
            }
            return back()->withErrors([

                'email' => 'The provided credentials do not match our records.',
            ]);
        } else {
            return view('admin_login');
        }
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
