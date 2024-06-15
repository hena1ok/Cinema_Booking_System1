
<?php
include '../Config/Connection.php';
// uplode video
if(isset($_POST['submit'])&&isset($_FILES['video'])||isset($_FILES['image'])){
   
    $video_name=$_FILES['video']['name'];
    $videoSize=$_FILES['video']['size'];
    $imgSize=$_FILES['image']['size'];
    $img_name=$_FILES['image']['name'];
    $temimg_name="../Cinema_Booking_System/Cinema_Booking_System/Assets/ScheduleAssets/images".$img_name;
    $tmp_name=$_FILES['video']['tmp_name'];
    $error=$_FILES['video']['error'];
    $errori=$_FILES['image']['error'];
    
   
    if($error==0&&$errori==0){
        $id =htmlspecialchars($_POST['id']);
        $video_ex =pathinfo($video_name,PATHINFO_EXTENSION);
        $image_ex=pathinfo($img_name,PATHINFO_EXTENSION);
        $video_ex_lc = strtolower($video_ex);
        $imgExtentionlc=strtolower($image_ex);
        $allowed_exs =array('mp4','webm','avi','flv');
        $allowedimgs=array('jpg','jpeg','png');
        $title =htmlspecialchars($_POST['title']);
        $release_date =htmlspecialchars($_POST['release_date']);
        $category =htmlspecialchars($_POST['category']);
       
        $runtime =htmlspecialchars($_POST['runtime']);
       
        $country =htmlspecialchars($_POST['country']);
    if(in_array($video_ex_lc,$allowed_exs)&&in_array($imgExtentionlc,$allowedimgs)){
        if($videoSize<10000000000&&$imgSize<500000000){
            $new_name= uniqid("video-",true).'.'.$video_ex_lc;
                $new_imgname = uniqid("Image-",true).'.'.$imgExtentionlc;
            $video_upload_path = "../Assets/ScheduleAssets/trailers/".$new_name;
                $image_upload_Path = "../Assets/ScheduleAssets/images".$new_imgname;
            // move_uploaded_file($temimg_name,$image_upload_Path);
            // move_uploaded_file($tmp_name,$video_upload_path);
            $sql = "insert into movie (`id`,`title`,`release_date`,`category`,`runtime`,`country`,`img`,`trial`)  values ('$id','$title','$release_date','$category','$runtime','$country','$img_name','$video_name')";
            mysqli_query($getConnection,$sql);
            header("Location: Create.php");
            echo "Success!";
        }
            else{
                $em= "File is too big!";
                 header("location: Create.php?error=$em");
            }
        }
        else{
            $em="you Can't upload this file";
            header("location: Create.php?error=$em");
        }
    }

    } else {

        header("Location: Read.php");

    }



