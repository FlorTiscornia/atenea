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
/*     public function store(Request $request, $id)
    {
        //
        //$request->validate([
          //  'idUser' => 'required|exists:users,id',
          //  'subject' => 'required',
          //  'exam' => 'required|numeric|min:1|max:3',
         //   'grade' => 'required|numeric|min:1|max:10'

        //]);

        $grade = request()->except('_token');
        $grade = new Grade();
        $grade->idUser = $request->idUser;
        $grade->subject = $request->subject;
        $grade->exam = $request->exam;
        $grade->grade = $request->grade;
        $grade->save();

        return redirect()->route('readUserGrade', $request->idUser)->with('success', 'Nota añadida con éxito');
    } */
/*     public function store(Request $request, $id)
    {
        $request->validate([
            'idUser' => 'required|exists:users,id',
            'subject' => 'required',
            'exam' => 'required|numeric|min:1|max:3',
            'grade' => 'required|numeric|min:1|max:10'
        ]);
    
        
        $grade = new Grade();
        $grade->idUser = $id; // usar el ID recibido como parámetro
        $grade->subject = $request->subject;
        $grade->exam = $request->exam;
        $grade->grade = $request->grade;
        $grade->save();
    
        return redirect()->route('readUserGrade', $id)->with('success', 'Nota añadida con éxito');
    } */
    public function store(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $grades = $request->input('grades');
        $trimester = $request->input('trimester');
        
        foreach ($grades as $subject => $grade) {
            $newGrade = new Grade();
            $newGrade->idUser = $user->id;
            $newGrade->subject = $subject;
            $newGrade->grade = $grade;
            $newGrade->trimester = $trimester;
            $newGrade->save();
        }
    
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
