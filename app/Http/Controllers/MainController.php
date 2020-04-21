<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        if($type == "Login") {
            return "Hello ".$input['username'];
        }
        if($type == "Register") {
            return "Register ".$input['username'];
        }
        return "returned.";
        //return view('welcome');
    }
    public function displayUser($id) {

    }
}   
?>