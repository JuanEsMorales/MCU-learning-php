<?php

declare (strict_types = 1);

class SuperHero {
 // promoted properties
  public function __construct(
    private string $name, 
    public array $powers, 
    public string $planet
    ) {
  }

  public function attack() {
    $power = $this->powers[array_rand($this->powers)] ;
    return "$this->name attacks with $power";
  }

  public function description() {
    $powers = implode(', ', $this->powers);
    return "$this->name is a superhero who comes from $this->planet and has $powers";
  }

  // static method for creating a new instance
  public static function createRandomHero() {
    $names = ["Thor", "Hammer", "Spiderman", "Wolverine", "Ironman", "Hulk"];
    $planets = ["Earth", "Mars", "Venus", "Jupiter", "Saturn", "Asgard", "Neptune"];
    // i need an array of 6 arrays of powers
    $powers = [["Super Strength", "flight", "Laser eyes"], ["Super Strength", "Super agility", "Spider Webs"], ["Regeneration", "Adamantium claws", "Super Strength"]];

    $name = $names[array_rand($names)];
    $planet = $planets[array_rand($planets)];
    $power = $powers[array_rand($powers)];
    return new self($name, $power, $planet);
  }
}

$hero = SuperHero::createRandomHero();

echo $hero->description();

