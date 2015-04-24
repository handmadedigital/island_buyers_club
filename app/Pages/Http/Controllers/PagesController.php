<?php namespace TGL\Pages\Http\Controllers;

use TGL\Core\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function getFeedback()
    {
        return view('pages.feedback');
    }
}