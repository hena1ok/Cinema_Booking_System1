<?php

 $qury2 = "SELECT * from hall ";
  $result2 = mysqli_query($getConnection,$qury2);
  ?>
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

