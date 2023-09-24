<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArrimaController extends Controller
{
    public function index()
    {
        return view('user.arrima.how_arrima_works');
    }

    public function expression_of_interest()
    {
        return view('user.arrima.expression_of_interest');
    }

    public function self_assessment_tool()
    {
        $scoreArrima = auth()->user()->arrima_score;
        return view('user.arrima.self_assessment_tool', compact('scoreArrima'));
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

    public function updateArrimaScore(Request $request)
    {
        $request->validate([
            'arrima_score' => 'required|numeric|min:0|max:1320',
        ]);

        $user = auth()->user();
        $user->arrima_score = $request->arrima_score;
        $user->save();

        notify()->success('Your Arrima score has been updated successfully.', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->back();
    }
}
