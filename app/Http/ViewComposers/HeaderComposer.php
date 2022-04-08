<?php

namespace App\Http\ViewComposers;

use App\Models\Category;
use Illuminate\View\View;

class HeaderComposer
{
    public function compose(View $view){
        $les = ['is_online'=>1,'parent_id'=>null];
        $view->with('categories',Category::where($les)->get());
    }
}
