<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;
class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('contact');
    }
    public function getFormData(Request $request){
        //dd($request);
         // 1) Validate incoming data
        $data = $request->validate([
            'firstName'       => 'required|string|max:50',
            'lastName'  => 'required|string|max:50',
            'email'  => 'required|string|max:50',
            'phone' => 'required|max:10',
            'query_tag'   => 'required',
            'query'     => 'required|string',
        ]);
        //dd($data); //die();
        // 2) Create the client, hashing the real password
        try {
            ContactForm::create($data);
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong, Please try again!');
            
            //dd($e->getMessage(), $e->getTrace());
        }
        // 3) Redirect (adjust to your listing route)
        return redirect()
            ->route('/contact-us')  
            ->with('success', 'Thanks for reching us, we will connect you shortly based on your query.');
    
    }
}
