 <?php
 
 include("Connection.php");
 
 
 
 if (isset($_POST['submit'])){

                    $id=htmlspecialchars($_POST['id']);
                    $sql = "delete from movie where `id`='$id' ";
                    mysqli_query($getConnection, $sql);
                    header("Location: Delete.php");
                    echo " Deletion Success!";
                
            } else {
                $em = "you Can't Delete this file";
                header("location: CRUD_Form.php?error=$em");
            }
        
    ?>