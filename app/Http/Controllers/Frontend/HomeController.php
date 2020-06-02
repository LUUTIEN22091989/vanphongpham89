<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;  // dùng cho slug

class HomeController extends Controller
{
    public function index()
    {
    	// SP MỚI NHẤT
    	$productsNew = Product::where('pro_status', 1)->orderByDesc('id')->select('id', 'pro_name', 'pro_slug', 'pro_price', 'pro_sale', 'pro_image')->limit(12)->get();
    	// sp được mua nhiều
    	$productsPay = Product::where('pro_status', 1)->where('pro_pay', '>', 0)->orderByDesc('id')->select('id', 'pro_name', 'pro_slug', 'pro_price', 'pro_sale', 'pro_image')->limit(12)->get();

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
                $productsByCategory[$key]['products'] = Product::where('pro_status', 1)->whereIn('pro_category_id', $ids)->orderByDesc('id')->limit(12)->get();
            }
        }

    	$viewData = [
    		'productsNew'  => $productsNew,
    		'productsPay'  => $productsPay,
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
}
