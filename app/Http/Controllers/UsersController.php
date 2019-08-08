<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = User::paginate(10);
        return view('admin.users.index', ['list' => $list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'username' => 'required',
            'pwd' => 'required',
            'phone' => 'numeric',
            'email' => '',
            'address' =>'',
            'fullname' => ''
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->pwd = $request->pwd;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->fullname = $request->fullname;


        $user->save();

        return redirect()->route('users.create')->with('success','insert new record success ');
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
        $user = User::find($id);
        echo view('admin.users.edit',compact('user','id'));
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
        $this->validate($request,[
            // 'username' => 'required',
            // 'pwd' => 'required',
            'phone' => 'numeric',
            // 'email' => '',
            'address' =>'',
            'fullname' => ''
        ]);

        $user = User::find($id);
        // $user->username = $request->username;
        // $user->pwd = $request->pwd;
        $user->phone = $request->phone;
        // $user->email = $request->email;
        $user->address = $request->address;
        $user->fullname = $request->fullname;


        $user->save();

        return redirect()->route('users.index')->with('success','update record success ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect(url()->previous())->with('success','Delete success');
    }
}
