<?php

namespace App\Dto;

class PersonDto
{
  private function __construct(
    public readonly string $name,
    public readonly string $birth_year,
    public readonly string $gender,
    public readonly string $eye_color,
    public readonly string $hair_color,
    public readonly string $height,
    public readonly string $mass,
    public readonly array $movies
  ) {}

  public static function create(
    string $name,
    string $birth_year,
    string $gender,
    string $eye_color,
    string $hair_color,
    string $height,
    string $mass,
    array $movies,
  ) {
    return new self(
      $name,
      $birth_year,
      $gender,
      $eye_color,
      $hair_color,
      $height,
      $mass,
      $movies,
    );
  }
}
