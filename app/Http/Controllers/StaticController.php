<?php

namespace Screeenly\Http\Controllers;

use Illuminate\Http\Request;
use Screeenly\Http\Requests;
use Screeenly\Http\Controllers\Controller;

class StaticController extends Controller
{
    /**
     * Diplsay Terms of Service Page.
     *
     * @return Illuminate\View\View
     */
    public function showTerms()
    {
        return view('static.terms');
    }

    /**
     * Display Imprint Page.
     *
     * @return Illuminate\View\View
     */
    public function showImprint()
    {
        return view('static.imprint');
    }

    /**
     * Show Feedback Page.
     *
     * @return Illuminate\View\View
     */
    public function showFeedback()
    {
        return view('static.feedback');
    }

    public function showDonate()
    {
        return view('static.donate');
    }

    public function privacy()
    {
        return view('static.privacy');
    }
}