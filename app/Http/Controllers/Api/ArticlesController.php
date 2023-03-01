<?php

namespace App\Http\Controllers\Api;

use App\Actions\CreateArticleAction;
use App\Actions\getAllArticlesAction;
use App\Actions\GetArticleAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateArticleRequest;
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

    public function storeArticle(CreateArticleRequest $request, CreateArticleAction $action)
    {
        $action->execute($request->validated());
    }
}
