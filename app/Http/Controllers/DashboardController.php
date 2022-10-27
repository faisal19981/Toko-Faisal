<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $title = 'Dashboard';

        return view('dashboard.index', compact('title'));
    }

    public function kategori()
    {
        $title = 'Kategori';

        return view('dashboard.kategori', compact('title'));
    }

    public function kontak()
    {
        $title = 'Kontak';

        return view('dashboard.kontak', compact('title'));
    }

    public function about()
    {
        $title = 'Tentang Kami';

        return view('dashboard.about', compact('title'));
    }
}
