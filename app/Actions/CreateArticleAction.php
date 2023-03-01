<?php

namespace App\Actions;

use App\Models\Article;
use Illuminate\Http\JsonResponse;


class CreateArticleAction
{
    public function execute(array $fields): JsonResponse
    {
        $article = Article::create([
            'title' => $fields['title'],
            'body' => $fields['body'],
        ]);

        return response()->json([
            'status' => true,
            'article' => $article,
        ])->setStatusCode('201', 'Article created');
    }
}
