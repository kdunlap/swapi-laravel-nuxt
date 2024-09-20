<?php

namespace App\Contracts\Services;

use App\Dto\MovieDto;

interface MoviesServiceInterface
{
  public function search(string $search = ""): array;
  public function findById(int $id): MovieDto;
}
