<?php

  $qury1 = "SELECT * from seat ";
   
  
    $result1 = mysqli_query($getConnection,$qury1);

    ?>
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
