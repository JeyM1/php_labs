<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;



class MainController extends Controller {
    // error handling
    static $login_failures = [
        'username_incorrect' => "You have entered incorrect username.",
        'password_dont_match' => "Password that you provided dont match for that user."
    ];
    
    static $registration_failures = [
        'already_exists' => "This username is already registered."
    ];
    
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
        // hashing password
        $password = $input['password'];

        // response from server
        $view_list = ['username' => $username];

        // response from DB
        $curr_user = DB::table('users')->where('username', $username)->first();
        $curr_user = $curr_user ? get_object_vars($curr_user) : [];
        $entries = null;
        if($type == "Login") {
            // TODO: check if login and pass is true, save total entries, increment for 1
            if(!$curr_user) {
                // error - no such user in DB
                return view('welcome', [
                    'login_failed' => MainController::$login_failures['username_incorrect']
                    ]);
            }
            if(!Hash::check($password, $curr_user['password'])) {
                return view('welcome', [
                    'login_failed' => MainController::$login_failures['password_dont_match']
                    ]);
            }


        }
        if($type == "Register") {
            if(!$curr_user) {
                // inserting data if it not exists
                DB::table('users')->insert([
                    'username' => $username,
                    'password' => Hash::make($password)
               ]);
               $view_list['just_registered'] = true;
            } else {
                return view('welcome', [
                    'registration_failed' => MainController::$registration_failures['already_exists']]);
            }
        }            
        // login success
        $view_list['logged_in'] = true;
        return view("users", $view_list);
    }

    public function displayUser($username) {
        $entries = 0;
        // TODO: check if the user exists, else give 404
        return view("users", [
            'username' => $username,
            'entries' => $entries,
            'logged_in' => false
        ]);
    }
}   
?>