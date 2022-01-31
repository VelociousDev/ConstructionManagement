<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
class SettingsController extends Controller
{
    public function changetheme(Request $request){
        $themecolor = $request->color;
        $db_conn = $request->session()->get('comp_db_conn_name');
        $uid = $request->session()->get('uid');
        $mytime = Carbon::now();
        DB::connection($db_conn)->table('settings')->upsert([
            ['name' => 'theme', 'value' => $themecolor, 'uid' =>$uid,'updated_at'=> $mytime->toDateTimeString()]
        ], ['name'], ['value','uid','updated_at']);        
    $settings = DB::connection($db_conn)->table('settings')->select('name','value')->where('name','theme')->first();
    $color = $settings->value;
if($request->session()->has('theme')){
    $request->session()->forget('theme');
    $request->session()->push('theme',$color);
}else{
    $request->session()->push('theme',$color);
}
return redirect('/dashboard');
    }
    public function menutheme(Request $request){
        $themecolor = $request->themecolor;
        $db_conn = $request->session()->get('comp_db_conn_name');
        $uid = $request->session()->get('uid');
        $mytime = Carbon::now();
        DB::connection($db_conn)->table('settings')->upsert([
            ['name' => 'menutheme', 'value' => $themecolor, 'uid' =>$uid,'updated_at'=> $mytime->toDateTimeString()]
        ], ['name'], ['value','uid','updated_at']);        
    $settings = DB::connection($db_conn)->table('settings')->select('value')->where('name','menutheme')->first();
    $themecolor = $settings->value;
if($request->session()->has('menutheme')){
    $request->session()->forget('menutheme');
    $request->session()->push('menutheme',$themecolor);
}else{
    $request->session()->push('menutheme',$themecolor);
}

return redirect('/dashboard');
    }
}
