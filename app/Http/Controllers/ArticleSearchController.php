<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArticleCollection;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleSearchController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return new ArticleCollection(
            Article::query()
                ->where(function ($query) use ($request) {
                    $query->where('title', 'LIKE', "%" . $request->input('query') . "%")
                        ->orWhere('body', 'LIKE', "%" . $request->input('query') . "%");
                })
                ->paginate(5));
    }
}
