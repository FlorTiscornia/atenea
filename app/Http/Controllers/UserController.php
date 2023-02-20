<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     *
     * @return \Illuminate\Http\Response
     */

    public function redirectUsers(){
        $user = Auth::User();
        if ($user->isTeacher){
            return redirect()->route('home');  
        }
        if (!$user->isTeacher){
            return redirect()->route('readUserGrade',$user->id);  
        }   
    }

    public function index()
    {
        $users = User::where('isTeacher','=', false)->get();
        return view('home', compact('users'));
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('createUser');
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user = request()->except('_token');
        User::create($user);
        return redirect()->route('home');
    }

    /**
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user = User::find($id);

        return view ('readUserGrade', compact('user'));
    }

    /**
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $users=User::find($id);
        return view ('editUser', compact('users'));
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $users = request()->except('_token','_method');
        User:: where('id', '=', $id)->update($users);
        return redirect()->route('home');
    }

    /**
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        User::destroy($id);

        return redirect()->route('home');
    }
}
