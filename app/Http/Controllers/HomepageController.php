<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function home()
    {
        $title = 'Home Page';

        return view('layout.home',compact('title'));
    }

    public function kategori()
    {
        $title = 'Kategori';

        return view('layout.kategori',compact('title'));
    }

    public function kontak()
    {
        $title = 'Kontak';

        return view('layout.kontak',compact('title'));
    }

    public function about()
    {
        $title = 'About';

        return view('layout.about',compact('title'));
    }

    public function login()
    {
        $title = 'About';

        return view('layout.login',compact('title'));
    }
}
