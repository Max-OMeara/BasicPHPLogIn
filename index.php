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
            <header>Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" placeholder="Enter your username" required>
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
        </div>
    </div>
</body>

</html>