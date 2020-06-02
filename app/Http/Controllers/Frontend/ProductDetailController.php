<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;


class ProductDetailController extends Controller
{
    public function getProductDetail(Request $request, $slug)
    {
    	$arraySlug = explode('-', $slug); //tách các phần tử qua dấu - của slug
    	$id = array_pop($arraySlug); // lấy phần tử cuối cùng sau khi tách

    	$product = Product::findOrFail($id);

    	if ($product) {
            $meta_canonical = $request->url();
    		$viewData = [
    			'product' => $product,
    			'productSuggests' => $this->getProductSuggests($product->pro_category_id, $id),//sp cùng danh mục
                'meta_canonical' => $meta_canonical, 
                'title_page'    => $product->pro_name
    		];

    		return view('frontend.product_detail.index', $viewData);
    	}
    	    return redirect()->route('frontend.home');
    }

      // SẢN PHẨM CÙNG DANH MỤC
    public function getProductSuggests($categoryID, $id)
    {
        //SHOW danh sách sp ra trang danh sách
        $products   = Product::whereNotIn('id', [$id]);

        $products   = $products->where(['pro_status' => 1, 'pro_category_id' => $categoryID ])->select('id', 'pro_name', 'pro_slug','pro_sale', 'pro_image', 'pro_price', 'pro_sale')->paginate(12);

        return $products;
    }
}
