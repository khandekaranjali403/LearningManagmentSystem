<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;



class AdminController extends Controller
{
    //methid starts
    public function AdminDashboard(){

        return view ('admin.index');
    }//end method


     //method start by anjali for dashboard
     public function AdminLogin(){

        return view('admin.admin_login');
    }//end method

 function AdminLogout(Request $request)
    
       { Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
}


   



public function AdminProfile()

//method start by anjali
{

    $id = Auth::user()->id;
    $profileData = User::find($id);
    return view('admin.admin_profile_view', compact('profileData'));
}//end method
}