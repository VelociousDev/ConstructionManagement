<?php

namespace App\Http\Controllers\users;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(Request $request){
        $users_list =array();
        if($request->session()->has('key')){
            $user_db_conn_name = $request->session()->get('comp_db_conn_name');
 
            $users = DB::connection($user_db_conn_name)->table('users')->leftJoin('sites', 'users.site_id','=', 'sites.id')->select('users.*','sites.name AS site')->get();
            for($i = 0; $i<sizeof($users); $i++){
                $other_users  = DB::connection($user_db_conn_name)->table('users')->select('name','id', 'image')->where('site_id',$users[$i]->site_id)->where('id','!=',$users[$i]->id)->get();
                $users_list[$i]['data'] = $users[$i];
                $users_list[$i]['list'] = $other_users;
            }

            return  view('layouts.users')->with('users_list',json_encode($users_list));
        }else{
            return redirect('/logout');
        }
    }
    public function addnewuser(Request $request){
        if($request->session()->has('key')){
            $user_db_conn_name = $request->session()->get('comp_db_conn_name');
             $imageName = "noprofile.jpg";
        $request->validate([
            'contact_no'=>'required|digits:10',
            'username'=>'required|min:5',
            'name'=>'required|min:5',
            'password'=>'required|min:5'
        ],[
            'contact_no.digits'=>'Contact Number Should be 10 digits',
            'contact_no.required'=>'Contact Numeber Is Required',
            'username.min'=>'Username Should Be Minimum Of 5 Characters',
            'name.min'=>'Name Should Be Minimum Of 5 Characters',
            'password.min'=>'Password Should Be Minimum Of 5 Characters',
        ]);
        if(isset($request->image)){
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ],
        ['image.mimes'   => 'Please Select Valid Image Format (Jpeg,Png,Jpg,Gif)',
        'image.image'=> 'Please Select Valid Image (Jpeg,Png,Jpg,Gif)',
        'image.uploaded' => 'Please Choose Image Less Than 2 Mb',
        ]);
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images/app_images/users'), $imageName);
         }
         $name = $request->name;
         $username = $request->username;
         $password = $request->password;
         $contact_no = $request->contact_no;
        }

    }
}
