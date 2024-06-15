<?php include "../Config/Connection.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Millennium Cinema - Book Your Movie</title>
  <link rel="stylesheet" href="../Styles/stylesHome.css">
 <link rel="stylesheet" href="../Styles/main.css">
  
 
</head>
<body>
 <?php include("../Add/header.php"); ?>

  <main class="main-content">
    <section class="hero">
      <div class="slider">
        <div class="slide active">
          <h1>Experience the Magic of Movies</h1>
          <p>At Millennium Cinema, movies are more than just entertainment; they are a portal to different worlds, a canvas for storytelling, and a shared experience that brings people together.</p>
          <a href="#" class="btn-book-now">Book Now</a>
        </div>
        <div class="slide">
          <h1>Immerse Yourself in Cinema</h1>
          <p>Enjoy the latest blockbusters and classic films in our state-of-the-art theaters with top-notch sound and picture quality.</p>
          <a href="#" class="btn-book-now">Book Now</a>
        </div>
        <div class="slide">
          <h1>Join Our Community of Movie Lovers</h1>
          <p>Get exclusive access to special screenings, events, and more when you become a member of Millennium Cinema.</p>
          <a href="#" class="btn-book-now">Join Now</a>
        </div>
      </div>
      <div class="navigation-dots">
        <span class="dot active"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </div>
    </section>

    <section class="featured-movies">
      <div class="container">
        <h2>Now Showing</h2>
        <div class="movies">
          <?php
         
          $sql = "SELECT * FROM movie";
          $result = $getConnection->query($sql);

          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  echo '<div class="movie-item">';
                  echo '<img src="../Assets/ScheduleAssets/Images/' . $row['img'] . '" alt="' . $row['title'] . '">';
                  echo '<h3>' . $row['title'] . '</h3>';
                  echo '<p class="short-desc">' . substr($row['description'], 0, 50) . '... <a href="#" class="read-more">Read More</a></p>';
                  echo '<p class="full-desc" style="display:none;">' . $row['description'] . ' <a href="#" class="read-less">Read Less</a></p>';
                  echo '</div>';
              }
          } else {
              echo '<p>No movies found</p>';
          }

          $getConnection->close();
          ?>
        </div>
      </div>
    </section>
  </main>

 <?php include("../Add/footer.php"); ?>


  <script src="../JS/scriptsHome.js"></script>
 
</body>
</html>
