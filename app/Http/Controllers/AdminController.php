<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $jumlah_category = Category::all()->count();
    	return view('admin.dashboard')
        ->with('jumlah_category', $jumlah_category);
    }
}
