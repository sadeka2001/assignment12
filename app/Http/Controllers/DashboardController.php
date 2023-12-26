<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Sells;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        
        return view('backend.dashboard');

    }


}
