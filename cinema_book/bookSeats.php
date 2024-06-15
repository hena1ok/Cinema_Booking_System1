<?php
include "../CRUD/Connection.php";

$data = json_decode(file_get_contents('php://input'), true);
$schedule_id = $data['schedule_id'];
$seats = $data['seats'];
$user_id = $_SESSION['user_id'];  // Assuming user ID is stored in the session

$response = ["success" => false];

if (!empty($schedule_id) && !empty($seats) && !empty($user_id)) {
    $getConnection->begin_transaction();
    try {
        foreach ($seats as $seat_id) {
            $stmt = $getConnection->prepare("SELECT status FROM seats WHERE seat_id = ? AND movie_id = ?");
            $stmt->bind_param("ii", $seat_id, $movie_id);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();

            if ($row['status'] !== 'booked') {
                $updateStmt = $getConnection->prepare("UPDATE seats SET status = 'booked', booked_by = ? WHERE seat_id = ? AND movie_id = ?");
                $updateStmt->bind_param("iii", $user_id, $seat_id, $movie_id);
                $updateStmt->execute();
            } else {
                throw new Exception("Seat already booked");
            }
        }
        $getConnection->commit();
        $response["success"] = true;
    } catch (Exception $e) {
        $getConnection->rollback();
        $response["error"] = $e->getMessage();
    }
} else {
    $response["error"] = "Invalid input";
}

echo json_encode($response);
?>
