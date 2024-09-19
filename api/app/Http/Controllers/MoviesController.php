<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class MoviesController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            ['name' => 'Name 1'],
            ['name' => 'Name 2']
        ]);
    }

    public function show(string $id): JsonResponse
    {
        return response()->json([
            'name' => 'Name 1'
        ]);
    }
}
