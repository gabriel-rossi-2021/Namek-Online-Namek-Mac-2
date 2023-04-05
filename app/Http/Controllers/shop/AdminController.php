<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Afficher la view dashboard
    public function AfficheAdmin(){
        return view('admin');
    }
}
