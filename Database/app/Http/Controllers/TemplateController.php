<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\template;
use Auth;
use DB;


class TemplateController extends Controller
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
                //return Template::all();

                // talk to model
                $templates = template::all();

                //pick view
                return view('templates_views.templateIndex', compact('templates'));
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
                //return "got here";
                return view('templates_views.templateCreate');
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
//            'Template_name' => 'required',
//            'Template_descript' => 'required',
//            'Template_active' => 'required',
//            'Template_content' => 'required',
//        ]);

        $template = template::create([
            "Template_name" => $request['Template_name'],
            "Template_descript" => $request['Template_descript'],
            "Template_active" => $request['Template_active'],
            "Template_content" => $request['Template_content'],
            "Created_by" => $user_id,
            "Modifyed_by" => $user_id,
            ]);

        $templates = template::all();
        return view('templates_views.templateIndex', compact('templates'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return Template::find($id);

        //$template = template::find($id);
        //return view('templates_views.templateShow', compact('template'));


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
                //return "got here";

                $template = template::find($id);
                return view('templates_views.templateEdit', compact('template'));
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
//            'Template_name' => 'required',
//            'Template_descript' => 'required',
//            'Template_active' => 'required',
//            'Template_content' => 'required',
//        ]);

        $template = template::find($id);
        $template->Template_name = $request['Template_name'];
        $template->Template_descript = $request['Template_descript'];
        $template->Template_content = $request['Template_content'];
        $template->Template_active = $request['Template_active'];
        $template->Modifyed_by = $user_id;
        $template->save();

        $templates = template::all();
        return view('templates_views.templateIndex', compact('templates'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $template = template::find($id);
        $template->delete();

        $templates = template::all();
        return view('templates_views.templateIndex', compact('templates'));
    }
}
