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
        // $name = $request->name;
        // $username = $request->username;
        // $password = $request->password;
        // $contact_no = $request->contact_no;
        // $rank = $request->rank;
        // $site_id = $request->site_id;
        // $pan_no = $request->pan_no;
        // $image = $request->image;
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        
        $imageName = time().'.'.$request->image->extension();  
     
        $request->image->move(public_path('images/app_images/users'), $imageName);
        $request->file('image')->getErrorMessage();
        return "Uploaded";
    }
}
