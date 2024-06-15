<?php
include_once("../../Config/Connection.php");

$query = "SELECT * FROM movie";
$result = mysqli_query($getConnection, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../../Styles/main.css">
      <link rel="stylesheet" href="../../Styles/stylec.css?v=<?php echo time(); ?>">
   
</head>
<body>
    <?php 
    if(isset($_POST['read'])){
        include "../../Add/crudhead.php";}?>
      
    
    <main>
        <fieldset>
            <legend><h2>Read</h2></legend>
            <table border="1" id="tbl">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Release Date</th>
                        <th>Category</th>
                        <th>Run Time</th>
                        <th>Country</th>
                        <th>Image</th>
                        <th>Trailer</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                        while ($data = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                                <td data-label='Id'>{$data['id']}</td>
                                <td data-label='Title'>{$data['title']}</td>
                                <td data-label='Release Date'>{$data['release_date']}</td>
                                <td data-label='Category'>{$data['category']}</td>
                                <td data-label='Run Time'>{$data['runtime']}</td>
                                <td data-label='Country'>{$data['country']}</td>
                                <td data-label='Image'><img src='../../Assets/ScheduleAssets/Images/{$data['img']}' alt='Image' width='100' height='100'></td>
                                <td data-label='Trailer'><video src='../../Assets/ScheduleAssets/trailers/{$data['trial']}' controls width='150' height='100'></video></td>
                            </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='8'>No data available</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </fieldset>
    </main>
</body>
</html>
