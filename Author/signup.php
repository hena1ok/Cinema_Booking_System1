<?php

include("../Config/connection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $getConnection->real_escape_string($_POST['fname']);
    $lname = $getConnection->real_escape_string($_POST['lname']);
    $email = $getConnection->real_escape_string($_POST['email']);
    $password = $getConnection->real_escape_string($_POST['password']);
    $password = password_hash($getConnection->real_escape_string($_POST['password']), PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (firstName, lastName,email, password) VALUES ('$fname','$lname', '$email', '$password')";

    if ($getConnection->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $getConnection->error;
    }
}

$getConnection->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Millennium Cinema - Sign Up</title>
    <link rel="stylesheet" href="../Styles/stylesSignup.css">
    
</head>

<body>
   <?php include("../Add/header.php"); ?>

    <main class="main-content">
        <section class="form-section">
            <div class="container">
                <h2>Sign Up</h2>
                <form id="signupForm" action="signup.php" method="POST">
                    <div class="form-group">
                        <label for="fname">First Name:</label>
                        <input type="text" id="fname" name="fname" required>
                        <span class="error" id="fnameError"></span>
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name:</label>
                        <input type="text" id="lname" name="lname" required>
                        <span class="error" id="lnameError"></span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                        <span class="error" id="emailError"></span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                        <span class="error" id="passwordError"></span>
                    </div>
                    <div class="form-group">
                        <label for="cpassword">Confirm Password:</label>
                        <input type="password" id="cpassword" name="cpassword" required disabled>
                        <span class="error" id="cpasswordError"></span>
                    </div>
                    <div class="form-group">
                        <label><input type="checkbox" id="terms" required> I agree to the terms and conditions!</label>
                        <span class="error" id="termsError"></span>
                    </div>
                    <button type="submit" class="btn" disabled>Sign Up</button>
                    <p>Already have an account? <a href="login.php">Sign In</a></p>
                </form>
            </div>
        </section>
    </main>
<?php include("../Add/footer.php"); ?>
    


 
    <script src="../JS/scriptsSignup.js"></script>
</body>

</html>
