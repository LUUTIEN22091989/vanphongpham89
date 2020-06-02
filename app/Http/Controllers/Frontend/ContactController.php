<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Carbon\Carbon;// DÙNG CHO created_at
use Session;
session_start();

class ContactController extends Controller
{
     public function index(Request $request)
    {
    	$meta_canonical = $request->url();

        $viewData = [
            'title_page'        => "Liên hệ",
            'meta_canonical'    => $meta_canonical
    	];
    	return view('frontend.contact.index', $viewData);
    }

    public function store(Request $request)
    {
    	$data               = $request->except('_token');
        $data['created_at'] = Carbon::now();

        Contact::insert($data);

        Session::flash('alert', 'Chúng tôi sẽ phản hồi lại sớm nhất cho bạn. Xin cảm ơn');
        return redirect()->back();
    }
}
