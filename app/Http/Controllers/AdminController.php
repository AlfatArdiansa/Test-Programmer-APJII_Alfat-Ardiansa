<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $participants = Participant::all();
        return view("dashboard", ["pageTitle" => "Dashboard", "participants" => $participants]);
    }
}
