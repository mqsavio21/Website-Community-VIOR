<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('default.php');
    }

    public function aboutVior()
    {
        return view('aboutvior.php');
    }
    public function management()
    {
        return view('management.php');
    }
    public function teams()
    {
        return view('teams.php');
    }
    public function events()
    {
        return view('events.php');
    }

    public function academy()
    {
        return view('academy.php');
    }

}
