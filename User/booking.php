<?php
  include "../Config/Connection.php";
  
  session_start();
  $movie_id = $_SESSION['movie_id'];
  $user_id = $_SESSION['user_id'];
  $hall_id = 1;
  echo $movie_id;
  echo $user_id;

  $Schedule_query = "SELECT * from schedule WHERE Movie = $movie_id";
  $Schedule_result = mysqli_query($getConnection, $Schedule_query);

  $Movie_query = "SELECT * from movie WHERE Id = $movie_id";
  $Movie_result = mysqli_query($getConnection, $Movie_query);
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book</title>
  <link rel="stylesheet" href="../Styles/styleBooking.css?v=<?php echo time(); ?>">
 
</head>
<body>

<?php include("../Add/header.php"); ?>
  <main class="main">
    <section class="movie__schedule">
      <aside class="movie__details">
          <figure class="movie__poster">

          </figure>
          <div class="movie__description">
              <div class="template__description">
              <p>Title:</p>
              <p>Release Date:</p>
              <p>Category:</p>
              </div>
              <div class="movie__info">

              </div>
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
      <p class="screen">SCREEN</p>
      <div class="normal__seats">
        <div class="left__seats"></div>
        <div class="middle__seats"></div>
        <div class="right__seats"></div>
      </div>
      <div class="vip__seats"></div>
      <div class="status__description">
        <div class="available">
        <svg class="available__seat" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="800" height="800" viewBox="0 0 512 512"><path d="M406.069 388.414H105.931v-52.966c0-19.5 15.81-35.31 35.31-35.31h229.517c19.5 0 35.31 15.81 35.31 35.31v52.966zM129.472 211.862H61.79c-4.873 0-8.828 3.955-8.828 8.828v17.655c0 4.873 3.955 8.828 8.828 8.828h65.721l1.961-35.311zM382.528 211.862l1.96 35.31h65.721c4.873 0 8.828-3.955 8.828-8.828V220.69c0-4.873-3.955-8.828-8.828-8.828h-67.681z" /><path d="M105.931 335.448c0-13.33 7.477-24.806 18.388-30.808l3.187-57.468H70.621v105.931c0 9.754 7.901 17.655 17.655 17.655h17.655v-35.31zM384.49 247.172l3.196 57.468c10.902 6.003 18.379 17.479 18.379 30.808v35.31h17.655c9.754 0 17.655-7.901 17.655-17.655V247.172H384.49z" /><path d="M141.241 300.138h229.517c6.171 0 11.882 1.721 16.922 4.502L374.29 63.629C372.312 27.93 342.784 0 307.032 0H204.968c-35.752 0-65.28 27.93-67.257 63.629L124.319 304.64c5.04-2.781 10.752-4.502 16.922-4.502" /><path d="M339.026 74.414a8.82 8.82 0 0 1-8.801-8.342c-.68-12.297-10.876-21.937-23.19-21.937H204.962c-12.314 0-22.502 9.64-23.181 21.937-.274 4.864-4.378 8.527-9.304 8.333-4.864-.274-8.598-4.44-8.324-9.304 1.201-21.654 19.121-38.621 40.81-38.621h102.073c21.689 0 39.609 16.967 40.81 38.621.274 4.864-3.46 9.031-8.316 9.304-.177.009-.336.009-.504.009" /><path d="M353.103 512c-9.754 0-17.655-7.901-17.655-17.655V388.414h35.31v105.931c.001 9.754-7.9 17.655-17.655 17.655M176.552 494.345V388.414h-35.31v105.931c0 9.754 7.901 17.655 17.655 17.655 9.754 0 17.655-7.901 17.655-17.655" /></svg>
          <p>Available</p>

        </div>
        <div class="selected">
        <svg class="selected__seat" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="800" height="800" viewBox="0 0 512 512"><path d="M406.069 388.414H105.931v-52.966c0-19.5 15.81-35.31 35.31-35.31h229.517c19.5 0 35.31 15.81 35.31 35.31v52.966zM129.472 211.862H61.79c-4.873 0-8.828 3.955-8.828 8.828v17.655c0 4.873 3.955 8.828 8.828 8.828h65.721l1.961-35.311zM382.528 211.862l1.96 35.31h65.721c4.873 0 8.828-3.955 8.828-8.828V220.69c0-4.873-3.955-8.828-8.828-8.828h-67.681z" /><path d="M105.931 335.448c0-13.33 7.477-24.806 18.388-30.808l3.187-57.468H70.621v105.931c0 9.754 7.901 17.655 17.655 17.655h17.655v-35.31zM384.49 247.172l3.196 57.468c10.902 6.003 18.379 17.479 18.379 30.808v35.31h17.655c9.754 0 17.655-7.901 17.655-17.655V247.172H384.49z" /><path d="M141.241 300.138h229.517c6.171 0 11.882 1.721 16.922 4.502L374.29 63.629C372.312 27.93 342.784 0 307.032 0H204.968c-35.752 0-65.28 27.93-67.257 63.629L124.319 304.64c5.04-2.781 10.752-4.502 16.922-4.502" /><path d="M339.026 74.414a8.82 8.82 0 0 1-8.801-8.342c-.68-12.297-10.876-21.937-23.19-21.937H204.962c-12.314 0-22.502 9.64-23.181 21.937-.274 4.864-4.378 8.527-9.304 8.333-4.864-.274-8.598-4.44-8.324-9.304 1.201-21.654 19.121-38.621 40.81-38.621h102.073c21.689 0 39.609 16.967 40.81 38.621.274 4.864-3.46 9.031-8.316 9.304-.177.009-.336.009-.504.009" /><path d="M353.103 512c-9.754 0-17.655-7.901-17.655-17.655V388.414h35.31v105.931c.001 9.754-7.9 17.655-17.655 17.655M176.552 494.345V388.414h-35.31v105.931c0 9.754 7.901 17.655 17.655 17.655 9.754 0 17.655-7.901 17.655-17.655" /></svg>
          <p>Selected</p>

        </div>
        <div class="reserved">
        <svg class="reserved__seat" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="800" height="800" viewBox="0 0 512 512"><path d="M406.069 388.414H105.931v-52.966c0-19.5 15.81-35.31 35.31-35.31h229.517c19.5 0 35.31 15.81 35.31 35.31v52.966zM129.472 211.862H61.79c-4.873 0-8.828 3.955-8.828 8.828v17.655c0 4.873 3.955 8.828 8.828 8.828h65.721l1.961-35.311zM382.528 211.862l1.96 35.31h65.721c4.873 0 8.828-3.955 8.828-8.828V220.69c0-4.873-3.955-8.828-8.828-8.828h-67.681z" /><path d="M105.931 335.448c0-13.33 7.477-24.806 18.388-30.808l3.187-57.468H70.621v105.931c0 9.754 7.901 17.655 17.655 17.655h17.655v-35.31zM384.49 247.172l3.196 57.468c10.902 6.003 18.379 17.479 18.379 30.808v35.31h17.655c9.754 0 17.655-7.901 17.655-17.655V247.172H384.49z" /><path d="M141.241 300.138h229.517c6.171 0 11.882 1.721 16.922 4.502L374.29 63.629C372.312 27.93 342.784 0 307.032 0H204.968c-35.752 0-65.28 27.93-67.257 63.629L124.319 304.64c5.04-2.781 10.752-4.502 16.922-4.502" /><path d="M339.026 74.414a8.82 8.82 0 0 1-8.801-8.342c-.68-12.297-10.876-21.937-23.19-21.937H204.962c-12.314 0-22.502 9.64-23.181 21.937-.274 4.864-4.378 8.527-9.304 8.333-4.864-.274-8.598-4.44-8.324-9.304 1.201-21.654 19.121-38.621 40.81-38.621h102.073c21.689 0 39.609 16.967 40.81 38.621.274 4.864-3.46 9.031-8.316 9.304-.177.009-.336.009-.504.009" /><path d="M353.103 512c-9.754 0-17.655-7.901-17.655-17.655V388.414h35.31v105.931c.001 9.754-7.9 17.655-17.655 17.655M176.552 494.345V388.414h-35.31v105.931c0 9.754 7.901 17.655 17.655 17.655 9.754 0 17.655-7.901 17.655-17.655" /></svg>
          <p>Reserved</p>
        </div>
      </div>
    </section>

    <section class="booking__information">
        <div class="selected__schedule"></div>
        <div class="selected__seats"></div>
    </section>
  </main>
  <div class="final__page">
    <div class="checkout__content">

    </div>
  </div>
  <hr class="line__seperator">
  <button class="btn__book">Book</button>
  <?php include("../Add/footer.php"); ?>
