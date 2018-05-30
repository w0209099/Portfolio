<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\page;
use Auth;
use DB;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

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
            if ($permission == "2")
            {
                // talk to model
                $pages = page::all();

                //pick view
                return view('pages_view.pagesIndex', compact('pages'));
            }//end if
        }//end foreach
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = Auth::id();
        $permissions_id = DB::table('user_permissions')->where('user_id', $user_id)->pluck('permissions_id');
        foreach ($permissions_id as $permission)
        {
            if ($permission == "2")
            {
             // talk to model
             $pages = page::all();

              //pick view
              return view('pages_view.pagesCreate', compact('pages'));

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
        $user_id = Auth::id();

//        $this->validate($request, [
//            'Pages_name' => 'required',
//            'Pages_descript' => 'required',
//            'Pages_alias' => 'required',
//        ]);

        $page = page::create([
            "Pages_name" => $request['Pages_name'],
            "Pages_descript" => $request['Pages_descript'],
            "Pages_alias" => $request['Pages_alias'],
            "Created_by" => $user_id,
            "Modifyed_by" => $user_id,
        ]);

        $pages = page::all();
        return view('pages_view.pagesIndex', compact('pages'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $login_id = Auth::id();
        $permissions_id = DB::table('user_permissions')->where('user_id', $login_id)->pluck('permissions_id');
        foreach ($permissions_id as $permission)
        {
            if ($permission == "2")
            {
                $page = page::find($id);
                return view('pages_view.pagesEdit', compact('page'));
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
//            'Pages_name' => 'required',
//            'Pages_descript' => 'required',
//            'Pages_alias' => 'required',
//        ]);

        $page = page::find($id);
        $page ->Pages_name = $request['Pages_name'];
        $page ->Pages_descript = $request['Pages_descript'];
        $page ->Pages_alias = $request['Pages_alias'];
        $page ->Modifyed_by = $user_id;
        $page ->save();

        $pages = page::all();
        return view('pages_view.pagesIndex', compact('pages'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = page::find($id);
        $page->delete();

        $pages = page::all();
        return view('pages_view.pagesIndex', compact('pages'));
    }
}
