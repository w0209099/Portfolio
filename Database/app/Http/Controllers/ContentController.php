<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\content;
use Auth;
use DB;

class ContentController extends Controller
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
                $contents = content::all();

                //pick view
                return view('content_view.contentIndex', compact('contents'));
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
        $id = Auth::id();
        $permissions_id = DB::table('user_permissions')->where('user_id', $id)->pluck('permissions_id');
        foreach ($permissions_id as $permission)
        {
            if ($permission == "2")
            {
                return view('content_view.contentCreate');
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
//            'contents_name' => 'required',
//            'contents_alias' => 'required',
//            'contents_order' => 'required,',
//            'contents_descript' => 'required',
//        ]);

        $content = content::create([
            "contents_name" => $request['contents_name'],
            "contents_alias" => $request['contents_alias'],
            "contents_order" => $request['contents_order'],
            "contents_descript" => $request['contents_descript'],
            "Created_by" => $user_id,
            "Modifyed_by" => $user_id,
        ]);

        $contents = content::all();
        return view('content_view.contentIndex', compact('contents'));
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
            if ($permission == "2")
            {
                $content = content::find($id);
                return view('content_view.contentEdit', compact('content'));
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

        $content = content::find($id);
        $content ->contents_name = $request['contents_name'];
        $content ->contents_alias = $request['contents_alias'];
        $content ->contents_order = $request['contents_order'];
        $content ->contents_descript = $request['contents_descript'];
        $content ->Modifyed_by = $user_id;
        $content ->save();

        $contents = content::all();
        return view('content_view.contentIndex', compact('contents'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content = content::find($id);
        $content->delete();

        $contents = content::all();
        return view('content_view.contentIndex', compact('contents'));
    }
}
