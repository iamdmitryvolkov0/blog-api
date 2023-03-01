<?php

namespace App\Http\Controllers\Api;

use App\Actions\getAllArticlesAction;
use App\Actions\GetArticleAction;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class ArticlesController extends Controller
{
    public function showArticles(GetAllArticlesAction $action): JsonResponse
    {
        return $action->execute();
    }

    public function showArticle(GetArticleAction $action, $id): JsonResponse
    {
        return $action->execute($id);
    }
}
