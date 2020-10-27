<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.register');
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

        $validatedData = $request->validate([
            'name'=>'required',
            'last_name'=>'required',
            'father_name'=>'required',
            'm_or_f'=>'required',
            'national_code'=>'required |max:10 |unique:users',
            'phone'=>'required | max: 11',
            'password'=>'required',
        ]);

            $data = new User;
            $data->name = $request['name'];
            $data->last_name = $request['last_name'];
            $data->father_name = $request['father_name'];
            $data->m_or_f = $request['m_or_f'];
            $data->national_code = $request['national_code'];
            $data->phone = $request['phone'];
            $data->email = $request['email'];
            $data->password = $request['password'];

            $data->save();
            return redirect('/login');

//      return  $request->all();
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
