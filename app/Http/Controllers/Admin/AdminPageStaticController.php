<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;  // dùng cho slug
use Carbon\Carbon;// DÙNG CHO created_at
use App\Models\PageStatic;

class AdminPageStaticController extends Controller
{
    public function index()
    {
    	$pageStatics = PageStatic::paginate(10);
    	$viewData = [
    		'pageStatics' => $pageStatics
    	];

    	return view('admin.pageStatic.index', $viewData);
    }

    public function create()
    {
    	return view('admin.pageStatic.create');
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        $data['ps_slug'] = Str::slug($request->ps_name);
        $data['created_at'] = Carbon::now();
        if ($request->hasFile('ps_avatar')) { // dòng này Kiểm tra xem có image có được chọn
            // get file
            $file = $request->file('ps_avatar');
            // đặt tên cho file image
            $filename = time().'_'.$file->getClientOriginalName(); // $file->getClientOriginalName() == tên ban đầu của image
            // Định nghĩa đường dẫn sẽ upload lên
            $path_upload = 'uploads/pageStatic/'; // 
            // Thực hiện upload file
            $request->file('ps_avatar')->move($path_upload,$filename);

            $data['ps_avatar'] = $path_upload.$filename;
        }	

        $id = PageStatic::insertGetId($data); //insertGetId À PHƯƠNG THƯC THÊM VÀO  BẢN GHI VÀ LẤY ID CỦA CỘT THEM VÀO

        return redirect()->route('admin.static.index');
    }

    public function edit($id)
    {       
         $pageStatic = PageStatic::find($id);
        return view('admin.pageStatic.update', compact('pageStatic'));
    }

    public function update(Request $request, $id)
    {
    	$pageStatic = pageStatic::find($id);

        $data               = $request->except('_token'); //except là truy vấn dữ liệu nhưng bỏ đi thành phần _token
    	$data['ps_slug'] = Str::slug($request->ps_name);
        $data['updated_at'] = Carbon::now();
        if ($request->hasFile('ps_avatar')) { // dòng này Kiểm tra xem có image có được chọn
            // get file
            $file = $request->file('ps_avatar');
            // đặt tên cho file image
            $filename = time().'_'.$file->getClientOriginalName(); // $file->getClientOriginalName() == tên ban đầu của image
            // Định nghĩa đường dẫn sẽ upload lên
            $path_upload = 'uploads/pageStatic/'; // 
            // Thực hiện upload file
            $request->file('ps_avatar')->move($path_upload,$filename);

            $data['ps_avatar'] = $path_upload.$filename;
        }	

        $pageStatic->update($data);

        return redirect()->route('admin.static.index');
    }

    public function delete($id)
    {
    	$pageStatic = PageStatic::find($id);
    	if ($pageStatic) {
    		$pageStatic->delete();
    	}

    	return redirect()->back();
    }

     public function active($id) 
    {
        $pageStatic = PageStatic::find($id);
        $pageStatic->ps_active =! $pageStatic->ps_active; // thay đổi status
        $pageStatic->save();

        return redirect()->back();
    }
}
