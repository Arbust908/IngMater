<?php

namespace App\Http\Controllers;

use App\Mail\ContactMailer;
use App\Mail\NewsletterMailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Nos lleva a la vista de home
     *
     * @return View
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Nos lleva a la vista de Quienes Somos
     *
     * @return View
     */
    public function who()
    {
        return view('paginas.who');
    }

    /**
     * Nos lleva a la vista de Quienes Somos
     *
     * @return View
     */
    public function portfolio()
    {
        return view('paginas.portfolio');
    }

    /**
     * Nos lleva a la vista de Quienes Somos
     *
     * @return View
     */
    public function contact()
    {
        return view('paginas.contact');
    }


    /**
     * Nos lleva a la vista de Quienes Somos
     *
     * @return View
     */
    public function inspects()
    {
        $name = 'inspects';
        return $this->servePilar($name);
    }

    /**
     * Nos lleva a la vista de Quienes Somos
     *
     * @return View
     */
    public function iyd()
    {
        $name = 'iyd';
        return $this->servePilar($name);
    }

    /**
     * Nos lleva a la vista de Quienes Somos
     *
     * @return View
     */
    public function cyc()
    {
        $name = 'cyc';
        return $this->servePilar($name);
    }

    /**
     * Sirve la pagina de pilar con lo necesario
     */
    private function servePilar($pilar)
    {
        return view('paginas.pilars')
            ->with('pilar', $pilar);
    }

    /**
     *
     */
    public function lang(Request $request)
    {
        // dump(App::getLocale());
        $inputs = $request->all();
        //$lang = $inputs["languaje"];

        // dump( __('routes.'.$inputs["page"]) );

        $page = __('routes.'.$inputs["page"]);

        /*
        $langs = ['en','es'];
        // dump( in_array($lang, $langs) );
        if( in_array($lang, $langs) ){
            App::setLocale($lang);
            Session::put('locale', $lang);
        }
        dd('Idioma '. $lang, 'Pagina '. $page, App::getLocale(), url( '/' . $page ));*/
        if($page === '/') { return redirect( url( $page ) ); }
        return redirect( url( '/' . $page ) );
    }

    // Newsletter
    public function newsletterMailer(Request $request)
    {
        $email = $request->input('email');
        Mail::to('arbust908@gmail.com')->queue(new NewsletterMailer($email));
        // --
        //return view('mails.mail');
        return response()->json(['email' => $email], 200);
    }

    // Contacto
    public function conactotMailer(Request $request)
    {
        $mailData = [
            'name' => $request->input('name'),
            'empresa' => $request->input('company'),
            'email' => $request->input('email'),
            'telefono' => $request->input('phone'),
            'msg' => $request->input('msg'),
        ];
        Mail::to('arbust908@gmail.com')->queue(new ContactMailer($mailData));
        // --
        return response()->json(['email' => $mailData['email']], 200);
    }
}
