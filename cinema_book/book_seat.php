<?php
include "../CRUD/Connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $schedule_id = $_POST['schedule_id'];
    $selected_seats = $_POST['selected_seats'];
    $seat_array = explode(",", $selected_seats);

    $success = true;

    foreach ($seat_array as $seat) {
        $query = $getConnection->prepare("INSERT INTO bookings (schedule_id, seat) VALUES (?, ?)");
        $query->bind_param("is", $schedule_id, $seat);
        if (!$query->execute()) {
            $success = false;
            break;
        }
    }

    if ($success) {
        header("Location: booking_success.php");
        exit();
    } else {
        echo "Error booking seats. Please try again.";
    }
}
?>
