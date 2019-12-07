<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

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
    public function inspects()
    {
        return view('paginas.inspects');

    }

    /**
     * Nos lleva a la vista de Quienes Somos
     *
     * @return View
     */
    public function iyd()
    {
        return view('paginas.iyd');
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
    public function cyc()
    {
        return view('paginas.cyc');
    }

    /**
     *
     */
    public function lang(Request $request)
    {
        $inputs = $request->all();
        $lang = $inputs["languaje"];
        //dump( $inputs["page"] );
        //dump( __('routes.'.$inputs["page"], [], $lang) );
        $page = __('routes.'.$inputs["page"], [], $lang);
        $langs = ['en','es'];
        // dump( in_array($lang, $langs) );
        if( in_array($lang, $langs) ){
            App::setLocale($lang);
            Session::put('locale', $lang);
        }
        //dd('Idioma '. $lang, 'Pagina '. $page, App::getLocale(), url( '/' . $page ));
        if($page == '/') { return redirect( url( $page ) ); }
        return redirect( url( '/' . $page ) );
    }
}