</body>
</html>
<script src="./JS/main.js"></script>
<script>
  
  const scheduleElement = document.querySelector('.schedule');
  const leftSeatElement = document.querySelector('.left__seats');
  const rightSeatElement = document.querySelector('.right__seats');
  const middleSeatElement = document.querySelector('.middle__seats');
  const VIPSeatElement = document.querySelector('.vip__seats');
  const posterElement = document.querySelector('.movie__poster');
  const seatElement = document.createElement('svg');
  const checkoutElement = document.querySelector('.final__page');
  const bookButtonElement = document.querySelector('.btn__book');

  seatElement.innerHTML = '<svg class="seat" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="800" height="800" viewBox="0 0 512 512"><path d="M406.069 388.414H105.931v-52.966c0-19.5 15.81-35.31 35.31-35.31h229.517c19.5 0 35.31 15.81 35.31 35.31v52.966zM129.472 211.862H61.79c-4.873 0-8.828 3.955-8.828 8.828v17.655c0 4.873 3.955 8.828 8.828 8.828h65.721l1.961-35.311zM382.528 211.862l1.96 35.31h65.721c4.873 0 8.828-3.955 8.828-8.828V220.69c0-4.873-3.955-8.828-8.828-8.828h-67.681z" /><path d="M105.931 335.448c0-13.33 7.477-24.806 18.388-30.808l3.187-57.468H70.621v105.931c0 9.754 7.901 17.655 17.655 17.655h17.655v-35.31zM384.49 247.172l3.196 57.468c10.902 6.003 18.379 17.479 18.379 30.808v35.31h17.655c9.754 0 17.655-7.901 17.655-17.655V247.172H384.49z" /><path d="M141.241 300.138h229.517c6.171 0 11.882 1.721 16.922 4.502L374.29 63.629C372.312 27.93 342.784 0 307.032 0H204.968c-35.752 0-65.28 27.93-67.257 63.629L124.319 304.64c5.04-2.781 10.752-4.502 16.922-4.502" /><path d="M339.026 74.414a8.82 8.82 0 0 1-8.801-8.342c-.68-12.297-10.876-21.937-23.19-21.937H204.962c-12.314 0-22.502 9.64-23.181 21.937-.274 4.864-4.378 8.527-9.304 8.333-4.864-.274-8.598-4.44-8.324-9.304 1.201-21.654 19.121-38.621 40.81-38.621h102.073c21.689 0 39.609 16.967 40.81 38.621.274 4.864-3.46 9.031-8.316 9.304-.177.009-.336.009-.504.009" /><path d="M353.103 512c-9.754 0-17.655-7.901-17.655-17.655V388.414h35.31v105.931c.001 9.754-7.9 17.655-17.655 17.655M176.552 494.345V388.414h-35.31v105.931c0 9.754 7.901 17.655 17.655 17.655 9.754 0 17.655-7.901 17.655-17.655" /></svg>';
  var seatL = document.createElement('svg');
    var seatM = document.createElement('svg');
    var seatR = document.createElement('svg');
    var seatV = document.createElement('svg');
    seatL.innerHTML = seatElement.innerHTML; 
    seatR.innerHTML = seatL.innerHTML;
    seatM.innerHTML = seatR.innerHTML;
    seatV.innerHTML = seatM.innerHTML;

    //PHP CODE TO RETURN THE SCHEDULE OF THE SELECTED MOVIE
    <?php
  if(mysqli_num_rows($Schedule_result)>0){
    while($Schedule_row = mysqli_fetch_assoc($Schedule_result)){?>
    var scheduleDivElement = document.createElement('div');
    var dateSpan = document.createElement('span');
    var timeSpan = document.createElement('span');
    var hallSpan = document.createElement('span');
    dateSpan.innerHTML = "<?php echo $Schedule_row['Date']?>";
    timeSpan.innerHTML = "<?php echo $Schedule_row['Time']?>";
    hallSpan.innerHTML = "<?php echo $Schedule_row['Hall']?>";
             scheduleDivElement.appendChild(dateSpan);
             scheduleDivElement.appendChild(timeSpan);
             scheduleDivElement.appendChild(hallSpan);
             scheduleElement.appendChild(scheduleDivElement);

             scheduleDivElement.addEventListener('click', () => {
              <?php if($Schedule_row['Hall']==1){         
                ?>
                middleSeatElement.style.display = "none";
                 
                <?php }else{
                    
                  ?>
                  middleSeatElement.style.display = "grid";   
                  <?php }
                  $_SESSION['hall_id'] = $Schedule_row['Hall'];
                  $hall_id = $_SESSION['hall_id'];
                  ?>
             });      
  <?php
   }
}else{
  echo "Table is empty";
} 
  ?>

