<?php
    session_start();
    include('php/config.php');
    if (!isset($_SESSION['valid'])) {
        header("Location: index.php");
        exit();
    }
    $id = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Change Profile</title>
</head>

<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php">BankBuddy</a></p>
        </div>
        <div class="right-links">
            <!-- <a href="edit.php"><button class="btn">Change Profile</button></a> -->
            <a href="home.php"><button class="btn">Back to Home</button></a>
            <a href="php/logout.php"><button class="btn">Log Out</button></a>
        </div>
    </div>
    <div class="container">
        <div class="box form-box">
            <?php
            if (isset($_POST['submit'])) {
                $name = mysqli_real_escape_string($con, $_POST['name'] ?? '');
                $email = mysqli_real_escape_string($con, $_POST['email'] ?? '');
                $username = mysqli_real_escape_string($con, $_POST['username'] ?? '');
                $password = mysqli_real_escape_string($con, $_POST['password'] ?? '');
                
                // You may want to hash the password if storing it
                // $hashed_password = md5($password);
                
                $edit_query = "UPDATE users SET Name = '$name', Email = '$email', Username = '$username', Password = '$password' WHERE Id = '$id'";
                $result = mysqli_query($con, $edit_query) or die("Update Error Occurred");
                
                if ($result) {
                    echo "<div class='message'>
                    <p>Profile Updated</p>
                    </div><br>";
                    echo "<a href='home.php'><button class='btn'>Go Back</button></a>";
                } else {
                    echo "<div class='message'>
                    <p>Update Failed</p>
                    </div><br>";
                    echo "<a href='index.php'><button class='btn'>Go Back</button></a>";
                }
            } else {
                $query = mysqli_query($con, "SELECT * FROM users WHERE Id = '$id'") or die("Select Error Occurred");
                $result = mysqli_fetch_assoc($query);
                if ($result) {
                    $res_Name = $result['Name'];
                    $res_Email = $result['Email'];
                    $res_Username = $result['Username'];
                    $res_Password = $result['Password'];
                }
            ?>
            <header>Edit Profile</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="<?php echo $res_Name; ?>" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" value="<?php echo $res_Email; ?>" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" value="<?php echo $res_Username; ?>" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" value="<?php echo $res_Password; ?>" autocomplete="off" required>
                </div>
                <div class="field">
                    <input type="submit" class="btn" name="submit">
                </div>
            </form>
            <?php
            } ?>
        </div>
    </div>
</body>

</html>
