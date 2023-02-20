<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Grade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function redirectUsers(){
        //si eres profesor, llamas al index; si eres alumno, llamas al show
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
        //
        $users = User::where('isTeacher','=', false)->get();
        return view('home', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = new User();
        return view ('createUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user = request()->except('_token');
        User::create($user);
        return redirect()->route('home')
            ->with('success', 'Estudiante creado con éxito.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user = User::find($id);
        $grades = $user->grades;
        
        $trimesterGrades = [];
        foreach ($grades as $grade) {
            $trimesterGrades[$grade->trimester][$grade->subject][] = $grade->grade;
        }
        return view ('readUserGrade', compact('user','grades', 'trimesterGrades'));
    }



    /**
     * Show the form for editing the specified resource.
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
     * Update the specified resource in storage.
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
     * Remove the specified resource from storage.
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
