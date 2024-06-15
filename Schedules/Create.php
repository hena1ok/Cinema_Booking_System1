<?php
include("Read.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Schedule</title>

</head>

<body>

    <Fieldset>
        <legend>
            <h2>Create Schedule</h2>
        </legend>
        <form action="InsertionHandlerSchedule.php" method="post" enctype="multipart/form-data">
            <label for="title">MovieId</label>
            <input type="number" name="MovieId" id="MovieId"><br><br>
            <label for="release_date">Date</label>
            <input type="date" name="Date" id="Date"><br><br>
            <label for="category">Time</label>
            <input type="time" name="Time" id="Time"><br><br>
            <label for="runtime">Hall</label>
            <input type="text" name="Hall" id="Hall"><br><br>
            
            <input type="submit" name="submit" value="Upload">
        </form>
    </Fieldset>


  


</body>

</html>