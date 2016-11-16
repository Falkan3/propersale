<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
    public function __construct()
    {
        $this->middleware('web');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('main.main');
    }

    public function prywatnosc()
    {
        return view('main.attachments.prywatnosc');
    }

    public function cookies()
    {
        return view('main.attachments.cookies');
    }

    public function regulamin()
    {
        return view('main.attachments.regulamin');
    }
}
