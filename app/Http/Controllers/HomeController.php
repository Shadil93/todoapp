<?php

namespace App\Http\Controllers;

use App\Models\Todoapp;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index(){
        return view('layout.index');
    }
    public function create(){
        return view('create');
    }
    public function do_register(Request $request){
        $request->validate([
         
          'task'=>'required',
          'date'=>'required',
          'status'=>'required',
        ]);
        Todoapp::create([
           'task'=>$request->task,
           'date'=>$request->date,
           'status'=>$request->status,

        ]);
        return redirect()->route("view")->with('success',"registerd successfully");
    }
    public function view(Request $request){
        $data = Todoapp::all();
        $ischecked = $request->has('mark');
        return view('view',compact('data','ischecked'));
    }
    public function show($id){
            $data =Todoapp::find($id);
            return view('show',compact('data'));
    }
    // public function update(Request $request,$id){
    //     $dd =Todoapp::find($id);
    //     $dd->update([
    //         'task'=>$request->task,
    //         'date'=>$request->date,
    //         'status'=>$request->status,
    //     ]);
    // }


    
    public  function delete($id){
            Todoapp::find($id)->delete();

            return redirect()->route('view')->with('success',"delete successfulyy");
    }

    public function update($id)
    {
        
  
    DB::table('todoapps')->where('id',$id)->update(['status'=>'completed']);
    return redirect()->route('view');
    }
}