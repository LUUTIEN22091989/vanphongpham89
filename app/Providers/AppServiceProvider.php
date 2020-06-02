<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //lấy danh mục cấp 1
        $categories = Category::where(['c_parent_id' => 0, 'c_status' => 1 ])->select('id', 'c_slug', 'c_name', 'c_parent_id')->get();
        //lấy danh mục cấp 2,3
        $_categories = Category::where('c_status', 1)->where('c_parent_id', '<>', 0)->select('id', 'c_slug', 'c_name', 'c_parent_id')->get();

        View::share([
            'categories'  => $categories,
            '_categories' => $_categories,
        ]);
    }
}
