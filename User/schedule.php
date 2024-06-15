<?php
include '../Config/Connection.php';
$qury = "SELECT * FROM movie";
$result = mysqli_query($getConnection, $qury);
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Millennium Cinema - Movies</title>
    <link rel="stylesheet" href="../Styles/styleSchedule.css">
    <link rel="stylesheet" href="../Styles/main.css">
    
</head>
<body>
   <?php include '../Add/header.php'?>

    <main class="main-content">
        <aside class="side">
            <section class="searchbar">
                <input type="text" placeholder="Search..." id="search">
            </section>
            <section class="categories">
                <h2>Categories</h2>
                <button class="category-toggle" aria-label="Toggle Categories">☰ Categories</button> 
                <div class="category-list">
                    <div class="category-item">
                        <input type="checkbox" id="Adventure" name="Adventure">
                        <label for="Adventure">Adventure</label>
                    </div>
                    <div class="category-item">
                        <input type="checkbox" id="Comedy" name="Comedy">
                        <label for="Comedy">Comedy</label>
                    </div>
                    <div class="category-item">
                        <input type="checkbox" id="Sci-fi" name="Sci-fi">
                        <label for="Sci-fi">Sci-fi</label>
                    </div>
                    <div class="category-item">
                        <input type="checkbox" id="Thriller" name="Thriller">
                        <label for="Thriller">Thriller</label>
                    </div>
                    <div class="category-item">
                        <input type="checkbox" id="Action" name="Action">
                        <label for="Action">Action</label>
                    </div>
                    <div class="category-item">
                        <input type="checkbox" id="American" name="American">
                        <label for="American">American</label>
                    </div>
                    <div class="category-item">
                        <input type="checkbox" id="Ethiopian" name="Ethiopian">
                        <label for="Ethiopian">Ethiopian</label>
                    </div>
                    <div class="category-item">
                        <input type="checkbox" id="Others" name="Others">
                        <label for="Others">Others</label>
                    </div>
                </div>
            </section>
        </aside>

        <section class="main">
            <div class="movie-grid">
                <?php if (mysqli_num_rows($result) > 0) {
                    $i = 0;
                    while ($data = mysqli_fetch_assoc($result)) {
                        ?>
                         
                        <div class="movie-card" data-title="<?php echo $data['title'];
                        $_SESSION['movie_id'] = $data['id']; ?>" data-category="<?php echo $data['category']; ?>" data-country="<?php echo $data['country']; ?>" style="background-image: url('../Assets/ScheduleAssets/Images/<?php echo $data['img']; ?>');">
                            <div class="movie-info">
                                <h3><?php echo $data['title']; ?></h3>
                                <p><?php echo $data['release_date']; ?></p>
                            </div>
                            <div class="movie-actions">
                                <button class="play-trailer" data-trailer="<?php echo $data['trial']; ?> ">Play Trailer</button>
                               
                                <button class="buy-ticket">Book Ticket</button>
                            </div>
                        </div>
                <?php $i++;}} ?>
                
            </div>
        </section>

        <section class="trailer">
            <div class="trailer-content">
                <video class="vid" controls></video>
                <button class="btn close" onclick="toggleVideo()">Close</button>
            </div>
        </section>
    </main>

   <?php include '../Add/footer.php'?>
 
    <script src="../JS/scriptsSchedule.js"></script>
   
</body>
</html>

