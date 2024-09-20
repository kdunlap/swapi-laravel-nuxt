<?php

namespace App\Services;

use App\Contracts\Services\PeopleServiceInterface;
use App\Dto\PersonDto;
use Illuminate\Support\Facades\Http;

class PeopleService implements PeopleServiceInterface
{
  private $baseUri = "https://swapi.dev/api/people";

  public function search(string $search = ""): array
  {
    $response = Http::get($this->baseUri, ["search" => $search]);

    $movieDtos = $response->collect("results")->map(function ($person) {
      return PersonDto::create(
        $person["name"],
        $person["birth_year"],
        $person["gender"],
        $person["eye_color"],
        $person["hair_color"],
        $person["height"],
        $person["mass"],
        $person["films"],
      );
    });

    $json = $response->json();
    $json["results"] = $movieDtos;

    return $json;
  }

  public function findById(int $id): PersonDto
  {
    $response = Http::withUrlParameters([
      "endpoint" => $this->baseUri,
      "id" => $id,
    ])->get("{+endpoint}/{id}");

    return PersonDto::create(
      $response->json("name"),
      $response->json("birth_year"),
      $response->json("gender"),
      $response->json("eye_color"),
      $response->json("hair_color"),
      $response->json("height"),
      $response->json("mass"),
      $response->json("films"),
    );
  }
}
