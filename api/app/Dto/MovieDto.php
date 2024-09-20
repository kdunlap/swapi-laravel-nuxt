<?php

namespace App\Dto;

class MovieDto
{
  private function __construct(
    public readonly int $episode_id,
    public readonly string $title,
    public readonly string $opening_crawl,
    public readonly array $characters
  ) {}

  public static function create(int $episode_id, string $title, string $opening_crawl, array $characters): MovieDto
  {
    return new self($episode_id, $title, $opening_crawl, $characters);
  }
}
