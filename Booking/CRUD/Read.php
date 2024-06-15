<?php
    include('Connection.php');
    $qury = "SELECT * from schedule ";
    $qury1 = "SELECT * from seat ";
    $qury2 = "SELECT * from hall ";
    $result = mysqli_query($getConnection,$qury);
    $result1 = mysqli_query($getConnection,$qury1);
    $result2 = mysqli_query($getConnection,$qury2);
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Read</title>
  <style>
        body{
            text-align: center;
            display: grid;

        }
        fieldset{
            text-align:left;
        }
        label,input{
            margin: 0.5rem;
          
        }  
        table{
            align-items: center;
            text-align: center;
            
            
        }
        tr,td{
            padding: 1rem;
        }
        a{
            text-decoration: none;
            margin: 1rem;
            border: 0.1rem black;
        }
        </style>
</head>
<body>
  <header>
    <h1>Welcome To The CRUD Form!</h1>
</header>
<nav>
    <a href="Create.php">Create</a>
    <a href="Read.php">Read</a>
    <a href="Update.php">Update</a>
    <a href="Delete.php">Delete</a>
</nav>

<fieldset>
    <legend> <h2>Read</h2></legend>
       
        <table border="1" id="tbl">
            <tr>
                <th>Id</th>
                <th>MovieID</th>
                <th>Date</th>
                <th>Time</th>
                <th>Hall</th>
            </tr>
        <tr>
        <?php
        if(mysqli_num_rows($result)>0){
 while($data=mysqli_fetch_assoc($result)){?>
                
        <td><?php echo $data['ID']?></td>
        <td><?php echo $data['Movie']?></td>
        <td><?php echo $data['Date']?></td>
        <td><?php echo $data['Time']?></td>
        <td><?php echo $data['Hall']?></td>
        
        

</tr>
                <?php
                   
                }
        }else{
            echo "<h1>Empty</h1>";
        }
        
        ?>
         
</table>
    </legend>
</fieldset>
<fieldset>
    <legend> <h2>Read</h2></legend>
       
        <table border="1" id="tbl">
            <tr>
                <th>Id</th>
                <th>SeatLetter</th>
                <th>SeatNumber</th>
                <th>Type</th>
                <th>Price</th>
                <th>Hall</th>
            </tr>
        <tr>
        <?php
        if(mysqli_num_rows($result1)>0){
 while($data=mysqli_fetch_assoc($result1)){?>
                
        <td><?php echo $data['Id']?></td>
        <td><?php echo $data['SeatLetter']?></td>
        <td><?php echo $data['SeatNumber']?></td>
        <td><?php echo $data['Type']?></td>
        <td><?php echo $data['Price']?></td>
        <td><?php echo $data['Status']?></td>
        
        

</tr>
                <?php
                   
                }
        }else{
            echo "<h1>Empty</h1>";
        }
        
        ?>
         
</table>
    </legend>
</fieldset>
<fieldset>
    <legend> <h2>Read</h2></legend>
       
        <table border="1" id="tbl">
            <tr>
                <th>Id</th>
                <th>name</th>
                <th>Seats</th>

            </tr>
        <tr>
        <?php
        if(mysqli_num_rows($result2)>0){
 while($data=mysqli_fetch_assoc($result2)){?>
                
        <td><?php echo $data['Id']?></td>
        <td><?php echo $data['HallName']?></td>
        <td><?php echo $data['AmountOfSeats']?></td>
        
        

</tr>
                <?php
                   
                }
        }else{
            echo "<h1>Empty</h1>";
        }
        
        ?>
         
</table>
    </legend>
</fieldset>

</body>
</html>