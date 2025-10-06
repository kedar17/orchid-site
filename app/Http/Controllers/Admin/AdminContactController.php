<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class AdminContactController extends Controller
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
        $contacts = ContactForm::all();
        return view('admin.contacts', compact('contacts'));
        //return view('clients');
    }
    public function addContact(Request $request)
    {
        // 1) Validate incoming data
        $data = $request->validate([
            'firstName'       => 'required|string|max:50',
            'lastName'  => 'required|string|max:50',
            'email'  => 'required|string|max:50',
            'phone' => 'required|max:10',
            'query_tag'   => 'required',
            'query'     => 'required|string',
        ]);

        // 2) Create the client, hashing the real password
        ContactForm::create($data);

        // 3) Redirect (adjust to your listing route)
        return redirect()
            ->route('contacts')  
            ->with('success', 'Contact added successfully.');
            //return redirect()->route('clients'); 
    }
    // Handle “Update client”
    public function update(Request $request, ContactForm $contact)
    {
        
        $data = $request->validate([
            'firstName'       => 'required|string|max:50',
            'lastName'  => 'required|string|max:50',
            'email'  => 'required|string|max:50',
            'phone' => 'required|max:10',
            'query_tag'   => 'required',
            'query'     => 'required|string',
        ]);


        $contact->update($data);

        return redirect()->route('contacts')->with('success', 'Contact updated successfully.');
    }
    public function destroy($id)
    {
        //dd($id);
        $contact = ContactForm::findOrFail($id);
        $contact->delete();
        return redirect()->route('contacts')->with('success', 'Contact deleted.');
    }
    

}
