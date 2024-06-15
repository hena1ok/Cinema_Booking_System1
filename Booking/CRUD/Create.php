<?php
include("Read.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>

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

    <Fieldset>
        <legend>
            <h2>Create Hall</h2>
        </legend>
        <form action="InsertionHandlerHall.php" method="post" enctype="multipart/form-data">
            <label for="title">HallName</label>
            <input type="text" name="HallName" id="HallName"><br><br>
            <label for="release_date">Seats</label>
            <input type="number" name="Seats" id="Seats"><br><br>
            
            <input type="submit" name="submit" value="Upload">
        </form>
    </Fieldset>

    <Fieldset>
        <legend>
            <h2>Create Seat</h2>
        </legend>
        <form action="InsertionHandlerSeat.php" method="post" enctype="multipart/form-data">
            <label for="title">Letter</label>
            <input type="text" name="Letter" id="Letter" maxlength="2"><br><br>
            <label for="release_date">Number</label>
            <input type="number" name="Number" id="Number"><br><br>
            <label for="category">VIP</label>
            <input type="checkbox" name="Type" id="Type" checked="checked"><br><br>
            <label for="runtime">Price</label>
            <input type="number" name="Price" id="Price"><br><br>
            <label for="cost">Hall</label>
            <input type="number" name="HallSeat" id="HallSeat"><br><br>
            
            <input type="submit" name="submit" value="Upload">
        </form>
    </Fieldset>


</body>

</html>