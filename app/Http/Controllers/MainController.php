<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MainController extends Controller {
    public function welcome() {
        return view('welcome');
    }
    public function displayUser($id) {
        
    }
}   
?>