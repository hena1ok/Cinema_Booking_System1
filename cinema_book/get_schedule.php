<?php
include "./CRUD/Connection.php";
$movie_id = $_GET['movie_id'];
$Schedule_query = "SELECT * FROM schedule WHERE movie_id = ?";
$stmt = $getConnection->prepare($Schedule_query);
$stmt->bind_param("i", $movie_id);
$stmt->execute();
$result = $stmt->get_result();

$schedules = [];
while ($row = $result->fetch_assoc()) {
    $schedules[] = $row;
}
echo json_encode($schedules);
?>
