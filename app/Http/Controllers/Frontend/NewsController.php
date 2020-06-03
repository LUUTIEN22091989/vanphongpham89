<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Product;

class NewsController extends Controller
{
    public function index(Request $request)
    {
    	// seo
        $meta_canonical = $request->url();
        // end seo
        $articles = Article::where('a_active', 1)->select('id', 'a_name', 'a_slug','a_avatar', 'a_description', 'created_at')->orderByDesc('id')->paginate(6);
        //sp đang nổi bật
        $productsHot = Product::where(['pro_status' => 1, 'pro_hot' => 1])->select('id', 'pro_name', 'pro_slug', 'pro_image', 'pro_price', 'pro_sale')->orderByDesc('id')->limit(12)->get();
        //show tin tức nổi bật
            $articlesHot = Article::where(['a_active'=> 1, 'a_hot' => 1])->select('id', 'a_name', 'a_slug', 'a_avatar', 'created_at')->orderByDesc('id')->limit(12)->get();

        $viewData = [
            'articles'          => $articles,
            'productsHot'        => $productsHot,
            'articlesHot'       => $articlesHot,
            'meta_canonical'    => $meta_canonical,
            'title_page'        => "Tin tức"
    	];
        
    	return view('frontend.news.index', $viewData);
    }
}
