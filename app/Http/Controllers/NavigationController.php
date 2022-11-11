<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function contact()
    {
        return $this->render('contact');
    }
}
