
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUDE</title>
     <link rel="stylesheet" href="../../Styles/stylesSignup.css">
     <link rel="stylesheet" href="../../Styles/main.css">
   

</head>

<body>
     <?php
 include("../Add/Adminheader.php");
?>

    <Fieldset>
        <legend>
            <h2>Creat</h2>
        </legend>
       <form action="./createHandlerMovie.php" method="post" enctype="multipart/form-data" id="updateForm">
                <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" name="id" id="id" required>
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" required>
                </div>
                <div class="form-group">
                    <label for="release_date">Release Date</label>
                    <input type="date" name="release_date" id="release_date" required>
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <input type="text" name="category" id="category" required>
                </div>
                <div class="form-group">
                    <label for="runtime">Run Time</label>
                    <input type="time" name="runtime" id="runtime" required>
                </div>
                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" name="country" id="country" required>
                </div>
                <div class="form-group">
                    <label for="image">Poster</label>
                    <input type="file" name="image" id="image" accept="image/*" required>
                </div>
                <div class="form-group">
                    <label for="video">Trailer</label>
                    <input type="file" name="video" id="video" accept="video/*" required>
                </div>
                <button type="submit" class="btn" name="create">Create User</button>
            </form>
    </Fieldset>
    <?php
include("Read.php");
?>
 <?php
 include("../Add/footer.php");
?>


<script src="../../JS/main.js"></script>
<script src="../script.js"></script>
</body>

</html>