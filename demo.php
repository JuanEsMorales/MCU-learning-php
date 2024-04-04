<?php
  // Variables
  $name = "Juan";
  $isDev = false;
  $age = 18;
  $address = "Calle 123";
  $cardinality = "sur";
  $gender = "male";

  $isOld = $age > 40;

  $newAge = $age + '1';

  $outputCardinality = "Vive en $address";
  $outputCardinality .= $cardinality;
  
  var_dump($name);
  var_dump($isDev);
  var_dump($age);
  echo is_int($newAge);
  // Constants
  define('LOGO_URL', 'https://www.phpdebtsolutions.com/wp-content/uploads/2019/08/php-front.png');

  $outputAge = match (true) {
    $age < 2 => "You are a baby, $name",
    $age < 13 => "You are a child, $name",
    $age < 18 => "You are a teenager, $name",
    $age < 21 => "You are a young adult, $name",
    $age >= 40 => "You are an ederly, $name",
    default => "You smell more like wood than fruit, $name"
  };

  $bestLanguages = ["PHP", "Java", "JavaScript", "Python", 1, 2];
  $bestLanguages[] = "C++";
  $bestLanguages[5] = "C#";

  // asociative array
  $person = [
    "name" => $name,
    "age" => $age,
    "gender" => $gender,
    "outputCardinality" => $outputCardinality,
    "bestLanguages" => $bestLanguages
  ];
  $person["bestLanguages"][] = "Lua"; 
?>

<h2>Los mejores lenguajes de programación:</h2>
<ul>
  <?php foreach ($bestLanguages as $key => $language) :?>
    <li><?=$key, " ", $language?></li>
  <?php endforeach;?>
</ul>
<h2><?= $outputAge ?></h2>

<img src="<?php echo LOGO_URL?>">
<h1>
  <?=$name , ' ', $newAge;
  ?>
</h1>
<h2>
  <?=$outputCardinality?>
</h2>


<style>
  :root {
    color-scheme: light dark;
  }
  body {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }
  li {
    list-style-type: none;
  }
</style>