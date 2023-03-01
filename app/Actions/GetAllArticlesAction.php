<?php

namespace App\Actions;

use App\Models\Article;
use Illuminate\Http\JsonResponse;

class GetAllArticlesAction
{
    public function execute(): JsonResponse
    {
        $articles = Article::all();

        return response()->json([
            'status' => true,
            'articles' => $articles,
        ]);
    }
}
