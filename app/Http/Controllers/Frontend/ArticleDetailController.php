<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Product;

class ArticleDetailController extends Controller
{
    public function getArticleDetail(Request $request, $slug)
    {
    	$arraySlug = explode('-', $slug); //tách các phần tử qua dấu - của slug
    	$id = array_pop($arraySlug); // lấy phần tử cuối cùng sau khi tách

    	if ($id) {
            //show sp hot
            $productHot = Product::where(['pro_status' => 1, 'pro_hot' => 1])->orderByDesc('id')->limit(10)->get();
            // show bài viết mới nhất
            $articleNew = Article::where('a_active', 1)->select('id', 'a_name', 'a_slug', 'a_avatar')->orderByDesc('id')->limit(10)->get();

    		$article = Article::find($id);
    		$meta_canonical = $request->url();

    		$viewData = [
    			'article'    => $article,
                'productHot' => $productHot,
                'articleNew' => $articleNew,
                'meta_canonical' => $meta_canonical,
                'title_page' => $article->a_name
    		];
    		return view('frontend.article_detail.index', $viewData);
    	}

        return redirect()->route('get.news.list');
    }
}
