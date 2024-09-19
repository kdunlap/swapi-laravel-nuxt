<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PeopleController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            ['name' => 'Test 1'],
            ['name' => 'Test 2']
        ]);
    }

    public function show(string $id): JsonResponse
    {
        return response()->json([
            'name' => 'Test 1'
        ]);
    }
}
