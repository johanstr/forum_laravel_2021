<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    public function index()
    {
        return view('thread.index');
    }

    public function edit()
    {
        return view('thread.edit');
    }
}
