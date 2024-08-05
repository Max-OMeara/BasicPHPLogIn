<?php
    session_start();
    include('php/config.php');
    if(!isset($_SESSION['valid'])){
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Home</title>
</head>

<body>
    <div class="nav">
        <div class="logo">
            <p> <a href="home.php">BankBuddy</a></p>
        </div>
        <div class="right-links">

            <?php
            $id = $_SESSION['id'];
            $query = mysqli_query($con, "SELECT * FROM users WHERE Id = '$id'") or die("Select Error Occurred");

            while($result = mysqli_fetch_assoc($query)){
                $res_User = $result['Username'];
                $res_Email = $result['Email'];
                $res_Age = $result['Age'];
                $res_Id = $result['Id'];
                $res_Name = $result['Name'];
                // add banking info here
            }

            //echo "<a href='edit.php'><button class='btn'>Change Profile</button></a>";
            ?>

            <a href="edit.php"><button class="btn">Change Profile</button></a>
            <a href="php/logout.php"><button class="btn">Log Out</button></a>
        </div>
    </div>
    <main>
        <div class="main-homeBox top">
            <div class="top">
                <div class="homeBox">
                    <p>BankBuddy finds your bank trends from PNC and Discover all in one place!</p>
                </div>
                <div class="homeBox">
                    <p>Welcome <b><?php echo $res_Name?></b></p>
                </div>
                <div class="homeBox">
                    <p>Income Trends: <b>here</b></p>
                </div>
                <div class="homeBox">
                    <p>Spending Trends: <b>here</b></p>
                </div>
                <div class="homeBox">
                    <p>Net Change: <b>here</b></p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
