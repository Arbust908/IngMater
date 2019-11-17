<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
