<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function Psy\debug;
use PDF;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    $students = Student::orderBy('id')->get();
        return view('students.index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = request('students');
        return view('students.create',['students' => $students]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	    //$data = $request->all();
        //Student::create($data);
       
    
        if($file = $request->file('file')){

            $name = $file[0]->getClientOriginalName();
            if($file[0]->move('images', $name)){
                $students = new Student();
                $students->prenom = $request->prenom;
                $students->nom = $request->nom;
                $students->age = $request->age;
                $students->email = $request->email;
                $students->specialite = $request->specialite;
                $students->mobile = $request->mobile;
                $students->region = $request->region;
                $students->ville = $request->ville;
                $students->diplome = $request->diplome;
                $students->diplomem = $request->diplomem;
                $students->file = implode([$name]);
                //$students->file = $name;
                $students->save();
                   Session::flash('message', ' added successfully');
                  return redirect('/students');

            };
        }
        
      /*  Student::create([
            'prenom' => $request->prenom,
             'nom'  => $request->nom,
              'age'  => $request->age,
               'email'  => $request->email,
               'specialite'  => $request->specialite,
               'mobile'  => $request->mobile,
               'region'  => $request->region,
               'ville'  => $request->ville,
               'diplome'  => $request->diplome,
               'diplomem'  => $request->diplomem, 
            'file'  => implode(",",$request->file),

        ]);  */

	    //Session::flash('message', $data['prenom'] . ' added successfully');
	    //return redirect('/students');
    }

    public function participant($id)
    {
        //
        $student = Student::find($id);
        
        $students = Student::orderBy('id')->get();
        return view('students.show', compact('students','student'));
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$student = Student::find($id);
        return view('students/edit', ['student' => $student]);
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
        $student = Student::find($id);
        $data = $request->all();
        $student->update($data);

	    Session::flash('message', $student['prenom'] . ' updated successfully');
        return view('students/edit', ['student' => $student]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	    $student = Student::find($id);
	    $student->destroy($id);

	    Session::flash('message', $student['prenom'] . ' deleted successfully');
	    return redirect('/students');
    }

}
