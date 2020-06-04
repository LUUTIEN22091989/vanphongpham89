<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Article;
use App\Models\Slide;
use App\Models\RegisterCustomer;
use App\Models\PageStatic;
use Illuminate\Support\Str;  // dùng cho slug
use Carbon\Carbon;// DÙNG CHO created_at
use Session;
session_start();

class HomeController extends Controller
{
    public function index()
    {
    	// SP MỚI NHẤT
    	$productsNew = Product::where('pro_status', 1)->orderByDesc('id')->select('id', 'pro_name', 'pro_slug', 'pro_price', 'pro_sale', 'pro_image')->limit(8)->get();
    	// sp được mua nhiều
    	$productsPay = Product::where('pro_status', 1)->where('pro_pay', '>', 0)->orderByDesc('id')->select('id', 'pro_name', 'pro_slug', 'pro_price', 'pro_sale', 'pro_image')->paginate(8);
        //sp dang sale
        $productsSale   = Product::where('pro_status', 1)->where('pro_sale', '>', 0)->select('id', 'pro_name', 'pro_slug','pro_sale', 'pro_image', 'pro_price', 'pro_sale')->limit(16)->get();
        // tin tức
        $articles = Article::where('a_active', 1)->orderByDesc('id')->get();
        // slide
        $slides = Slide::all();

        //sp theo từng danh mục
        $productsByCategory = [];
        $categories = Category::where('c_status' ,1)->get(); // lấy danh mục cha lớn
        foreach ($categories as $key => $category) {
            if ($category->c_parent_id == 0 ) {
                $ids = [$category->id];

                foreach ($categories as $child) {
                    if ($child->c_parent_id == $category->id) {
                        $ids[] = $child->id;
                        foreach ($categories as $item) {
                        	if ($item->c_parent_id == $child->id) {
                        		$ids[] = $item->id;
                        	}
                        }
                    }
                }
                // gán sản phẩm theo từng danh mục cha lớn
                $productsByCategory[$key]['category'] = $category;
                $productsByCategory[$key]['products'] = Product::where('pro_status', 1)->whereIn('pro_category_id', $ids)->orderByDesc('id')->paginate(8);
            }
        }

    	$viewData = [
    		'productsNew'  => $productsNew,
    		'productsPay'  => $productsPay,
            'productsSale' => $productsSale,
            'articles'     => $articles,
            'slides'       => $slides,
    		'productsByCategory' => $productsByCategory
    	];
    	return view('frontend.home.index', $viewData);
    }

    // tìm kiếm sản phẩm
    public function searchProduct(Request $request)
    {
        
        $key = $request->key;

        $products = Product::where('pro_status', 1)->where('pro_name', 'like', '%'.$key.'%')->orWhere('pro_slug', 'like', '%'.Str::slug($key).'%')
            ->orWhere('pro_desc', 'like', '%'.$key.'%')->get();

        $viewData = [
                    'products'       => $products,
                    'query'      => $request->query(),
                    'title_page'     => "Danh sách tìm kiếm"
             ];

            return view('frontend.search_products.index' ,$viewData);
         
    }

    // đăng ký nhận thông tin
    public function customerRegister(Request $request)
    {
        $data = $request->except('_token');
        $data['created_at'] = Carbon::now();

        $id = RegisterCustomer::insertGetId($data); // insert vào bảng users và lấy  luôn id

        if ($id) {
            Session::flash('alert', 'Đăng ký thành công');
            return redirect()->back();
        }
            Session::flash('alert', 'Đăng ký thất bại');
            return redirect()->back();
    }

    // các page thông tin chung
    public function pageStatic($slug)
    {
        $static = PageStatic::where(['ps_active' => 1, 'ps_slug' => $slug])->first();

        $viewData = [
            'static' => $static,
            'title_page' => $static->ps_name
        ];
        return view('frontend.pageStatic.index', $viewData);
    }
}
