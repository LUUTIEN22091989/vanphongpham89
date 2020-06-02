<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class AdminContactController extends Controller
{
      public function index()
    {
    	$contacts = Contact::paginate(10);
    	$viewData   = [
           'contacts' => $contacts
    	];

    	return view('admin.contact.index', $viewData);
    }

     public function active($id)
    {
    	$contact = Contact::find($id);
    	$contact->c_reply =! $contact->c_reply;
    	$contact->save();
        return redirect()->back();
    }

    public function delete($id)
    {
    	$contact = Contact::find($id);
    	if ($contact) {
    		$contact->delete();
    	}
    	return redirect()->route('admin.contact.index');
    }
}
