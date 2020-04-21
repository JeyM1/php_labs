<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller {
    // basic welcome page
    public function welcome() {
        return view('welcome');
    }

    public function userlogin(Request $request) {
        // getting logging in or registering
        $input = $request->all();
        if(!isset($input['submit'])) {
            abort(403, 'Unauthorized action.');
        }
        $type = $input['submit'];
        $username = $input['username'];
        $password = Hash::make($input['password']);
        $just_registered = false;
        if($type == "Login") {
            // TODO: check if login and pass is true, save total entries, increment for 1
        }
        if($type == "Register") {
            // TODO: add acc to DB
            return "Register ".$input['username'];
        }
        
        $entries = 0;
        return view("users", [
                                'username' => $username,
                                'entries' => $entries,
                                'just_registered' => $just_registered
                            ]);
    }
    public function displayUser($id) {

    }
}   
?>