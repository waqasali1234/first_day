<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        return view('company');
    }
    public function index1(){
        return view('employee');
    }
    public function submit(Request $request){
        $data=new Company();
        $data->name=$request->name;
        $data->product=$request->product;
        $data->item=$request->item;
        $data->pakages=$request->pakages;
//        dd($data);
        $data->save();
        return back();
    }
    public function submit1(Request $request){
        $data=new Employee();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->pay=$request->pay;
//        dd($data);
        $data->save();
        return back();
    }
    public function joing(){
//        $data=DB::select('select * from companies inner join employees where companies.id=employees.id');
        $data= Company::with('ali')->get();
//     dd($data);
     return view('ali',compact('data'));

    }
}
