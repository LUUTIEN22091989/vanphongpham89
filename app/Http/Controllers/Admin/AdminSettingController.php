<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Str;  // dùng cho slug
use Carbon\Carbon;// DÙNG CHO created_at

class AdminSettingController extends Controller
{
    public function index()
    { 
    	$settings = Setting::paginate(10);
        $viewData   = [
        	'settings' => $settings
        ];

    	return view('admin.setting.index', $viewData);
    }

    public function create()
    {
    	return view('admin.setting.create');
    }

    public function store(Request $request)
    {
    	$data               = $request->except('_token');
    	$data['created_at'] = Carbon::now();

        if ($request->hasFile('logo')) {
            $file               = $request->file('logo');
            $fileName           = time().'_'.$file->getClientOriginalName(); 
            $path_upload        = 'uploads/setting/';
            $request->file('logo')->move($path_upload,$fileName);
            $data['logo'] = $path_upload.$fileName;
        }

        $id                 = Setting::insertGetId($data);

        return redirect()->route('admin.setting.index');
    }

    public function edit($id)
    {
    	$setting = Setting::where('id', $id)->first();

    	$viewData   = [
        	'setting' => $setting,
        ];

    	return view('admin.setting.update', $viewData);
    }

    public function update(Request $request, $id)
    {
        $setting = Setting::find($id);

    	$data               = $request->except('_token');
    	$data['updated_at'] = Carbon::now();
        if ($request->hasFile('logo')) {
            $file               = $request->file('logo');
            $fileName           = time().'_'.$file->getClientOriginalName(); 
            $path_upload        = 'uploads/setting/';
            $request->file('logo')->move($path_upload,$fileName);
            $data['logo'] = $path_upload.$fileName;
        }

        $setting->update($data);

        return redirect()->route('admin.setting.index');
    }

    public function delete($id)
    {
    	setting::where('id', $id)->delete();

        return redirect()->route('admin.setting.index');
    }

    public function status($id)
    {
    	$setting = Setting::find($id);
    	$setting->status =! $setting->status;
    	$setting->save();
        return redirect()->back();
    }
}
