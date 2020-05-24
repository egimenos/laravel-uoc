<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
     public function index(Request $request)
    {
        $itemsPerPage = 10;
        $page = $request->query('page');
        $id = $request->query('id');
        return Category::join('articles', 'articles.category_id', '=', 'categories.id')->where('categories.id', $id)->offset(($page - 1)*$itemsPerPage)->limit($itemsPerPage)->get();
    }
}
