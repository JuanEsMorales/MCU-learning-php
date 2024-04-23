<?php
  require_once 'functions.php';
  require_once 'consts.php';
  require_once 'classes/next_movie.php';
  // Initialize a curl session, ch = curl handle
  /* $ch = curl_init(API_URL);
  // Recieve results without displaying them in the browser
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  // Execute the request and save the result in a variable
  $result = curl_exec($ch); */

  $next_movie = NextMovie::create_movie(API_URL);
  $next_movie_data = $next_movie->get_data();
  $days_until = $next_movie->get_days_message();
  
  // Close the connection, release resources used
  //curl_close($ch);
?>
<?php render_template('head', $next_movie_data) ?>
<?php render_template('main', array_merge($next_movie_data, ["until_message" => $days_until]));  ?>
<?php render_template('styles'); ?>