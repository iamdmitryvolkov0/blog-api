<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id Model ID
 * @property string $title Title of Article
 * @property string $body Content of Article
 */
class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body'];
}
