<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div class="banner">
        <p>BankBuddy Tracks your spendings from PNC and Discover in one place!</p>
    </div>
    <div class="container">
        <div class="box form-box">
            <?php
            include('php/config.php');

            if (isset($_POST['submit'])) {
                $name = $_POST['name'] ?? '';
                $email = $_POST['email'] ?? '';
                $username = $_POST['username'] ?? '';
                $age = $_POST['age'] ?? '';
                $password = $_POST['password'] ?? '';

                // Check if email already exists
                $verify = mysqli_query($con, "SELECT Email FROM users WHERE Email = '$email'") or die("Error Occurred");
                if (mysqli_num_rows($verify) > 0) {
                    echo "<script>alert('Email already exists')</script>";
                    echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button></a>";
                } else {
                    // Validate inputs before inserting into database
                    if ($fullName && $email && $username && $age && $password) {
                        $query = "INSERT INTO users (name, Username, Email, Age, Password) VALUES ('$name', '$username', '$email', '$age', '$password')";
                        $result = mysqli_query($con, $query);
                        if ($result) {
                            echo "<script>alert('User Registered Successfully')</script>";
                            echo "<a href='index.php'><button class='btn'>Log In Now</button></a>";
                        } else {
                            echo "<script>alert('User Registration Failed')</script>";
                        }
                    } else {
                        echo "<script>alert('All fields are required')</script>";
                    }
                }
            } else {
            ?>
                <header>Sign Up</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="name">First Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter your first name" required>
                    </div>
                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="field input">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" placeholder="Enter your username" required>
                    </div>
                    <div class="field input">
                        <label for="age">Age</label>
                        <input type="text" name="age" id="age" placeholder="Enter your age" required>
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
                        Already Registered? Sign In <a class="here" href="index.php">Here</a>
                    </div>
                </form>
        </div>
        <?php } ?>
    </div>
</body>

</html>
