<?php
include "../Config/connection.php";



session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $getConnection->real_escape_string($_POST['email']);
    $password = $getConnection->real_escape_string($_POST['password']);

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $getConnection->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['firstName'].' '.$row['$lastName'];
            header("Location: indexWelcome.php");
            exit();
        } else {
            echo "Invalid email or password.";
        }
    } else {
        echo "Invalid email or password.";
    }
}

$getConnection->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Millennium Cinema - Login</title>
    <link rel="stylesheet" href="../Styles/stylesSignup.css">
      
</head>

<body>
 
<?php include("../Add/header.php"); ?>

    <main class="main-content">
        <section class="form-section">
            <div class="container">
                <h2>Login</h2>
                <form id="loginForm" action="login.php" method="POST">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                        <span class="error" id="emailError"></span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required disabled>
                        <span class="error" id="passwordError"></span>
                    </div>
                    <button type="submit" class="btn" disabled>Login</button>
                    <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
                </form>
            </div>
        </section>
       
    </main>


<?php include("../Add/footer.php"); ?>

  <script src="../JS/scriptsSignup.js"></script>
    
</body>

</html>


