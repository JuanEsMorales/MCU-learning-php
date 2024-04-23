<?php 
  // active the strict type check
  declare(strict_types = 1);
  $title = 'Welcome';

  function render_template(string $template, array $data = []) {
    extract($data);
    require "templates/$template.php";
  }

  function get_data(string $url) : array{
    global $title;
    //echo $title; --> To use the variables outside the function
    // easiest way to get the result
    $result = file_get_contents($url);  
    // An alternative solution is the file_get_contents
    // $result = file_get_contents(API_URL); <-- easiest way if we only want to do a GET request
    // Receive the data and decode it into an associative array
    $data = json_decode($result, true);
    return $data;
  }

  function get_days_message(int $days) {
    return match (true) {
      $days === 0 => "¡Hoy se estrena!",
      $days === 1 => "Mañana se estrena!",
      $days < 7   => "Se estrena en menos de una semana",
      $days < 30  => "Se estrena en menos de un mes",
      default     => "Faltan $days días hasta el estreno"
    };
  }
?>