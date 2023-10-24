<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArticleCollection;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return new ArticleCollection(Article::paginate(5));
    }
}
