<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller{
    public function index(){
            $trains = Train::All();
            
            return view('layouts.app', compact('trains'));
    }
}