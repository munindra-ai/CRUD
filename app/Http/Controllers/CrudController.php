<?php

namespace App\Http\Controllers;

use App\Models\crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
 
    public function index()
    {
        //
    }


    public function create()
    {
         return view('create');
    }

  
    public function store(Request $request)
    {
        // return $request->input('name');
      
        $res=new crud();
        $res->name=$request->name;
        $res->save();
        $request->session()->flash('msg','Data Added');
        return redirect('show');
    }

 
    public function show(crud $crud)
    {
        $data = crud::all();
        return view('show',['data'=>$data ]);
    }
    
    
    public function edit(crud $crud,$id)
    {
                return view('edit')->with('CrudArr',crud::find($id));
    }


    public function update(Request $request, crud $crud)
    {
        // print_r($request->input());
        $res=crud::find($request->id);
        $res->name=$request->input('name');
        $res->save();

        $request->session()->flash('msg','Data Updated');
        return redirect('show');
    }

  
    public function destroy(crud $crud,$id)
    {
        crud::destroy(array('id',$id));
        return redirect('show');
    }
}
