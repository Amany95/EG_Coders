<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactus;
class PagesController extends Controller
{
    public function index_page()
    {
        return view('pages\index');
    }
    public function about_page()
    {
        return view('pages\about');
    }
    public function product_page()
    {
        return view('pages\product');
    }
    public function protfolio_page()
    {
        return view('pages\protfolio');
    }
    public function services_page()
    {
        return view('pages\services');
    }

    public function contactus(Request $request)
	   {
	       $this->validate($request, [
	        'name' => 'required',
	        'email' => 'required|email',
	        'phone'=> 'required|integer',
	        'message' => 'required|max:255'
	        ]);
	 
			$contactus=new Contactus;
			$contactus->name=$request->name;	
			$contactus->email=$request->email;	 
			$contactus->phone=$request->phone;	 
			$contactus->message=$request->message;	 

			$contactus->save();
			return redirect('/index');

	   }
}
