<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Role;

class EmployeeController extends Controller
{
    public function __construct()
    { // chec user login or not
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['employee'] = Employee::all();
        return view('pages.employee.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $arr['employee'] = Role::all();
        // return view('pages.employee.create')->with($arr);
        return view('pages.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Employee $employee)
    {
        //  echo $request->emp_image->getClientOriginalName();die();

         if($request->emp_image->getClientOriginalName()){
             $ext =  $request->emp_image->getClientOriginalExtension();
             $file = date('YmdHis').rand(1,99999).'.'.$ext;
             $request->emp_image->storeAs('public/employee',$file);
        }
        else
        {
            $file = '';
        }

        if($request->id_front->getClientOriginalName()){
            $ext =  $request->id_front->getClientOriginalExtension();
            $file = date('YmdHis').rand(1,99999).'.'.$ext;
            $request->id_front->storeAs('public/employee',$file);
       }
       else
       {
           $file = '';
       }

       if($request->id_back->getClientOriginalName()){
        $ext =  $request->id_back->getClientOriginalExtension();
        $file = date('YmdHis').rand(1,99999).'.'.$ext;
        $request->id_back->storeAs('public/employee',$file);
   }
   else
   {
       $file = '';
   }


     //   $employee->role_id = $request->role_id;
        $employee->emp_image = $file;
        $employee->id_front = $file;
       $employee->id_back = $file;
        $employee->name = $request->name;
        $employee->nick_name = $request->nick_name;
        $employee->phone = $request->phone;
        $employee->address = $request->address;
        //$employee->emp_image = $request->emp_image;
        // $employee->id_front = $request->id_front;
        // $employee->id_back = $request->id_back;
        $employee->specilist = $request->specilist;
        $employee->save();
        return redirect()->route('employee.index');
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
    public function edit(Employee $employee)
    {
        $arr['employee'] =$employee;
        $arr['role'] = Role::all();  //  8
        return view('pages.employee.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        if(isset($request->emp_image) && $request->emp_image->getClientOriginalName()){
            $ext =  $request->emp_image->getClientOriginalExtension();
            $file = date('YmdHis').rand(1,99999).'.'.$ext;
            $request->emp_image->storeAs('public/employee',$file);
       }
       else
       {
        if(!$employee->emp_image)
        $file = '';
         else
        $file = $employee->emp_image;
       }

       if(isset($request->id_front) && $request->id_front->getClientOriginalName()){
           $ext =  $request->id_front->getClientOriginalExtension();
           $file = date('YmdHis').rand(1,99999).'.'.$ext;
           $request->id_front->storeAs('public/employee',$file);
      }
      else
      {
        if(!$employee->id_front)
        $file = '';
         else
        $file = $employee->id_front;
      }

      if(isset($request->id_back) && $request->id_back->getClientOriginalName()){
       $ext =  $request->id_back->getClientOriginalExtension();
       $file = date('YmdHis').rand(1,99999).'.'.$ext;
       $request->id_back->storeAs('public/employee',$file);
  }
  else
  {
    if(!$employee->id_back)
    $file = '';
     else
    $file = $employee->id_back;
  }


    //   $employee->role_id = $request->role_id;
       $employee->emp_image = $file;
       $employee->id_front = $file;
       $employee->id_back = $file;
       $employee->name = $request->name;
       $employee->nick_name = $request->nick_name;
       $employee->phone = $request->phone;
       $employee->address = $request->address;
       //$employee->emp_image = $request->emp_image;
    //    $employee->id_front = $request->id_front;
    //    $employee->id_back = $request->id_back;
       $employee->specilist = $request->specilist;
       $employee->save();
       return redirect()->route('employee.index');
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
