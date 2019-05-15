<?php

namespace App\Http\Controllers\Push;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CronController extends Controller
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
        return view('push.cron');
    }
}
