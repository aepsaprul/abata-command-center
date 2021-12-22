<?php

namespace App\Http\Controllers;

use App\Models\MasterNavigasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $nav = MasterNavigasi::select(DB::raw('count(*) as nav, nav_main'))
            ->where('nav_main', '<>', 1)
            ->groupBy('nav_main')
            ->get();

        $nav_sub = MasterNavigasi::whereNotNull('nav_sub')->get();

        return view('home', ['navs' => $nav, 'nav_subs' => $nav_sub]);
    }
}
