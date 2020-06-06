<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Rating;

class ProductDetailController extends Controller
{
    public function getProductDetail(Request $request, $slug)
    {
    	$arraySlug = explode('-', $slug); //tách các phần tử qua dấu - của slug
    	$id = array_pop($arraySlug); // lấy phần tử cuối cùng sau khi tách

    	$product = Product::findOrFail($id);

    	if ($product) {
            //lấy album ảnh
            $proImages = \DB::table('products_image')->where('pi_product_id', $id)->get();
            //sp dang sale
            $productsSale   = Product::where('pro_status', 1)->where('pro_sale', '>', 0)->select('id', 'pro_name', 'pro_slug','pro_sale', 'pro_image', 'pro_price', 'pro_sale')->limit(12)->get();
            // show đánh giá
            $ratings = Rating::where(['r_product_id' => $id, 'r_status' => 1])->where('r_type', '>', 4)->orderByDesc('id')->limit(10)->get();

            $meta_canonical = $request->url();
    		$viewData = [
    			'product' => $product,
    			'productSuggests' => $this->getProductSuggests($product->pro_category_id, $id),//sp cùng danh mục
                'proImages'      => $proImages,
                'productsSale'   => $productsSale,
                'meta_canonical' => $meta_canonical, 
                'ratings'        => $ratings,
                'title_page'    => $product->pro_name
    		];

    		return view('frontend.product_detail.index', $viewData);
    	}else {
            return view('frontend.404.index');
        }
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
