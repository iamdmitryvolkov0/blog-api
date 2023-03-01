<?php

namespace App\Actions;

use App\Models\Article;


class CreateArticleAction
{
    public function execute(array $fields): void
    {
        Article::create([
            'title' => $fields['title'],
            'body' => $fields['body'],
        ]);
    }
}
