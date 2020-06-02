<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request, $slug)
    {
        $arraySlug = explode('-', $slug); //tách các phần tử qua dấu - của slug
    	$id = array_pop($arraySlug); // lấy phần tử cuối cùng sau khi tách

    	$category = Category::findOrFail($id); // lấy danh mục click vào

    	if ($category) {   
    	   $categories = Category::where('c_status', 1)->get(); // lấy toàn bộ danh mục
    	   $ids = [];

    	   foreach ($categories as $cat) {
    	   	  if ($category->id == $cat->id ) {
    	   	  	$ids[] = $category->id;

    	   	  	foreach ($categories as $child) {
    	   	  		if ($category->id == $child->c_parent_id) {
    	   	  			$ids[] = $child->id;
    	   	  			foreach ($categories as $item) {
    	   	  				if ($child->id == $item->c_parent_id) {
    	   	  					$ids[] = $item->id;
    	   	  				}
    	   	  			}
    	   	  		}
    	   	  	}
    	   	  }
    	   }

    	   $products = Product::where('pro_status', 1)->whereIn('pro_category_id', $ids)->select('id', 'pro_name', 'pro_slug', 'pro_price', 'pro_sale', 'pro_image');

            if ($request->gia) { // tìm theo giá
                    $price = $request->gia;
                    if ($price == 9 ) {
                         $products->where('pro_price', '<', 20000);
                    }elseif($price == 8){
                         $products->where('pro_price', '>', 160000 );
                    }else{
                        $products->where([
                        ['pro_price', '>=', 20000 * $price],
                        ['pro_price', '<', (20000 * $price) + 20000 ]
                        ]);
                    }
            }  

            // theo sắp xêp
            if ($request->sap_xep) {
                $sap_xep = $request->sap_xep;
                if ($sap_xep == 1) $products->where('pro_sale', '>', 0)->orderByDesc('pro_sale');
                if( $sap_xep == 2) $products->where('pro_sale', 0);
                if ($sap_xep == 3 ) $products->orderByDesc('pro_price');
                if($sap_xep == 4 ) $products->orderBy('pro_price');
            }


           $products = $products->paginate(24);
    	   
    	   $viewData = [
    	   	'products' => $products,
    	   	'category'  => $category
    	   ];

    	   return view('frontend.productByCategory.index', $viewData);
    	}
    	   return redirect()->route('frontend.home');
    }
}
