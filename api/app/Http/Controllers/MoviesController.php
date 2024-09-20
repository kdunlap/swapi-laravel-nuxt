<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\Services\MoviesServiceInterface;
use Illuminate\Http\JsonResponse;

class MoviesController extends Controller
{
    public function __construct(
        private readonly MoviesServiceInterface $moviesService
    ) {}

    public function index(Request $request): JsonResponse
    {
        $movies = $this->moviesService->search($request->query('search', ''));

        return response()->json($movies);
    }

    public function show(string $id): JsonResponse
    {
        $movie = $this->moviesService->findById($id);

        return response()->json($movie);
    }
}
