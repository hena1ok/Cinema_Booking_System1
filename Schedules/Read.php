<?php


  $qury = "SELECT * from schedule ";
    $result = mysqli_query($getConnection,$qury);

  ?>
  
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