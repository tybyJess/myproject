<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employees;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = employees::where('status','ACTIVE')->get();
        return view('Home_mod.home')->with("employees", $employees);
        // $employees = employees::all();
        // return view('Home_mod.home')->with("employees", $employees);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Home_mod.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $FirstName = $request->input('FirstName');
        $LastName = $request->input('LastName');
        $Gender = $request->input('Gender');
        $Birthday = $request->input('Birthday');
        $Position = $request->input('Position');

        $employees = new employees;

        $employees->FirstName = $FirstName;
        $employees->LastName = $LastName;
        $employees->Gender = $Gender;
        $employees->Birthday = $Birthday;
        $employees->Position = $Position;

        $employees->save();
        return redirect('/Greet');
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
        $employees = employees::where('id', $id)->first();
       return view('Home_mod.edit')->with("employees", $employees);
       // return view('Home_mod.edit');
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
        $FirstName = $request->input('FirstName');
        $LastName = $request->input('LastName');
        $Gender = $request->input('Gender');
        $Birthday = $request->input('Birthday');
        $Position = $request->input('Position');

        $employees= employees::where('id', $id)->first();

        $employees->FirstName = $FirstName;
        $employees->LastName = $LastName;
        $employees->Gender = $Gender;
        $employees->Birthday = $Birthday;
        $employees->Position = $Position;

        $employees->save();
        return redirect('/Home');
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
