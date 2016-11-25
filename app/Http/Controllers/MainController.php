<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Http\Requests;
use App\User;
use App\Contact;

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

    public function informacje()
    {
        return view('main.attachments.informacje');
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

    public function mail(Request $request)
    {
        $admins = User::all();
        $email = $request['email'];
        $nazwafirmy = $request['nazwafirmy'];
        $nrtelefonu = $request['nrtelefonu'];

        $subject = "Kontakt ze strony ProperSale.pl";

        $response = $this->validateMail($email,$nrtelefonu,$nazwafirmy);

        if(empty($response)) {
            $contact = new Contact;
            $contact->email = $email;
            $contact->nazwafirmy = $nazwafirmy;
            $contact->nrtelefonu = $nrtelefonu;
            $contact->save();
            return response()->json([
                'success' => true,
                'message' => ["Dziękujemy za informacje - skontaktujemy się z Tobą w ciągu
                            24h."]
            ]);
        }
        try {
            if (empty($response)) {
                if (isset($admins)) {
                    foreach ($admins as $admin) {
                        Mail::queue('emails.reminder', ['email' => $email, 'nazwafirmy' => $nazwafirmy, 'nrtelefonu' => $nrtelefonu],
                            function ($m) use ($admin, $nazwafirmy, $nrtelefonu, $email, $subject) {
                                $m->from($email, $nazwafirmy);

                                $m->to($admin->email)->subject($subject);
                            });
                    }
                }
                return response()->json([
                    'success' => true,
                    'message' => ["Dziękujemy za informacje - skontaktujemy się z Tobą w ciągu
                            24h."]
                ]);
            }
            else
            {
                return response()->json([
                    'success' => false,
                    'message' => $this->validateMail($email,$nrtelefonu, $nazwafirmy)
                ]);
            }
        } catch (\Exception $ex) {
            return response()->json([
                'success' => false,
                'message' => ["Nie udało się wysłać wiadomości. Proszę spróbować ponownie później."]
            ]);
            //return redirect(App::getLocale() . '/about')->with('message', 'Message failed!');
        }

        //return redirect(App::getLocale() . '/about')->with('message', 'Message failed!');
    }

    private function validateMail($email, $nrtelefonu, $nazwafirmy)
    {
        $response = array();
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email)>35) {
            $response[] = "Adres e-mail jest nieprawidłowy";
        }
        if (strlen($nrtelefonu)>14 || !preg_match("/^[0-9]{3}(-|\s)?[0-9]{3}(-|\s)?[0-9]{3}$/", $nrtelefonu) && !preg_match("/^[0]?([0-9]{2})(-|\s)?[0-9]{3}(-|\s)?[0-9]{2}(-|\s)?[0-9]{2}$/", $nrtelefonu)) {
            $response[] = "Numer telefonu jest nieprawidłowy";
        }
        if (strlen($nazwafirmy)>50) {
            $response[] = "Nazwa firmy jest za długa";
        }

        return $response;
    }
}
