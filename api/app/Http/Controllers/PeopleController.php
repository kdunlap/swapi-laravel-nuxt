<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Contracts\Services\PeopleServiceInterface;

class PeopleController extends Controller
{
    public function __construct(
        private readonly PeopleServiceInterface $peopleService
    ) {}

    public function index(Request $request): JsonResponse
    {
        $movies = $this->peopleService->search($request->query('search', ''));

        return response()->json($movies);
    }

    public function show(string $id): JsonResponse
    {
        $movie = $this->peopleService->findById($id);

        return response()->json($movie);
    }
}
