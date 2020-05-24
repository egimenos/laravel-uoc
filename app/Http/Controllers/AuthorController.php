<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(Request $request)
    {
        $itemsPerPage = 10;
        $page = $request->query('page');
        $id = $request->query('id');
        return Author::join('articles', 'articles.author_id', '=', 'authors.id')->where('authors.id', $id)->offset(($page - 1) * $itemsPerPage)->limit($itemsPerPage)->get();
    }
}
