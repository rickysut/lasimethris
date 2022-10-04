<?php

namespace App\Http\Controllers;

use App\Models\Newschool;
use Illuminate\Http\Request;


class NewschoolController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function register(Request $request)
    {
        $newSchool = Newschool::create($request->all());
        return redirect()->route('admin.home');;
    }
}
