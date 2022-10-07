<?php

namespace App\Http\Controllers;
use App\student;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $data = [];
        $data['students'] = student::paginate(8);  

        if($request->search){
            $data['students'] = student::where('name', 'LIKE', '%' . $request->search . '%')->orWhere('rollno', 'LIKE', '%' . $request->search . '%')->orWhere('class', 'LIKE', '%' . $request->search . '%')->get();
        }
        return view('home', $data);
    }
}
