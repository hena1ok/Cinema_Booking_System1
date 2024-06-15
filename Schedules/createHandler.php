
<?php
include 'Connection.php';
if(isset($_POST['submit'])){
  $MovieId =htmlspecialchars($_POST['MovieId']);
  $Date =htmlspecialchars($_POST['Date']);
  $Time =htmlspecialchars($_POST['Time']);
  $Hall =htmlspecialchars($_POST['Hall']);

  $sql = "INSERT into schedule (`Movie`,`Date`,`Time`,`Hall`)  values ('$MovieId','$Date','$Time','$Hall')";
            mysqli_query($getConnection,$sql);
            echo "Success!";
            header("Location: Create.php");
            
    
    } else {
      echo "No Success!";
        header("Location: Read.php");
        
    }

    ?>



