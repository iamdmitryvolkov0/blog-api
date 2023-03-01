<?php

namespace App\Actions;

use App\Models\Article;
use Illuminate\Http\JsonResponse;


class PatchArticleDataAction
{
    public function execute($id, array $fields): JsonResponse
    {
        $article = Article::findOrFail($id);

        $article->title = $fields['title'] ?? $article->title;
        $article->body = $fields['body'] ?? $article ->body;

        $article->save();

        return response()->json([
            'status' => true,
            'message' => 'Article updated',
        ])->setStatusCode('201', 'Article partly updated');
    }
}
