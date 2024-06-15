<?php
include "../CRUD/Connection.php";

$movie_id = 1;
$Movie_query = $getConnection->prepare("SELECT * FROM movie WHERE id = ?");
$Movie_query->bind_param("i", $movie_id);
$Movie_query->execute();
$Movie_result = $Movie_query->get_result();
$Movie_row = $Movie_result->fetch_assoc();

$Schedule_query = $getConnection->prepare("SELECT * FROM schedule WHERE `id` = ?");
$Schedule_query->bind_param("i", $movie_id);
$Schedule_query->execute();
$Schedule_result = $Schedule_query->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book</title>
  <link rel="stylesheet" href="../Styles/style.css">
  <link rel="stylesheet" href="./booking.css">
</head>
<body>
 <?php include("../header.php"); ?>
  <main class="main">
    <section class="movie__details">
      <figure class="movie__poster" style="background-image: url('../Assets/ScheduleAssets/Images/<?php echo $Movie_row['img']; ?>');"></figure>
      <div class="movie__description">
        <p>Title: <?php echo $Movie_row['title']; ?></p>
        <p>Release Date: <?php echo $Movie_row['release_date']; ?></p>
        <p>Category: <?php echo $Movie_row['category']; ?></p>
      </div>
    </section>
    <section class="movie__schedule">
      <h3>Schedule</h3>
      <div class="schedule">
        <?php
        if ($Schedule_result->num_rows > 0) {
            while ($Schedule_row = $Schedule_result->fetch_assoc()) {
                echo '<div class="schedule__item">';
                echo '<p>Date: ' . $Schedule_row['Date'] . '</p>';
                echo '<p>Time: ' . $Schedule_row['Time'] . '</p>';
                echo '<p>Hall: ' . $Schedule_row['Hall'] . '</p>';
                echo '<button class="book__button" data-schedule-id="' . $Schedule_row['ID'] . '">Book Now</button>';
                echo '</div>';
            }
        } else {
            echo "<p>No schedule available for this movie.</p>";
        }
        ?>
      </div>
    </section>
    <section class="seatArrangement">
      <h1>Seat Arrangement</h1>
      <div class="seatArrangementTable">
        <div class="seats">
          <div class="leftSide"></div>
          <div class="middleSide"></div>
          <div class="rightSide"></div>
        </div>
        <div class="status">
          <p class="errorText"></p>
          <div class="item">
            <svg class="statusAvailable" xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48"><path d="M160-120v-220h640v220h-60v-160H220v160h-60Zm9.882-290Q149-410 134.5-424.618q-14.5-14.617-14.5-35.5Q120-481 134.618-495.5q14.617-14.5 35.5-14.5Q191-510 205.5-495.382q14.5 14.617 14.5 35.5Q220-439 205.382-424.5q-14.617 14.5-35.5 14.5ZM280-400v-380q0-24.75 17.625-42.375T340-840h280q24.75 0 42.375 17.625T680-780v380H280Zm509.882-10Q769-410 754.5-424.618q-14.5-14.617-14.5-35.5Q740-481 754.618-495.5q14.617-14.5 35.5-14.5Q811-510 825.5-495.382q14.5 14.617 14.5 35.5Q840-439 825.382-424.5q-14.617 14.5-35.5 14.5ZM340-460h280v-320H340v320Zm0 0h280-280Z"/></svg>
            <p>Available</p>
          </div>
          <div class="item">
            <svg class="statusBooked" xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48"><path d="M160-120v-220h640v220h-60v-160H220v160h-60Zm9.882-290Q149-410 134.5-424.618q-14.5-14.617-14.5-35.5Q120-481 134.618-495.5q14.617-14.5 35.5-14.5Q191-510 205.5-495.382q14.5 14.617 14.5 35.5Q220-439 205.382-424.5q-14.617 14.5-35.5 14.5ZM280-400v-380q0-24.75 17.625-42.375T340-840h280q24.75 0 42.375 17.625T680-780v380H280Zm509.882-10Q769-410 754.5-424.618q-14.5-14.617-14.5-35.5Q740-481 754.618-495.5q14.617-14.5 35.5-14.5Q811-510 825.5-495.382q14.5 14.617 14.5 35.5Q840-439 825.382-424.5q-14.617 14.5-35.5 14.5ZM340-460h280v-320H340v320Zm0 0h280-280Z"/></svg>
            <p>Reserved</p>
          </div>
          <div class="item">
            <svg class="statusSelect" xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48"><path d="M160-120v-220h640v220h-60v-160H220v160h-60Zm9.882-290Q149-410 134.5-424.618q-14.5-14.617-14.5-35.5Q120-481 134.618-495.5q14.617-14.5 35.5-14.5Q191-510 205.5-495.382q14.5 14.617 14.5 35.5Q220-439 205.382-424.5q-14.617 14.5-35.5 14.5ZM280-400v-380q0-24.75 17.625-42.375T340-840h280q24.75 0 42.375 17.625T680-780v380H280Zm509.882-10Q769-410 754.5-424.618q-14.5-14.617-14.5-35.5Q740-481 754.618-495.5q14.617-14.5 35.5-14.5Q811-510 825.5-495.382q14.5 14.617 14.5 35.5Q840-439 825.382-424.5q-14.617 14.5-35.5 14.5ZM340-460h280v-320H340v320Zm0 0h280-280Z"/></svg>
            <p>Selected by you</p>
          </div>
        </div>
      </div>
    </section>
    <section class="buyingTickets">
      <div class="bookingDetails">
        <div class="movieName">Movie Name: <span id="selectedMovieName"></span></div>
        <div class="time">Time: <span id="selectedTime"></span></div>
        <div class="type">Type: <span id="selectedType"></span></div>
        <div class="cinemaHall">Cinema Hall: <span id="selectedHall"></span></div>
        <div class="seatNumber">Seat Number: <span id="selectedSeats"></span></div>
        <div class="seatPrice">Price: <span id="seatPrice">0</span> Br.</div>
      </div>
      <div class="buttons">
        <form action="book_seat.php" method="post" id="bookingForm">
          <input type="hidden" name="schedule_id" id="scheduleId">
          <input type="hidden" name="selected_seats" id="selectedSeatsInput">
          <button type="submit" class="btn btn__buy">Book Tickets</button>
        </form>
      </div>
    </section>
  </main>
  <?php include("../footer.php"); ?>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      let selectedSeats = [];
      let selectedMovieName = "<?php echo $Movie_row['title']; ?>";
      let scheduleButtons = document.querySelectorAll('.book__button');

      scheduleButtons.forEach(button => {
        button.addEventListener('click', function () {
          let scheduleId = this.getAttribute('data-schedule-id');
          let scheduleItem = this.closest('.schedule__item');
          let time = scheduleItem.querySelector('p:nth-child(2)').textContent.split(": ")[1];
          let hall = scheduleItem.querySelector('p:nth-child(3)').textContent.split(": ")[1];

          document.getElementById('selectedMovieName').textContent = selectedMovieName;
          document.getElementById('selectedTime').textContent = time;
          document.getElementById('selectedHall').textContent = hall;
          document.getElementById('scheduleId').value = scheduleId;
        });
      });

      let seats = document.querySelectorAll('.seat');

      seats.forEach(seat => {
        seat.addEventListener('click', function () {
          let seatNumber = this.getAttribute('data-seat-number');

          if (this.classList.contains('selected')) {
            this.classList.remove('selected');
            selectedSeats = selectedSeats.filter(seat => seat !== seatNumber);
          } else {
            this.classList.add('selected');
            selectedSeats.push(seatNumber);
          }

          document.getElementById('selectedSeats').textContent = selectedSeats.join(', ');
          document.getElementById('selectedSeatsInput').value = selectedSeats.join(', ');

          let seatPrice = selectedSeats.length * 10; // Assume each seat costs 10 Br.
          document.getElementById('seatPrice').textContent = seatPrice;
        });
      });
    });
  </script>
</body>
</html>
