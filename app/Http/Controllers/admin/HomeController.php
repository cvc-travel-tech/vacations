<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Package;
use App\Booking;
class HomeController extends Controller
{
    private $data;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->data = [
            // 'module' => 'Home',
            // 'module-url' => route('admin.destination.index'),
            // 'create-url' => route('admin.destination.create'),
        ];
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = $this->data;
           $total = User::count();
           $Package=Package::count();
           $Booking=Booking::where('is_verified', 0)->count();
           $Booking1=Booking::where('is_verified', 1)->count();
        // $data['page-doc'] = "index";
        return view('admin.home', compact('data','total','Package','Booking','Booking1'));
    }
       public function company()
    {
        $use = User::all();
        return view('admin.company', compact('use'));
    }

}
