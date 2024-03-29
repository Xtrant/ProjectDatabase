<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>RUMAH SAKIT SUKA MUNDUR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Muli%7CRoboto:400,300,500,700,900" rel="stylesheet">
  </head>
  <body>
    <?php
    session_start();
    ?>

    <div class="main-nav">
        <ul class="nav">
          <li class="name"><a href="profileee.php">SUKA MUNDUR HOSPITAL</a></li>
          <li><a href="profileee.php">Home</a></li>
          <li><a href="index.php">Kuota Daftar</a></li>
          <li><a href="review.php">Review</a></li>
          <li><a href="#contact">Contact</a></li>
          <?php
          if (!isset($_SESSION['username'])) {?>
          <li><a href="login.php">Login</a></li>
          <li><a href="Register.php">Register</a></li>
          <?php } 
          else {
            echo"<li><a href='logout.php'>Logout</a></li>";
          }
          ?>
        </ul>
    </div>

    <header>
      <div class="profile-image">
      <h1 class="tag name">Welcome.</h1>
      <p class="taglocation">We are providing best <br> and affordable health care</p>
    </header>

    <main class="flex">
      <div id="about">
      <div class="card">
        <h2>Background</h2>
        <p>We offer quality medicine and health consultations</p>
        <p>With us you will receive the best treatment, diagnosis and attention. We care for our patients as our loved ones. 
‌           Make an appointment for a consultation by filling out the booking form below.</p>
</div>
</div>
<div id="about">
      <div class="card">
        <h2>Goals</h2>
        <p>Our Mission Is to Support the Good Health and Live</p>
    </div> 
    </div> 
    </main>
    <footer>
      <div id="contact">
      <div class="alamat">
        <p>Alamat <br> jalan Tawes No.18-20 Tanjung Priok, Jakarta Utara.</p>
      </div>
      <ul>
        <p>Contact Us.</p>
        <li><a href="https://twitter.com" class="social twitter">Twitter</a></li>
        <li><a href="https://linkedIn.com" class="social linkedlin">LinkedIn</a></li>
        <li><a href="https://instagram.com" class="social instagram">Instagram</a></li>
      </ul>
      <p class="copyright">Copyright 2023, Suka Mundur Hospital</p>
</div>
    </footer>
  </body>
  </html>