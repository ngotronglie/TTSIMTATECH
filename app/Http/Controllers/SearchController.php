<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $data = $request->input('search');

        $searchResults = Post::where('title', 'like', '%' . $data . '%')
            ->orWhere('description', 'like', '%' . $data . '%')->get();

        return view(
            'clients.shearch',
            [
                'searchResults' => $searchResults,
                'searchQuery' => $data
            ]
        );
    }
}
