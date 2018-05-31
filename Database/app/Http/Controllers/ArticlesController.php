<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\article;
use App\page;
use App\content;
use Auth;
use DB;


class ArticlesController extends Controller
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
                $articles= article::all();

                return view('articles_view.articlesIndex', compact('articles'));
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
            if ($permission == "2")
            {
                $pages_select = array();
                $pages = page::all();
                foreach($pages as $page)
                {
                    $pages_select[$page->id] = $page->Pages_name;
                }
                $contents_select = array();
                $contents = content::all();

                foreach($contents as $content)
                {
                    $contents_select[$content->id] = $content->contents_name;
                }
                return view('articles_view.articlesCreate', compact('pages_select','contents_select'));
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

        $this->validate($request, [
            'Articles_name' => 'required',
            'Articles_descript' => 'required',
            'Articles_content' => 'required',
            'Articles_title' => 'required',
            'Articles_html' => 'required',
            'Articles_All_pages' => 'required',
        ]);

        $article = article::create([
            "Articles_name" => $request['Articles_name'],
            "Articles_descript" => $request['Articles_descript'],
            "Articles_content" => $request['Articles_content'],
            "Articles_title" => $request['Articles_title'],
            "Articles_page" => $request['Articles_page'],
            "Articles_html" => $request['Articles_html'],
            "Articles_CA_ID" => $request['Articles_CA_ID'],
            "Articles_All_pages" => $request['Articles_All_pages'],
            "Created_by" => $user_id,
            "Modifyed_by" => $user_id,
        ]);

        $articles= article::all();
        return view('articles_view.articlesIndex', compact('articles'));
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
                $article= article::find($id);

                $pages_select = array();
                $pages = page::all();

                foreach($pages as $page)
                {
                    $pages_select[$page->id] = $page->Pages_name;
                }

                $contents_select = array();
                $contents = content::all();

                foreach($contents as $content)
                {
                    $contents_select[$content->id] = $content->contents_name;
                }

                return view('articles_view.articlesEdit', compact('article','pages_select','contents_select'));
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
//            'Articles_name' => 'required',
//            'Articles_descript' => 'required',
//            'Articles_content' => 'required',
//            'Articles_title' => 'required',
//            'Articles_html' => 'required',
//            'Articles_All_pages' => 'required',
//        ]);

        $article= article::find($id);
        $article->Articles_name = $request['Articles_name'];
        $article->Articles_descript = $request['Articles_descript'];
        $article->Articles_content = $request['Articles_content'];
        $article->Articles_title = $request['Articles_title'];
        $article->Articles_page = $request['Articles_page'];
        $article->Articles_html = $request['Articles_html'];
        $article->Articles_CA_ID = $request['Articles_CA_ID'];
        $article->Articles_all_pages = $request['Articles_all_pages'];
        $article->Modifyed_by = $user_id;
        $article->save();

        $articles= article::all();
        return view('articles_view.articlesIndex', compact('articles'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = article::find($id);
        $article->delete();

        $articles= article::all();
        return view('articles_view.articlesIndex', compact('articles'));
    }
}
