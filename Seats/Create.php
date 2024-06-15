<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Seat</title>
</head>
<body>
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