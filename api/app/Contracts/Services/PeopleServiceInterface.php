<?php

namespace App\Contracts\Services;

use App\Dto\PersonDto;


interface PeopleServiceInterface
{
  public function search(string $search = ""): array;
  public function findById(int $id): PersonDto;
}
