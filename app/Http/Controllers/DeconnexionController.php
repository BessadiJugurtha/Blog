<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class DeconnexionController extends Controller
{
    public function deconnecter(){
        Auth::logout();
        return redirect('/home');
        
    
    }
}
