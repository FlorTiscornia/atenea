<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Grade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // Obtener todas las notas desde la base de datos
        $grades = Grade::all();
        return view('readUserGrade', compact('grades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
/*     public function create($id)
    {
        //
        $grade = new Grade();
        $user = User::find($id);
        return view('createGrade', compact('grade', 'user')); //aquí no va si redirigimos donde queremos no sale
    } */
    public function create($id)
    {
        $user = User::findOrFail($id);
        $subjects = ['Lengua', 'Matemáticas', 'Inglés', 'Geografía', 'Historia'];
        return view('createGrade', compact('user', 'subjects'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $grade = request()->except('_token');
        $user = User::find($id);
        Grade::create($grade);
    
        $trimester = $user->trimester; // Cambia el nombre de la variable a $trimester
        $trimester->idUser = $request->idUser;
        $trimester->trimester = $request->trimester;
        $trimester->subject = $request->subject;
        $trimester->exam = $request->exam;
        $trimester->year = $request->year;
        $trimester->grade = $request->grade;
    
        var_dump($trimester);
    
        return redirect()->route('readUserGrade', $id)->with('success', 'Nota añadida con éxito');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
/*     public function show($id)
    {
        //
    } */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    }
}
