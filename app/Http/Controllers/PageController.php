<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::whereDate('orario_partenza', '>=', Carbon::today())
            ->get();
        // $trains = Train::All();

        return view('layouts.app', compact('trains'));
    }
}