// PHP CODE TO RETURN THE SELECTED MOVIE POSTER

//   if(mysqli_num_rows($Movie_result)>0){
//     $Movie_row = mysqli_fetch_assoc($Movie_result);
//     ?>
//     posterElement.style.background = "url('Assets/Schedule Assets/Images/ echo $Movie_row['Image']?> ') 100% / cover no-repeat";
    
//   
//    }else{
//   echo "Table is empty";
// }

// PHP CODE TO RETURN THE SELECTED MOVIE DETAILS
<?php
  if(mysqli_num_rows($Movie_result)>0){
    $Movie_row = mysqli_fetch_assoc($Movie_result);
    ?>
    var movieTitle = document.createElement('p');
    var releaseDate = document.createElement('p');
    var category = document.createElement('p');
    var movieInfoElement = document.querySelector('.movie__info');
    
    movieTitle.innerHTML = "<?php echo $Movie_row['Title']?>";
    releaseDate.innerHTML = "<?php echo $Movie_row['Release_date']?>";
    category.innerHTML = "<?php echo $Movie_row['Category']?>";
    movieInfoElement.appendChild(movieTitle);
    movieInfoElement.appendChild(releaseDate);
    movieInfoElement.appendChild(category);
     
  <?php
   }else{
  echo "Table is empty";
}
?>

// PHP CODE TO RETURN THE SEATS BASED ON HALL
<?php
$Seat_query = "SELECT * from seats WHERE hall = $hall_id";
$Seat_result = mysqli_query($getConnection, $Seat_query);

  if(mysqli_num_rows($Seat_result)>0 && mysqli_num_rows($Schedule_result)>0){
    while($Seat_row = mysqli_fetch_assoc($Seat_result)){?>
    
        <?php if($Seat_row['Side']=="L"){ ?>
                leftSeatElement.appendChild(seatL);
                  <?php }else if($Seat_row['Side']=="R"){?>
                    rightSeatElement.appendChild(seatR);
                    <?php }else{?>
                      VIPSeatElement.appendChild(seatV);
                  <?php }?>
     
        <?php }?>
 <?php
}else{
  echo "Table is empty";
} 
  ?>
</script>


  