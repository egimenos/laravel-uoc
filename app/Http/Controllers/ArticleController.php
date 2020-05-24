<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $itemsPerPage = 10;
        $page = $request->query('page');

        return Article::offset(($page - 1)*$itemsPerPage)->limit($itemsPerPage)->get();

    }

    public function show($id)
    {
       return Article::where('id', $id)->get();
    }

}
