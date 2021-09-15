<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
// User Management Controller
class UserController extends Controller
{
    //Function for User view
    public function UserView(){
        // $allData=User::all();
        // $data['allData']=User::all();
        // return view('backend.user.view_user', $data);
        $data=User::all();
        return view('backend.user.view_user', ['allData'=>$data]);
    }

    //Function for User add Page Load
    public function UserAdd(){
         return view('backend.user.add_user');
    }
    //Function to store user data into database from add page
    public function UserStore(Request $request){
        // First validate and then insert
         $validatedData=$request->validate([
             'name'=>'required',
             'email'=>'required|unique:users',//  Unique into user table(:user)
             'password'=>'required',
         ]);
         $data= new User();
         $data->usertype=$request->usertype;
         $data->name=$request->name;
         $data->email=$request->email;
         $data->password=bcrypt($request->password);
         $data->save();
        //  Use Toaster as Notification
        $notification=array(
            'message'=>'User Inserted Successfully',
            'alert-type'=>'success',
        );
         return redirect()->route('user.view')->with($notification);
    }
    //Function to load Edit Page for Updation by id
    public function UserEdit($id){
        $editData=User::find($id);
        return view('backend.user.edit_user',['editData'=>$editData]);

    }
    //Function to update user data into database from Edit page by id
    public function UserUpdate(Request $request, $id){
        // First validate and then insert
        // $validatedData=$request->validate([
        //     'usertype'=>'required',
        //     'name'=>'required',
        //     'email'=>'required|unique:users',//  Unique into user table(:user)
        // ]);
        $data= User::find($id);
        $data->usertype=$request->usertype;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->save();
       //  Use Toaster as Notification
       $notification=array(
           'message'=>'User Updated Successfully',
           'alert-type'=>'info',
       );
        return redirect()->route('user.view')->with($notification);

    }
    //Function to delete user by id
    public function UserDelete($id){
        $data= User::find($id);
        $data->delete();
       //  Use Toaster as Notification
       $notification=array(
           'message'=>'User Deleted Successfully',
           'alert-type'=>'warning',
       );
        return redirect()->route('user.view')->with($notification);

    }
}
