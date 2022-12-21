<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        // dd($users);
        // dd($users);
        return view('lte.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lte.user.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => "required|max:20|string",
            'lastName' => "required|max:20|string",
            'email' => "required|max:30|string",
            'phone' => "required|max:20|string",
            'password' => "required|max:20|string",
            'identification' => "required|integer"
        ]);


        $user = User::create([
            'name'=>$request->name,
            'lastName'=>$request->lastName,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'password'=>$request->password,
            'identification'=>$request->identification
        ]);

        if ($user){
            return redirect()->back()->with('success', 'your info has been saved in database');
        }else{
            return redirect()->back()->with('fail', "your info hasn't been saved in database");

        }
        //
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
    public function edit(User $user)

    {

        $user = User::find($user->id);
        // dd($user);
        return view('lte.user.edit',compact('user'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => "required|max:20|string",
            'lastName' => "required|max:20|string",
            'email' => "required|max:30|string",
            'phone' => "required|max:20|string",
            'identification' => "required|max:20|int"
        ]);


        $user = User::create([
            'name'=>$request->name,
            'lastName'=>$request->lastName,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'identification'=>$request->identification
        ]);

        if ($user){
            return redirect()->back()->with('success', 'your info has been saved in database');
        }else{
            return redirect()->back()->with('fail', "your info hasn't been saved in database");

        }
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
