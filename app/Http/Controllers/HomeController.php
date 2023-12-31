<?php

namespace App\Http\Controllers;

use App\Models\Block;
use App\Models\Client;
use App\Models\Employee;
use App\Models\Installment;
use App\Models\Notes;
use App\Models\Section;
use App\Models\Service;
use App\Models\Unit;
use App\Models\User;
use App\Models\Zone;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        $zones=Zone::count();
        $blocks=Block::count();
        $units=Unit::count();
        $users=User::count();
        $installments=Installment::count();
        $clients=Client::count();
        $employees=Employee::count();
        $services=Service::count();
        $notes=Notes::count();
        $sections=Section::count();
        return view('dashboard.home',compact('employees','services','notes','sections','clients','zones','blocks','units','users','installments'));
    }
}
