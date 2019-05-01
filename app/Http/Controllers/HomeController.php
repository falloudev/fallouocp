<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Student;
use App\Http\Controllers\DateTime;
use PDF;



class HomeController extends Controller

{
    
    /**

     * Display a listing of the resource.
    

     *

     * @return \Illuminate\Http\Response

     */

    public function generatePDF()

    {
        $timestamp = time(); 

        $students = Student::orderBy('id')->get();

        $data = ['title' => 'Welcome to HDTuto.com'];

        $pdf = PDF::loadView('myPDF', $data);


        return $pdf->download('Contract.pdf');

    }
   

}