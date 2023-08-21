<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $movies = Movie::paginate($perPage);
        return response()->json($movies);
    }
}
