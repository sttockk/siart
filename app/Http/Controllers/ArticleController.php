<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function delete(Article $article): \Illuminate\Http\RedirectResponse
    {
        $article->delete();
        return redirect()->route('home');
    }

    public function isAuthor(User $user): ?bool
    {
        if ($this->trashed()) {
            return null;
        }

        return $this->users->contains($user);
    }
}
