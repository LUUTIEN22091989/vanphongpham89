<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\RequestAdminCategory;
use Illuminate\Support\Str;  // dùng cho slug
use Carbon\Carbon;// DÙNG CHO created_at

class AdminCategoryController extends Controller
{
     public function index(Request $request)
    {
        $categories = Category::paginate(60);
        $viewData   = [
        	'categories' => $categories,
        	'query'      => $request->query()
        ];

    	return view('admin.category.index', $viewData);
    }

    public function create()
    {
        $_categories = Category::where('c_status', 1)->get();
    	return view('admin.category.create', compact('_categories'));
    }

    public function store(RequestAdminCategory $request)
    {
    	$data               = $request->except('_token');
    	$data['c_name']     = $request->c_name;
    	$data['c_slug']     = Str::slug($request->c_name);
    	$data['created_at'] = Carbon::now();
    	$data['c_status']   = $request->c_status;

        if ($request->hasFile('c_avatar')) {
            $file               = $request->file('c_avatar');
            $fileName           = time().'_'.$file->getClientOriginalName(); 
            $path_upload        = 'uploads/category/';
            $request->file('c_avatar')->move($path_upload,$fileName);
            $data['c_avatar'] = $path_upload.$fileName;
        }

        $id                 = Category::insertGetId($data);

        return redirect()->route('admin.category.index');
    }

    public function edit($id)
    {
        $_categories = Category::where('c_status', 1)->get();
    	$category = Category::where('id', $id)->first();
    	$viewData   = [
        	'category' => $category,
            '_categories' => $_categories
        ];

    	return view('admin.category.update', $viewData);
    }

    public function update(RequestAdminCategory $request, $id)
    {
        $category = Category::find($id);

    	$data               = $request->except('_token');
    	$data['c_name']     = $request->c_name;
    	$data['c_slug']     = Str::slug($request->c_name);
    	$data['updated_at'] = Carbon::now();

         if ($request->hasFile('c_avatar')) {
            $file               = $request->file('c_avatar');
            $fileName           = time().'_'.$file->getClientOriginalName(); 
            $path_upload        = 'uploads/category/';
            $request->file('c_avatar')->move($path_upload,$fileName);
            $data['c_avatar'] = $path_upload.$fileName;
        }

        $category->update($data);

        return redirect()->route('admin.category.index');
    }

    public function delete($id)
    {
    	Category::where('id', $id)->delete();

        return redirect()->route('admin.category.index');
    }

    public function status($id)
    {
        $category = Category::find($id);
        $category->c_status =! $category->c_status;
        $category->save();
        return redirect()->back();
    }
}
