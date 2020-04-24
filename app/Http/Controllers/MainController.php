<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;



class MainController extends Controller {
    // error handling
    static $login_failures = [
        'username_not_exist' => "Username you have provided is not registered.",
        'password_dont_match' => "Password that you provided dont match for that user."
    ];
    
    static $registration_failures = [
        'already_exists' => "This username is already registered."
    ];
    
    const MAX_STATS_USER_COUNT = 30;

    // basic welcome page
    public function welcome() {
        return view('welcome');
    }

    public function userlogin(Request $request) {
        $input = $request->all();
        if(!isset($input['submit'])) {
            abort(403, 'Unauthorized action.');
        }

        /* getting type of action
            - Register
            - Login             */
        $type = $input['submit'];

        // getting inputs info
        $username = $input['username'];
        $password = $input['password'];

        // save parameters, to return them if user logged in
        $params = [];

        // response from DB
        $curr_user = DB::table('users')->where('username', $username)->first();

        if($type == "Login") {
            // TODO: check if login and pass is true, save total entries, increment for 1
            if(!$curr_user) {
                // error - no such user in DB
                return view('welcome', [
                    'login_failed' => MainController::$login_failures['username_not_exist']
                    ]);
            }
            if(!Hash::check($password, $curr_user->password)) {
                return view('welcome', [
                    'login_failed' => MainController::$login_failures['password_dont_match']
                    ]);
            }

            // login success
            $params['entries'] = $curr_user->entries + 1;
            DB::table('users')->where('id', $curr_user->id)->update(['entries' => $curr_user->entries + 1]);
        }
        else if($type == "Register") {
            if(!$curr_user) {
                // inserting data if it not exists
                DB::table('users')->insert([
                    'username' => $username,
                    'password' => Hash::make($password)
                ]);

               $params['just_registered'] = true;
            } else {
                return view('welcome', [
                    'registration_failed' => MainController::$registration_failures['already_exists']
                    ]);
            }
        }
        $params['logged_in'] = true;
        return redirect()->route('users', ['username' => $username])->with('params', $params);
    }

    public function displayUser($username) {
        // check, user logged in?, just registered?
        $params = session()->get('params');

        // if user not logged in, check that username
        if(!isset($params['logged_in'])) {
            $params['logged_in'] = false;
            $curr_user = DB::table('users')->where('username', $username)->first();
            if(!$curr_user) {
                abort(404, 'User not found.');
            }
            $params['entries'] = $curr_user->entries;
        }
        // user exists
        $params['username'] = $username;
        return view('users', $params);
    }
}   
?>