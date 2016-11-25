<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::where("confirmed", 1)->orderBy("created_at", "DESC")->get();
        $xcontacts = Contact::where("confirmed", 0)->orderBy("created_at", "DESC")->get();
        return view('home', ['contacts' => $contacts, 'xcontacts' => $xcontacts ]);
    }
}
