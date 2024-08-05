<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div class="banner">
        <p>BankBuddy finds your bank trends from PNC and Discover all in one place!</p>
    </div>
    <div class="container">
        <div class="box form-box">
            <?php
            include('php/config.php');
            if(isset($_POST['submit'])){
                $email = mysqli_real_escape_string($con, $_POST['email']);
                $password = mysqli_real_escape_string($con, $_POST['password']);
                
                // Hash the password using the same hashing method used when storing passwords
                //$hashed_password = md5($password); // Assuming passwords are stored with md5 hash
                
                $result = mysqli_query($con, "SELECT * FROM users WHERE Email = '$email' AND Password = '$password'") or die("Select Error Occurred");
                $row = mysqli_fetch_assoc($result);
                
                if($row){
                    $_SESSION['valid'] = $row['Email'];
                    $_SESSION['username'] = $row['Username'];
                    $_SESSION['age'] = $row['Age'];
                    $_SESSION['id'] = $row['Id'];
                    header("Location: home.php");
                    exit();
                } else {
                    echo "<div class='message'>
                    <p>Wrong Email or Password</p>
                    </div><br>";
                    echo "<a href='index.php'><button class='btn'>Go Back</button></a>";
                }
            }
            else{
            ?>
            <header>Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="Enter your email" required>
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" required>
                    <i class="fas fa-eye toggle"></i>
                </div>
                <div class="field">
                    <input type="submit" class="btn" name="submit">
                </div>
                <div class="link">
                    Not yet registered? Register <a class="here" href="register.php">Here</a>
                </div>
            </form>
            <?php
            } ?>
        </div>
    </div>
</body>

</html>
