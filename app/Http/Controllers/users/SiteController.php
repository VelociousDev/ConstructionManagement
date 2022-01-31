<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SiteController extends Controller
{
    //
    public function index(Request $request){
        $users_list =array();
        if($request->session()->has('key')){
            $user_db_conn_name = $request->session()->get('comp_db_conn_name');
 
            $sites = DB::connection($user_db_conn_name)->table('sites')->get();

            return  view('layouts.sites')->with('site_data',json_encode($sites));
        }else{
            return redirect('/logout');
        }
    }
}
