<?php

namespace App\Actions;

use App\Models\Article;
use Illuminate\Http\JsonResponse;

class DeleteArticleAction
{
    public function execute(int $id): JsonResponse
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return response()->json([
            'status' => true,
            'message' => 'Article deleted',
        ])->setStatusCode('201', 'Article deleted');
    }
}
