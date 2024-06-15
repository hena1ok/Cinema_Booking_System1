
<?php
include 'Connection.php';
if(isset($_POST['submit'])){
  $Letter =htmlspecialchars($_POST['Letter']);
  $Number =htmlspecialchars($_POST['Number']);
  $Type =htmlspecialchars($_POST['Type']);
  $Price =htmlspecialchars($_POST['Price']);
  $Hall =htmlspecialchars($_POST['HallSeat']);

  if($_POST['Type'] == 'on') {
    $Type = 1;
  } else {
    $Type = 0;
  }

  $sql = "INSERT into seat (`SeatLetter`,`SeatNumber`,`Type`,`Price`,`Status`)  values ('$Letter','$Number','$Type','$Price','$Hall')";
            mysqli_query($getConnection,$sql);
            echo "Success!";
            header("Location: Create.php");
            
    
    } else {
      echo "No Success!";
        header("Location: Read.php");
        
    }

    ?>



