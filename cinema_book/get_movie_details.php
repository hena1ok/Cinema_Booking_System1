<?php
include "../Connection.php";
$movie_id = 1;
$Movie_query = "SELECT * FROM movie WHERE id = ?";
$stmt = $getConnection->prepare($Movie_query);
$stmt->bind_param("i", $movie_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $movie = $result->fetch_assoc();
    echo json_encode($movie);
} else {
    echo json_encode([]);
}
?>
