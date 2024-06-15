
<?php
include 'Connection.php';
if(isset($_POST['submit'])){
  $HallName =htmlspecialchars($_POST['HallName']);
  $Seats =htmlspecialchars($_POST['Seats']);


  $sql = "INSERT into hall (`HallName`,`AmountOfSeats`)  values ('$HallName','$Seats')";
            mysqli_query($getConnection,$sql);
            echo "Success!";
            header("Location: Create.php");
            
    
    } else {
      echo "No Success!";
        header("Location: Read.php");
        
    }

    ?>



