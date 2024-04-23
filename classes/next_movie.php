<?php
  declare(strict_types = 1);

  class NextMovie {
    public function __construct(
      private string $title,
      private int $days_until,
      private string $poster_url,
      private array $following_production,
      private string $overview,
      private string $release_date
    ) {
    }

    public function get_days_message() {
      $days = $this->days_until;
      return match (true) {
        $days === 0 => "¡Hoy se estrena!",
        $days === 1 => "Mañana se estrena!",
        $days < 7   => "Se estrena en menos de una semana",
        $days < 30  => "Se estrena en menos de un mes",
        default     => "Faltan $days días hasta el estreno"
      };
    }

    public static function create_movie(string $api_url) : NextMovie{
      $result = file_get_contents($api_url);  
      // An alternative solution is the file_get_contents
      // $result = file_get_contents(API_URL); <-- easiest way if we only want to do a GET request
      // Receive the data and decode it into an associative array
      $data = json_decode($result, true);

      return new self(
        $data['title'],
        $data['days_until'],
        $data['poster_url'],
        $data['following_production'],
        $data['overview'],
        $data['release_date']
      );
    }

    public function get_data() {
      return get_object_vars($this);
    }
  }