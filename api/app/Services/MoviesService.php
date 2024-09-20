<?php

namespace App\Services;

use App\Contracts\Services\MoviesServiceInterface;
use App\Dto\MovieDto;
use Illuminate\Support\Facades\Http;

class MoviesService implements MoviesServiceInterface
{
  private $baseUri = 'https://swapi.dev/api/films';

  public function search(string $search = ""): array
  {
    $response = Http::get($this->baseUri, ["search" => $search]);

    $movieDtos = $response->collect("results")->map(function ($movie) {
      return MovieDto::create(
        $movie["episode_id"],
        $movie["title"],
        $movie["opening_crawl"],
        $movie["characters"],
      );
    });

    $json = $response->json();
    $json["results"] = $movieDtos;

    return $json;
  }

  public function findById(int $id): MovieDto
  {
    $response = Http::withUrlParameters([
      'endpoint' => $this->baseUri,
      'id' => $id,
    ])->get('{+endpoint}/{id}');

    return MovieDto::create(
      $response->json("episode_id"),
      $response->json("title"),
      $response->json("opening_crawl"),
      $response->json("characters"),
    );
  }
}
