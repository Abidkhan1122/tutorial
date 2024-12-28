<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function home() {
        return view('welcome');
    }

    function forms() {
        return view('forms');
    }

    function userProfile() {
        return view('userProfile');
    }
    function widgets() {
        return view('widgets');
    }
    function gallery() {
        return view('gallery');}
}
