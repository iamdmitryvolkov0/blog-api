<?php

namespace App\Actions;

use App\Models\Article;
use Illuminate\Http\JsonResponse;


class PutArticleDataAction
{
    public function execute($id, array $fields): JsonResponse
    {
        $article = Article::findOrFail($id);

        $article->title = $fields['title'];
        $article->body = $fields['body'];

        $article->save();

        return response()->json([
            'status' => true,
            'message' => 'Article updated',
        ])->setStatusCode('201', 'Article fully updated');
    }
}
