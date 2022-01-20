<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class DashBoardController extends Controller
{
    public function dashboard(){
        return Inertia::render('Dashboard');
    }
}
