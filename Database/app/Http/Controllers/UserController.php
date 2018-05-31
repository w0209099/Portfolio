<?php

namespace App\Http\Controllers;

use App\user_permissions;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Auth;
use DB;


class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        $id = Auth::id();
        $permissions_id = DB::table('user_permissions')->where('user_id', $id)->pluck('permissions_id');
        foreach ($permissions_id as $permission)
        {
            if ($permission == "1")
            {
                $users = User::all();
                return view('user_view.UsersIndex', compact('users'));
            }
        }
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth::id();
        $permissions_id = DB::table('user_permissions')->where('user_id', $id)->pluck('permissions_id');
        foreach ($permissions_id as $permission)
        {
            if ($permission == "1")
            {
                return view('user_view.UsersCreate');
            }//end if
        }//end foreach
        return view('home');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_logedin_id = Auth::id();
        $hashed_pwd = \Hash::make($request['password']); //Hash::make($request['password']);

        $user = User::create([
            "name" => $request['name'],
            "email" => $request['email'],
            "password" => $hashed_pwd,
            "Created_by" => $user_logedin_id,
            "Modifyed_by" => $user_logedin_id
        ]);



        if ($request['isadmin'] == true)
        {
            $new_user_permission = user_permissions::create([
                "user_id" => $user->id,
                "permissions_id" => '1',
            ]);
        }//end if

        if ($request['isediter'] == true)
        {
            $new_user_permission = user_permissions::create([
                "user_id" => $user->id,
                "permissions_id" => '2',
            ]);
        }//end if

        if ($request['isuser'] == true)
        {
            $new_user_permission = user_permissions::create([
                "user_id" => $user->id,
                "permissions_id" => '3',
            ]);
        }//end if

        $users = User::all();
        return view('user_view.UsersIndex', compact('users'));

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
        $user_id = Auth::id();
        $permissions_id = DB::table('user_permissions')->where('user_id', $user_id)->pluck('permissions_id');
        foreach ($permissions_id as $permission)
        {
            if ($permission == "1")
            {
                $user = User::find($id);
                return view('user_view.UsersEdit', compact('user'));
            }//end if
        }//end foreach
        return view('home');
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
        $user_id = Auth::id();

//        $this->validate($request, [
//            'name' => 'required',
//            'email' => 'required',
//            'password' => 'required',
//        ]);

        $user = User::find($id);
        $user ->name = $request['name'];
        $user ->email = $request['email'];
        $user ->password = $request['password'];
        $user ->Modifyed_by = $user_id;
        $user ->save();

       DB::table('user_permissions')->where('user_id', '==', $id)->delete();

        if ($request['isadmin'] == true)
        {
            $new_user_permission = user_permissions::create([
                "user_id" => $id,
                "permissions_id" => '1',
            ]);
        }//end if

        if ($request['isediter'] == true)
        {
            $new_user_permission = user_permissions::create([
                "user_id" => $id,
                "permissions_id" => '2',
            ]);
        }//end if

        if ($request['isuser'] == true)
        {
            $new_user_permission = user_permissions::create([
                "user_id" => $id,
                "permissions_id" => '3',
            ]);
        }//end if

        $users = User::all();
        return view('user_view.UsersIndex', compact('users'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        DB::table('user_permissions')->where('user_id', '==', $id)->delete();

        $user = User::find($id);
        $user->delete();

        $users = User::all();
        return view('user_view.UsersIndex', compact('users'));
    }
}
