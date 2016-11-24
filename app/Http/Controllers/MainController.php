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

        $response = $this->validateMail($email,$nrtelefonu);

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
            if (empty($this->validateMail($email, $nrtelefonu))) {
                if (isset($admins)) {
                    foreach ($admins as $admin) {
                        Mail::queue('emails.reminder', ['email' => $email, 'nazwafirmy' => $nazwafirmy, 'nrtelefonu' => $nrtelefonu],
                            function ($m) use ($admin, $nazwafirmy, $nrtelefonu, $email, $subject) {
                                $m->from($email, $nazwafirmy);

                                $m->to($admin->email)->subject($subject);
                            });
                    }
                    return response()->json([
                        'success' => true,
                        'message' => ["Dziękujemy za informacje - skontaktujemy się z Tobą w ciągu
                            24h."]
                    ]);
                    //return redirect(App::getLocale() . '/about')->with('message', 'Thanks for contacting us!');
                }
            }
            else
            {
                return response()->json([
                    'success' => false,
                    'message' => $this->validateMail($email,$nrtelefonu)
                ]);
            }
        } catch (\Exception $ex) {
            return response()->json([
                'success' => false,
                'message' => ["Nie udało się wysłać wiadomości. Proszę spróbować ponownie później."]
            ]);
            //return redirect(App::getLocale() . '/about')->with('message', 'Message failed!');
        }

        return response()->json([
            'success' => false,
            'message' => ["Nie udało się wysłać wiadomości. Proszę spróbować ponownie później."]
        ]);
        //return redirect(App::getLocale() . '/about')->with('message', 'Message failed!');
    }

    private function validateMail($email, $nrtelefonu)
    {
        $response = array();
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $response[] = "Adres e-mail jest nieprawidłowy";
        }
        if (!preg_match("/^[0-9]{3}-?[0-9]{2,3}-?[0-9]{2,3}$/", $nrtelefonu)) {
            $response[] = "Numer telefonu jest nieprawidłowy";
        }

        return $response;
    }
}
