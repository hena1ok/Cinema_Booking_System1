
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