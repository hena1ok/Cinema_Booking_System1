<?php
include_once("../Config/Connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['video']) && isset($_FILES['image'])) {
    $video_name = $_FILES['video']['name'];
    $videoSize = $_FILES['video']['size'];
    $imgSize = $_FILES['image']['size'];
    $img_name = $_FILES['image']['name'];
    $temimg_name = $_FILES['image']['tmp_name'];
    $tmp_name = $_FILES['video']['tmp_name'];
    $error = $_FILES['video']['error'];
    $errori = $_FILES['image']['error'];

    if ($error == 0 && $errori == 0) {
        $video_ex = pathinfo($video_name, PATHINFO_EXTENSION);
        $image_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $video_ex_lc = strtolower($video_ex);
        $imgExtentionlc = strtolower($image_ex);
        $allowed_exs = array('mp4', 'webm', 'avi', 'flv');
        $allowedimgs = array('jpg', 'jpeg', 'png');
        $id = htmlspecialchars($_POST['id']);
        $title = htmlspecialchars($_POST['title']);
        $release_date = htmlspecialchars($_POST['release_date']);
        $category = htmlspecialchars($_POST['category']);
        $runtime = htmlspecialchars($_POST['runtime']);
       
        $country = htmlspecialchars($_POST['country']);
        
        if (in_array($video_ex_lc, $allowed_exs) && in_array($imgExtentionlc, $allowedimgs)) {
            if ($videoSize < 10000000000 && $imgSize < 500000000) {
                $new_name = uniqid("video-", true) . '.' . $video_ex_lc;
                $new_imgname = uniqid("Image-", true) . '.' . $imgExtentionlc;
                $video_upload_path = "../Assets/ScheduleAssets/trailers/" . $new_name;
                $image_upload_Path = "../Assets/ScheduleAssets/images/" . $new_imgname;
                
                move_uploaded_file($tmp_name, $video_upload_path);
                move_uploaded_file($temimg_name, $image_upload_Path);

                $sql = "UPDATE movie SET 
                    title='$title', 
                    release_date='$release_date', 
                    category='$category', 
                    runtime='$runtime', 
                    country='$country', 
                    img='$new_imgname', 
                    trial='$new_name' 
                    WHERE id='$id'";

                if (mysqli_query($getConnection, $sql)) {
                    header("Location: Update.php?success=Record updated successfully!");
                    exit();
                } else {
                    $em = "Database error: " . mysqli_error($getConnection);
                    header("Location: Update.php?error=$em");
                    exit();
                }
            } else {
                $em = "File is too big!";
                header("Location: Update.php?error=$em");
                exit();
            }
        } else {
            $em = "Invalid file format!";
            header("Location: Update.php?error=$em");
            exit();
        }
    } else {
        $em = "File upload error!";
        header("Location: Update.php?error=$em");
        exit();
    }
} else {
    header("Location: Update.php");
    exit();
}
?>
