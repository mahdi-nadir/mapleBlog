<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArrimaController extends Controller
{
    public function expression_of_interest()
    {
        return view('user.arrima.expression_of_interest');
    }

    public function self_assessment_tool()
    {
        return view('user.arrima.self_assessment_tool');
    }

    public function csq()
    {
        return view('user.arrima.csq');
    }

    public function permanent_residence()
    {
        return view('user.arrima.permanent_residence');
    }

    public function pmi()
    {
        return view('user.arrima.pmi');
    }
}
