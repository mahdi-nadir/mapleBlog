<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExpressEntryController extends Controller
{
    public function eligibility()
    {
        return view('user.ee.eligibility');
    }

    public function crs()
    {
        return view('user.ee.crs');
    }

    public function clb()
    {
        return view('user.ee.clb');
    }

    public function suggestedpnp()
    {
        return view('user.ee.suggestedpnp');
    }

    public function extraInfo()
    {
        return view('user.ee.extraInfo');
    }
}
