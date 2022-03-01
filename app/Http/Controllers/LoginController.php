<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

class LoginController extends Controller
{
    //
    public function loginfunc(Request $request)
    {
        $uid = $request->post('companyid');
        $uname = $request->post('username');
        $pass = $request->post('password');

        $users = DB::table('companies')->select('id', 'name', 'db_name', 'db_pass', 'db_host', 'db_port', 'status')->where('uid', $uid)->count();

        if ($users == 1) {
            $compdata = DB::table('companies')->select('id', 'uid', 'name', 'db_conn_name', 'status')->where('uid', $uid)->first();
            if ($compdata->status == 'Active') {
                $usercount = DB::connection($compdata->db_conn_name)->table('users')->where('username', $uname)->where('pass', $pass)->count();
                if ($usercount == 1) {
                    $userdata = DB::connection($compdata->db_conn_name)->table('users')->select('id', 'name', 'username', 'rights', 'rank', 'status')->where('username', $uname)->where('pass', $pass)->first();
                    if ($userdata->status == "Active") {
                        if ($userdata->rank == "Admin") {
                            $settings = DB::connection($compdata->db_conn_name)->table('settings')->select('name', 'value')->get();

                            $key =   $request->session()->regenerate();
                            $mytime = Carbon::now();
                            session([
                                'key' => $key,
                                "uid" => $userdata->id,
                                "name" => $userdata->name,
                                "username" => $userdata->username,
                                "rights" => $userdata->rights,
                                "rank" => $userdata->rank,
                                "comp_id" => $compdata->uid,
                                "comp_name" => $compdata->name,
                                "comp_db_conn_name" => $compdata->db_conn_name
                            ]);
                            foreach ($settings as $setting) {
                                $request->session()->push($setting->name, $setting->value);
                            }
                            DB::connection($compdata->db_conn_name)->table('session')->insert([
                                "uid" => $userdata->id,
                                "login_time" => $mytime->toDateTimeString(),
                                "ip_address" => $this->getIp(),
                                "browser" => $request->header('User-Agent'),
                                "session_key" => $key
                            ]);
                            return redirect('/dashboard');
                        } else {
                            return view('/login')->with('errorcode', "You Are Not Allowed To Login Using Web Portal! Please Contact Your Administration!");
                        }
                    } else {
                        return view('/login')->with('errorcode', "Your Account Is Inactive! Please Contact Your Administration!");
                    }
                } else {
                    return view('/login')->with('errorcode', "Invalid Credentials! Please Check Your Credentials!");
                }
            } else {
                return view('/login')->with('errorcode', "This Company Is Inactive! Please Contact Your Administration");
            }
        } else {
            return view('/login')->with('errorcode', "This Company Don't Exists!");
        }
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/login');
    }
    public function getIp()
    {
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key) {
            if (array_key_exists($key, $_SERVER) === true) {
                foreach (explode(',', $_SERVER[$key]) as $ip) {
                    $ip = trim($ip); // just to be safe
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false) {
                        return $ip;
                    }
                }
            }
        }
        return request()->ip(); // it will return server ip when no client ip found
    }
    public function checkAuth(Request $request)
    {
        if ($request->session()->get('key')) {
            return redirect('/dashboard');
        } else {
            return redirect('/login');
        }
    }
}
