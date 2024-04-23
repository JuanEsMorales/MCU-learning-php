<body>
<h1 style="font-size: 35px;">Próxima pelicula de Marvel</h1>
<section>
  <div>
    <h2 style="font-size: 30px;"><?= $title;?> - <span><?= $until_message ?></span></h2>
    <img src="<?= $poster_url;?>" width="300" alt=<?="poster of the movie", $title?> style="border-radius: 10px;" />
    <p style="margin-top: 10px;"><?= $overview;?></p>
  </div>
</section>
<section>
  <h4>Fecha de estreno: <?= $release_date ?> </h4>
  <hr style="margin: auto; width: 50%;">
  <section>
    <h5 style="font-size: 20px; margin-top: 5px;">La siguiente es:</h5>
    <img src="<?= $following_production['poster_url'];?>" width="150" alt=<?="poster of the movie", $following_production['title']?> style="border-radius: 10px;" />
    <p style="font-size: 15px;"><?= $following_production['title'] ?></p>
  </section>
</section>
</body>
</html>