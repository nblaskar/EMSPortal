<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\If_;

// Controller for User Profile Management
class ProfileController extends Controller
{
    //View Profile Function
    public function ProfileView(){
        //target the current logged user id
        $id=Auth::user()->id;
        // target the user data from user table by current loged in user id
        $userData=User::find($id);
        return view('backend.user.view_profile', ['userData'=>$userData]);
    }
    //Edit Profile Function
    public function ProfileEdit(){
        //target the current logged user id
        $id=Auth::user()->id;
        // target the user data from user table by current loged in user id
        $editUser=User::find($id);
        return view('backend.user.edit_profile', ['editUser'=>$editUser]);
    }
    //Update Profile Function
    public function ProfileStore(Request $request){
        //target the current logged user id
        $id=Auth::user()->id;
        // target the user data from user table by current loged in user id
        $storeUser=User::find($id);
        $storeUser->name=$request->name;
        $storeUser->email=$request->email;
        $storeUser->gender=$request->gender;
        $storeUser->mobile=$request->mobile;
        $storeUser->address=$request->address;

        // Image Saving Process
        if($request->file('image')){
            $file=$request->file('image');
            @unlink(public_path('upload/user_images/'.$storeUser->image)); // remove first the existing profile
            $filename=date('YmdHi').$file->getClientOriginalName(); //1233.pmg
            $file->move(public_path('upload/user_images'),$filename); //store in local storage
            $storeUser['image']=$filename; //store in database
        }
        $storeUser->save();

        //  Use Toaster as Notification
       $notification=array(
        'message'=>'User Profile Updated Successfully',
        'alert-type'=>'success',
    );
     return redirect()->route('profile.view')->with($notification);




    }  // End this function
    // Password view page load function
    public function passwordView(){
        //target the current logged user id
        $id=Auth::user()->id;
        // target the user data from user table by current loged in user id
        $editPassword=User::find($id);
        return view('backend.user.edit_password', ['editPassword'=>$editPassword]);
    }
    // Password  update function
    public function passwordUpdate(Request $request){
            // First validate and then Update
            $validatedData=$request->validate([
                'oldpassword'=>'required',
                'password'=>'required|confirmed',
            ]);

            $hashedPassword = Auth::user()->password; 
            if(Hash::check($request->oldpassword, $hashedPassword))            {
                $user=user::find(Auth::id());
                $user->password= Hash::make($request->password);
                $user->save();
                Auth::logout();
                return redirect()->route('login');
            }else{
                
                //  Use Toaster as Notification
            $notification=array(
                'message'=>'Opps! Criteria is not matched!',
                'alert-type'=>'warning',
            );
                return redirect()->back()->with($notification);
            }


    }

}
