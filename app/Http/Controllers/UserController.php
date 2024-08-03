<?php

namespace App\Http\Controllers;
use App\Models\User_list;
use App\Models\Category_model;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user_form()
    {
        
        $all_category = Category_model::all();
        $data = compact('all_category');
        return view('user')->with($data);
    }

    public function save_user(Request $request)
    {
        $request->validate(
            [
                'username'=>'required',
                'email' =>'required|email',
                'gender' =>'required',
                'dob' => 'required',
                'category_id' => 'required'
            ]
        );
        $new_user = new User_list;
        $new_user->username = $request['username'];
        $new_user->email = $request['email'];
        $new_user->gender = $request['gender'];
        $new_user->dob = $request['dob'];
        $new_user->category_id = $request['category_id'];
        
        if($new_user->save())
        {
            return redirect('user_list');
        }
        
        // echo "<pre>";
        // print_r($request);
        // echo "</pre>";
    }

    public function user_list()
    {
        $all_users = User_list::all();
        $data = compact('all_users');
        return view('user_list')->with($data);
    }

    public function confirm_user_update_id($id)
    {
        $update_id = User_list::find($id);
        if(!is_null($id))
        {
        $all_category = Category_model::all();
            $data = compact('update_id','all_category');
            return view("update_user")->with($data);
        }
    }
    
    public function update_user(Request $request)
    {
        $request->validate(
            [
                'username'=>'required',
                'email' =>'required|email',
                'gender' =>'required',
                'dob' => 'required',
                'category_id' => 'required'
            ]
        );
        $update_id = User_list::find($request['id']);
        if(!is_null($update_id))
        {
            $update_id->username = $request['username'];
            $update_id->email = $request['email'];
            $update_id->gender = $request['gender'];
            $update_id->dob = $request['dob'];
            $update_id->category_id = $request['category_id'];

            if($update_id->save())
            {
                return redirect('user_list');
            }
        }
    }

    public function delete_user($id)
    {
        $delete_id = User_list::find($id);
        if(!is_null($id))
        {
            if($delete_id->delete())
            {
                return redirect('user_list');
            }
        }
    }
}
 