<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
    <link rel="stylesheet" href="./Styles/style.css">
    <link rel="stylesheet" href="../Styles/main.css">
    
<style>
/* Add custom styles for better look and feel */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
}

.main {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
}

.movie__schedule {
    display: flex;
    justify-content: space-between;
    width: 80%;
    margin-bottom: 20px;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.movie__details {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.movie__poster {
    width: 200px;
    height: 300px;
    background-color: #ccc;
    margin-bottom: 20px;
}

.movie__description {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.template__description,
.movie__info {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.schedule {
    flex: 2;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.template__schedule {
    display: flex;
    justify-content: space-between;
    width: 100%;
    padding: 10px;
    background-color: #eee;
    margin-bottom: 10px;
}

.schedule-item {
    display: flex;
    justify-content: space-between;
    width: 100%;
    padding: 10px;
    background-color: #fff;
    margin-bottom: 10px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

.seat__arrangement {
    width: 80%;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.status__description {
    display: flex;
    justify-content: space-around;
    padding: 20px 0;
}

.available, .selected, .reserved {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.booking__information {
    width: 80%;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
</style>

</head>
<body>
    <?php include("../header.php"); ?>
    <main class="main">
        <section class="movie__schedule">
            <aside class="movie__details">
                <figure class="movie__poster"></figure>
                <div class="movie__description">
                    <div class="template__description">
                        <p>Title:</p>
                        <p>Release Date:</p>
                        <p>Category:</p>
                    </div>
                    <div class="movie__info"></div>
                </div>
            </aside>
            <div class="schedule">
                <section class="template__schedule">
                    <p>Date</p>
                    <p>Time</p>
                    <p>Hall</p>
                </section>
            </div>
        </section>
        <section class="seat__arrangement">
            <div class="normal__seats">
                <div class="left__seats"></div>
                <div class="middle__seats"></div>
                <div class="right__seats"></div>
            </div>
            <div class="vip__seats"></div>
            <div class="status__description">
                <div class="available">
                    <svg class="available__seat" viewBox="0 0 512 512">
                        <!-- SVG Content -->
                          <g>
            <g>
              <path  d="M406.069,388.414H105.931v-52.966c0-19.5,15.81-35.31,35.31-35.31h229.517
                c19.5,0,35.31,15.81,35.31,35.31V388.414z"/>
              <path  d="M129.472,211.862H61.79c-4.873,0-8.828,3.955-8.828,8.828v17.655c0,4.873,3.955,8.828,8.828,8.828
                h65.721L129.472,211.862z"/>
              <path  d="M382.528,211.862l1.96,35.31h65.721c4.873,0,8.828-3.955,8.828-8.828V220.69
                c0-4.873-3.955-8.828-8.828-8.828H382.528z"/>
            </g>
            <g>
              <path  d="M105.931,335.448c0-13.33,7.477-24.806,18.388-30.808l3.187-57.468H70.621v105.931
                c0,9.754,7.901,17.655,17.655,17.655h17.655V335.448z"/>
              <path  d="M384.49,247.172l3.196,57.468c10.902,6.003,18.379,17.479,18.379,30.808v35.31h17.655
                c9.754,0,17.655-7.901,17.655-17.655V247.172H384.49z"/>
            </g>
            <path  d="M141.241,300.138h229.517c6.171,0,11.882,1.721,16.922,4.502L374.29,63.629
              C372.312,27.93,342.784,0,307.032,0H204.968c-35.752,0-65.28,27.93-67.257,63.629L124.319,304.64
              C129.359,301.859,135.071,300.138,141.241,300.138"/>
            <path  d="M339.026,74.414c-4.652,0-8.545-3.637-8.801-8.342c-0.68-12.297-10.876-21.937-23.19-21.937H204.962
              c-12.314,0-22.502,9.64-23.181,21.937c-0.274,4.864-4.378,8.527-9.304,8.333c-4.864-0.274-8.598-4.44-8.324-9.304
              c1.201-21.654,19.121-38.621,40.81-38.621h102.073c21.689,0,39.609,16.967,40.81,38.621c0.274,4.864-3.46,9.031-8.316,9.304
              C339.353,74.414,339.194,74.414,339.026,74.414"/>
             <g>
              <path  d="M353.103,512L353.103,512c-9.754,0-17.655-7.901-17.655-17.655V388.414h35.31v105.931
                C370.759,504.099,362.858,512,353.103,512"/>
              <path  d="M176.552,494.345V388.414h-35.31v105.931c0,9.754,7.901,17.655,17.655,17.655
                C168.651,512,176.552,504.099,176.552,494.345"/>
             </g>
            </g>
                    </svg>
                    <p>Available</p>
                </div>
                <div class="selected">
                    <svg class="selected__seat" viewBox="0 0 512 512">
                        <!-- SVG Content -->
                         <g>
            <g>
              <path  d="M406.069,388.414H105.931v-52.966c0-19.5,15.81-35.31,35.31-35.31h229.517
                c19.5,0,35.31,15.81,35.31,35.31V388.414z"/>
              <path  d="M129.472,211.862H61.79c-4.873,0-8.828,3.955-8.828,8.828v17.655c0,4.873,3.955,8.828,8.828,8.828
                h65.721L129.472,211.862z"/>
              <path  d="M382.528,211.862l1.96,35.31h65.721c4.873,0,8.828-3.955,8.828-8.828V220.69
                c0-4.873-3.955-8.828-8.828-8.828H382.528z"/>
            </g>
            <g>
              <path  d="M105.931,335.448c0-13.33,7.477-24.806,18.388-30.808l3.187-57.468H70.621v105.931
                c0,9.754,7.901,17.655,17.655,17.655h17.655V335.448z"/>
              <path  d="M384.49,247.172l3.196,57.468c10.902,6.003,18.379,17.479,18.379,30.808v35.31h17.655
                c9.754,0,17.655-7.901,17.655-17.655V247.172H384.49z"/>
            </g>
            <path  d="M141.241,300.138h229.517c6.171,0,11.882,1.721,16.922,4.502L374.29,63.629
              C372.312,27.93,342.784,0,307.032,0H204.968c-35.752,0-65.28,27.93-67.257,63.629L124.319,304.64
              C129.359,301.859,135.071,300.138,141.241,300.138"/>
            <path  d="M339.026,74.414c-4.652,0-8.545-3.637-8.801-8.342c-0.68-12.297-10.876-21.937-23.19-21.937H204.962
              c-12.314,0-22.502,9.64-23.181,21.937c-0.274,4.864-4.378,8.527-9.304,8.333c-4.864-0.274-8.598-4.44-8.324-9.304
              c1.201-21.654,19.121-38.621,40.81-38.621h102.073c21.689,0,39.609,16.967,40.81,38.621c0.274,4.864-3.46,9.031-8.316,9.304
              C339.353,74.414,339.194,74.414,339.026,74.414"/>
             <g>
              <path  d="M353.103,512L353.103,512c-9.754,0-17.655-7.901-17.655-17.655V388.414h35.31v105.931
                C370.759,504.099,362.858,512,353.103,512"/>
              <path  d="M176.552,494.345V388.414h-35.31v105.931c0,9.754,7.901,17.655,17.655,17.655
                C168.651,512,176.552,504.099,176.552,494.345"/>
             </g>
            </g>
                    </svg>
                    <p>Selected</p>
                </div>
                <div class="reserved">
                    <svg class="reserved__seat" viewBox="0 0 512 512">
                        <!-- SVG Content -->
                       
          <g>
            <g>
              <path  d="M406.069,388.414H105.931v-52.966c0-19.5,15.81-35.31,35.31-35.31h229.517
                c19.5,0,35.31,15.81,35.31,35.31V388.414z"/>
              <path  d="M129.472,211.862H61.79c-4.873,0-8.828,3.955-8.828,8.828v17.655c0,4.873,3.955,8.828,8.828,8.828
                h65.721L129.472,211.862z"/>
              <path  d="M382.528,211.862l1.96,35.31h65.721c4.873,0,8.828-3.955,8.828-8.828V220.69
                c0-4.873-3.955-8.828-8.828-8.828H382.528z"/>
            </g>
            <g>
              <path  d="M105.931,335.448c0-13.33,7.477-24.806,18.388-30.808l3.187-57.468H70.621v105.931
                c0,9.754,7.901,17.655,17.655,17.655h17.655V335.448z"/>
              <path  d="M384.49,247.172l3.196,57.468c10.902,6.003,18.379,17.479,18.379,30.808v35.31h17.655
                c9.754,0,17.655-7.901,17.655-17.655V247.172H384.49z"/>
            </g>
            <path  d="M141.241,300.138h229.517c6.171,0,11.882,1.721,16.922,4.502L374.29,63.629
              C372.312,27.93,342.784,0,307.032,0H204.968c-35.752,0-65.28,27.93-67.257,63.629L124.319,304.64
              C129.359,301.859,135.071,300.138,141.241,300.138"/>
            <path  d="M339.026,74.414c-4.652,0-8.545-3.637-8.801-8.342c-0.68-12.297-10.876-21.937-23.19-21.937H204.962
              c-12.314,0-22.502,9.64-23.181,21.937c-0.274,4.864-4.378,8.527-9.304,8.333c-4.864-0.274-8.598-4.44-8.324-9.304
              c1.201-21.654,19.121-38.621,40.81-38.621h102.073c21.689,0,39.609,16.967,40.81,38.621c0.274,4.864-3.46,9.031-8.316,9.304
              C339.353,74.414,339.194,74.414,339.026,74.414"/>
             <g>
              <path  d="M353.103,512L353.103,512c-9.754,0-17.655-7.901-17.655-17.655V388.414h35.31v105.931
                C370.759,504.099,362.858,512,353.103,512"/>
              <path  d="M176.552,494.345V388.414h-35.31v105.931c0,9.754,7.901,17.655,17.655,17.655
                C168.651,512,176.552,504.099,176.552,494.345"/>
             </g>
            </g>
          
                    </svg>
                    <p>Reserved</p>
                </div>
            </div>
        </section>
        <section class="booking__information">
            <div class="selected__schedule"></div>
            <div class="selected__seats"></div>
            <form id="bookingForm" method="POST" action="book_seat.php">
                <input type="hidden" name="movie_id" id="movieId">
                <input type="hidden" name="schedule_id" id="scheduleId">
                <input type="hidden" name="selected_seats" id="selectedSeats">
                <button type="submit">Book Seats</button>
            </form>
        </section>
    </main>
    <?php include("../footer.php"); ?>
    <script src="../JS/main.js"></script>
</body>
</html>


<script>
document.addEventListener('DOMContentLoaded', () => {
    const posterElement = document.querySelector('.movie__poster');
    const scheduleElement = document.querySelector('.schedule');
    const movieInfoElement = document.querySelector('.movie__info');
    const bookingForm = document.getElementById('bookingForm');
    const movieIdInput = document.getElementById('movieId');
    const scheduleIdInput = document.getElementById('scheduleId');
    const selectedSeatsInput = document.getElementById('selectedSeats');

    <?php if (mysqli_num_rows($Schedule_result) > 0 && mysqli_num_rows($Movie_result) > 0): ?>
        <?php while ($Schedule_row = mysqli_fetch_assoc($Schedule_result)): ?>
            const scheduleDivElement = document.createElement('div');
    scheduleDivElement.classList.add('schedule-item');
    scheduleDivElement.innerHTML = `
                <span><?php echo $Schedule_row["Date"]; ?></span>
                <span><?php echo $Schedule_row["Time"]; ?></span>
                <span><?php echo $Schedule_row["Hall"]; ?></span>
            `;
    scheduleDivElement.addEventListener('click', () => {
        scheduleIdInput.value = <?php echo $Schedule_row["id"]; ?>;
        updateSelectedSchedule(<?php echo $Schedule_row["id"]; ?>, '<?php echo $Schedule_row["Date"]; ?>', '<?php echo $Schedule_row["Time"]; ?>', '<?php echo $Schedule_row["Hall"]; ?>');
});
scheduleElement.appendChild(scheduleDivElement);
        <?php endwhile; ?>

        <?php $Movie_row = mysqli_fetch_assoc($Movie_result); ?>
    posterElement.style.backgroundImage = "url('../Assets/Images/<?php echo $Movie_row['img']; ?>')";
movieInfoElement.innerHTML = `
            <p><?php echo $Movie_row["title"]; ?></p>
            <p><?php echo $Movie_row["release_date"]; ?></p>
            <p><?php echo $Movie_row["category"]; ?></p>
        `;
movieIdInput.value = <?php echo $Movie_row["id"]; ?>;
    <?php else: ?>
    console.error("Table is empty");
    <?php endif; ?>

    function updateSelectedSchedule(scheduleId, date, time, hall) {
        const selectedScheduleDiv = document.querySelector('.selected__schedule');
        selectedScheduleDiv.innerHTML = `
            <p>Date: ${date}</p>
            <p>Time: ${time}</p>
            <p>Hall: ${hall}</p>
        `;
    }

document.querySelectorAll('.available__seat').forEach(seat => {
    seat.addEventListener('click', () => {
        seat.classList.toggle('selected__seat');
        updateSelectedSeats();
    });
});

document.querySelectorAll('.available__seat').forEach(seat => {
    seat.addEventListener('click', () => {
        seat.classList.toggle('selected__seat');
        updateSelectedSeats();
    });
});

function updateSelectedSeats() {
    const selectedSeats = document.querySelectorAll('.selected__seat');
    const selectedSeatsArray = Array.from(selectedSeats).map(seat => seat.parentElement.innerText.trim());
    selectedSeatsInput.value = JSON.stringify(selectedSeatsArray);
    const selectedSeatsDiv = document.querySelector('.selected__seats');
    selectedSeatsDiv.innerHTML = selectedSeatsArray.length > 0 ? `<p>Selected Seats: ${selectedSeatsArray.join(', ')}</p>` : '';
}

bookingForm.addEventListener('submit', event => {
    const selectedSeats = document.querySelectorAll('.selected__seat');
    if (selectedSeats.length === 0) {
        event.preventDefault();
        alert('Please select at least one seat.');
    }
});
    });
</script>
