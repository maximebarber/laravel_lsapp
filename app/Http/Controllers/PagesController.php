<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome to Lsapp';
        //first method
        //return view('pages.index', compact('title'));
        //second method
        return view('pages.index')->with('title', $title);
    }

    public function about()
    {
        $title = 'About us';
        return view('pages.about')->with('title', $title);
    }

    public function services()
    {
        $data = 
        [
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'CEO']
        ];
        return view('pages.services')->with($data);
    }
}
