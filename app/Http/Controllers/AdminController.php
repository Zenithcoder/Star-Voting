<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contestant;
use App\User;

class AdminController extends Controller
{
    public function Index()
    {
    	
    	return view('admin.create');
    }

    public function create()
    {
    	 
        return view('admin.create');
    }

     public function AllCont1()
    {
         $conts= Contestant::all();
        return view('admin.all',compact('conts'));
    }

    public function Stat()
    {
        $conts= Contestant::all();
         $contes= Contestant::with('user')->orderBy('id')->get();

        return view('admin.votingstat',compact('conts','contes'));
    }

    public function AllCont()
    {
         $conts= Contestant::all();
        return view('admin.all',compact('conts'));
    }
 

 public function EditRole($id)
    {
         $eroles = jd::find($id);
        return view('admin.editrole',compact('eroles'));
    }

     public function  DeleteJd(Request $reqeust, $id)
    {
        $jobrole =jd::find($id);
        
        $jobrole->delete();

        return back();
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'role'=>'required',
            'company'=> 'required',
            'resp'=>'required',
            'qual'=>'required',
            'deadline'=>'required',
            'sector'=>'required',
            'skill'=>'required'
            ]);

        jd::find($id)->update($request->all());
        return redirect()->route('admin.job')
                        ->with('message','Item updated successfully');
    }


    public function storeC(Request $request)
    {
          $this->validate($request,[
            'name'=>'required',
            'description'=> 'required',
            'image'=>'required'             
            ]);
            
            Contestant::create($request->all());

         return Redirect()->route('admin.create')->with('message', 'A Contestant has been created successfully');
    }
}
