<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Contact;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteContact($id)
    {
        $contact = Contact::destroy($id);
        return back();
    }

    public function validateContact($id)
    {
        $contact = Contact::find($id);
        $contact->confirmed=1;
        $contact->save();
        return back();
    }

    public function invalidateContact($id)
    {
        $contact = Contact::find($id);
        $contact->confirmed=0;
        $contact->save();
        return back();
    }
}
