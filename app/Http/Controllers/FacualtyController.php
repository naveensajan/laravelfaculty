<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FacultyModel;

class FacualtyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $faculty=FacultyModel::all();

         return view('faculties',compact('faculty'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $getFname=request('fname');

        $faculty=FacultyModel::query()
        ->where('fname','LIKE',"%{$getFname}%")->get();

        return view('faculties',compact('faculty'));
    }

    public function store(Request $request)
    {
        $getname=request('fname');
        $getdes=request('fdes');
        $getclg=request('fclg');
        $getcon=request('fcon');

        echo $getname;
        echo $getdes;
        echo $getclg;
        echo $getcon;
         
        $faculty=new FacultyModel();
        $faculty->fname=$getname;
        $faculty->fdes=$getdes;
        $faculty->fclg=$getclg;
        $faculty->fcon=$getcon;

        $faculty->save();

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
        $faculty=FacultyModel::find($id);
        return view('edit',compact('faculty'));
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
        $faculty=FacultyModel::find($id);

        $getname=request('fname');
        $getdes=request('fdes');
        $getclg=request('fclg');
        $getcon=request('fcon');

        echo $getname;
        echo $getdes;
        echo $getclg;
        echo $getcon;
         
      
        $faculty->fname=$getname;
        $faculty->fdes=$getdes;
        $faculty->fclg=$getclg;
        $faculty->fcon=$getcon;

        $faculty->save();
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
