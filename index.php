<?php
  // Set the url
  const API_URL = 'https://www.whenisthenextmcufilm.com/api';
  // Initialize a curl session, ch = curl handle
  $ch = curl_init(API_URL);
  // Recieve results without displaying them in the browser
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  // Execute the request and save the result in a variable
  $result = curl_exec($ch);
  // An alternative solution is the file_get_contents
  // $result = file_get_contents(API_URL); <-- easiest way if we only want to do a GET request
  // Receive the data and decode it into an associative array
  $data = json_decode($result, true);
  // Close the connection, release resources used
  curl_close($ch);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
  />
  <title>Próxima pelicula de Marvel</title>
</head>
<body>
  <h1>Próxima pelicula de Marvel</h1>
  <section>
    <div>
      <h2><?= $data['title'];?></h2>
      <img src="<?= $data['poster_url'];?>" width="300" alt=<?="poster of the movie", $data['title']?> style="border-radius: 10px;" />
      <p><?= $data['overview'];?></p>
    </div>
  </section>
  <section>
    <h3>Se estrena en: <?= $data['days_until'] ?> días</h3>
    <h4>Fecha de estreno: <?= $data['release_date'] ?> </h4>
    <hr style="margin: auto; width: 50%;">
    <section>
      <h5 style="font-size: 20px; margin-top: 5px;">La siguiente es:</h5>
      <img src="<?= $data['following_production']['poster_url'];?>" width="150" alt=<?="poster of the movie", $data['following_production']['title']?> style="border-radius: 10px;" />
      <p style="font-size: 15px;"><?= $data['following_production']['title'] ?></p>
    </section>
  </section>
</body>
</html>


<style>
  :root {
    color-scheme: light dark;
  }
  body {
    display: flex;
    flex-direction: column;
    text-align: center;
    padding-top: 20px;
  }
  li {
    list-style-type: none;
  }
</style>