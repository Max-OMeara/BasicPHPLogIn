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
    <title>Weekly Job Information</title>
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
                $wage = mysqli_real_escape_string($con, $_POST['wage'] ?? '');
                $hours = mysqli_real_escape_string($con, $_POST['hours'] ?? '');

                
                $edit_query = "UPDATE users SET Wage = '$wage', Hours = '$hours' WHERE Id = '$id'";
                $result = mysqli_query($con, $edit_query) or die("Update Error Occurred");
                
                if ($result) {
                    echo "<div class='message'>
                    <p>Job Information Updated</p>
                    </div><br>";
                    echo "<a href='home.php'><button class='btn'>Go Back</button></a>";
                } else {
                    echo "<div class='message'>
                    <p>Job Update Failed</p>
                    </div><br>";
                    echo "<a href='index.php'><button class='btn'>Go Back</button></a>";
                }
            } else {
                $query = mysqli_query($con, "SELECT * FROM users WHERE Id = '$id'") or die("Select Error Occurred");
                $result = mysqli_fetch_assoc($query);
                if ($result) {
                    $res_Wage = $result['Wage'];
                    $res_Hours = $result['Hours'];
                }
            ?>
            <header>Edit Job Information</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="name">Wage</label>
                    <input type="text" name="wage" id="wage" value="<?php echo $res_Wage; ?>" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="email">Hours</label>
                    <input type="text" name="hours" id="hours" value="<?php echo $res_Hours; ?>" autocomplete="off" required>
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
