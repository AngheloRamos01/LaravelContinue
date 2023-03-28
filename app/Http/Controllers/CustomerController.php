<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $data = Customer::all();
        return view('customer.index',['customers'=>$data]);
    } 

    public function delete($id){
        $delete =DB::table("customers")
        ->where("id", "=", $id)
        ->delete();
        
        return redirect('/')->with('success','Customer Data Deleted Successfully');
    }
    
    public function addUser(){
        return view('customer.addCustomerUser');
    }

    public function save(Request $req){
        $validated=$req->validate([
            'lastName'=>'required',
            'firstName'=>'required',
            'email'=>'required',
            'contactNumber'=>'required',
            'address'=>'required'
        ]);

        $customer=Customer::create($validated);

        return redirect("/");
    }

    public function editUser($id){
        $data=Customer::findorFail($id);
        return view('customer.editCustomerAcc',['customers'=>$data]);
    }

    public function updateUser(Request $request)
    {   
       //dd($request);
       $validated=$request->validate([
        'lastName'=>['required'],
        'firstName'=>['required'],
        'email'=>['required'],
        'contactNumber'=>['required'],
        'address'=>['required']
    ]);

    $data = Customer::find($request->id);

    $data->lastName=$request->lastName;
    $data->firstName=$request->firstName;
    $data->email=$request->email;
    $data->contactNumber=$request->contactNumber;
    $data->address=$request->address;

    $data->save();
    return redirect("/")->with('success','Customer Data Edited Successfully');
        
    }
    
}