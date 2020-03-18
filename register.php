<?php include("app/controllers/users.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up to my blog</title>
    <link rel="shortcut icon" type="image/ico" href="assets/images/favicon.ico">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" integrity="sha384-v8BU367qNbs/aIZIxuivaU55N5GPF89WBerHoGA4QTcbUjYiLQtKdrfXnqAcXyTv" crossorigin="anonymous">
    <!-- Custom Styling -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Candal&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
</head>
<body>
    <!-- include header here -->
    <?php include("app/includes/header.php"); ?>

    <div class="auth-content">
    
        <form action="register.php" method="post">
            <h2 class="form-title">Sign up</h2>

            <?php include("app/helpers/formErrors.php"); ?>

            <div>
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
            </div>

            <div>
                <label>Email &nbsp;address</label>
                <input type="text" name="email" value="<?php echo $email; ?>" class="text-input">
            </div>

            <div>
                <label>Password</label>
                <input type="password" name="password"  class="text-input">
            </div>

            <div>
                <label>Password Confirmation</label>
                <input type="password" name="passwordConf"  class="text-input">
            </div>
            <div>
                <button type="submit" name="register-btn" class="btn btn-big">Register</button>
            </div>
            <p>If you have already registered, click <a href="login.php">here</a> to login.</p>
    



        </form>
    </div>

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!-- Custom script -->
    <script src="assets/js/script.js"></script>

</body>
</html>