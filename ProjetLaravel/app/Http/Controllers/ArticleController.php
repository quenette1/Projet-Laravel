<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function edit(Request $request): View
    {
        return view('article.edit', [
            'article' => $request->user(),
        ]);
    }
}
