<?php

namespace App\Http\Controllers\Api;

use App\Actions\DeleteArticleAction;
use App\Http\Controllers\Controller;
use App\Actions\CreateArticleAction;
use App\Actions\GetAllArticlesAction;
use App\Actions\GetArticleAction;
use App\Actions\PatchArticleDataAction;
use App\Actions\PutArticleDataAction;
use App\Http\Requests\CreateArticleRequest;
use App\Http\Requests\PatchArticleRequest;
use App\Http\Requests\PutArticleRequest;
use Symfony\Component\HttpFoundation\JsonResponse;

class ArticlesController extends Controller
{
    public function showArticles(GetAllArticlesAction $action): JsonResponse
    {
        return $action->execute();
    }

    public function showArticle(GetArticleAction $action, int $id): JsonResponse
    {
        return $action->execute($id);
    }

    public function storeArticle(CreateArticleRequest $request, CreateArticleAction $action): JsonResponse
    {
        return $action->execute($request->validated());
    }

    public function putArticleData(PutArticleRequest $request, PutArticleDataAction $action, int $id): JsonResponse
    {
        return $action->execute($id, $request->validated());
    }

    public function patchArticleData(PatchArticleRequest $request, PatchArticleDataAction $action, int $id): JsonResponse
    {
        return $action->execute($id, $request->validated());
    }

    public function deleteArticle(DeleteArticleAction $action, int $id): JsonResponse
    {
        return $action->execute($id);
    }
}
