<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homepage()
    {
        //echo" deu certo";
        return view('welcome');
    }


    public function cadastar()
    {
        echo"Tela de cadastro";
    }
    /**
     * routers to u ser auth
     */
    public function fazerLogin()
    {
        return view('user.login');

    }
}
