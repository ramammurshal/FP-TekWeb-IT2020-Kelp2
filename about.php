<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="styleAbout.css">
    <link rel="icon" href="photos/listLast2.png">
</head>

<body>
  <?php 
    $usernameLogin = $_GET["usernameLogin"];
    $namaLogin = $_GET["namaLogin"];
  ?>

  <div class="header">
    <h1 class="back color"><a href="dashboard.php?usernameLogin=<?php echo $usernameLogin?>&namaLogin=<?php echo $namaLogin ?>" class="backButton">Back</a></h1> <!-- kasih link buat balik ke dashboard disini -->
    <h1 class="title"> About Us </h1>
  </div>
  <div class="wrapper">
    <div class="outer">
      <div class="card" style="--delay:-1;">
        <div class="content">
          <div class="img"><img src="photos/Farrell.jpg" alt="Farrel"></img></div>
          <div class="details">
            <span class="name">Muhammad Farrel Abdillah</span><br><p class="infos">NRP: 5027201057<br><br>saya rajin menabung, tapi malas keluar rumah.</p>
          </div>
        </div>
      </div>
      <div class="card" style="--delay:0;">
        <div class="content">
          <div class="img"><img src="photos/hakim.jpg" alt="Hakim"></img></div>
          <div class="details">
            <span class="name">Fatih Rian Hibatul Hakim</span><br><p class="infos">NRP: 5027201066<br><br>CRIMES IS THE WAY I FLY THROUUGH YOUUUU,IM STILLLLL IN THE DREEAAM SNEK EATER TERET TET TEEEEEEEET shneik eiter</p>
          </div>
        </div>
      </div>
      <div class="card" style="--delay:1;">
        <div class="content">
          <div class="img"><img src="photos/Rama.jpg" alt="Rama"></img></div>
          <div class="details">
            <span class="name">Rama Muhammad Murshal</span><br><p class="infos">NRP: 5027201041<br><br>Never stop dreaming.</p>
          </div>
        </div>
      </div>
      <div class="card" style="--delay:2;">
        <div class="content">
          <div class="img"><img src="photos/Hanif.jpg" alt="Hanif"></img></div>
          <div class="details">
            <span class="name">Muhammad Hanif Fatihurrizqi</span><br><p class="infos">NRP: 5027201068<br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit mauris</p>
          </div>
        </div>
      </div>
      <div class="card" style="--delay:2;">
        <div class="content">
          <div class="img"><img src="photos/Hilmi.jpg" alt="Hilmi"></img></div>
          <div class="details">
            <span class="name">Muhammad HilmI Azis</span><br><p class="infos">NRP: 5027201049<br><br>Email: muhammadhilmiazis@gmail.com. Berskill dan berpengalaman magang.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>