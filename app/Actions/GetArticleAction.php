<?php

namespace App\Actions;

use App\Models\Article;
use Illuminate\Http\JsonResponse;

class GetArticleAction
{
    public function execute(int $id): JsonResponse
    {
        $article = Article::findOrFail($id);

        return response()->json($article, 200);
    }
}
