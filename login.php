<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css"> 
</head>
<body class="login-body">

    <?php
        session_start();

        if (isset($_POST['submit'])) {

            $_SESSION["email"] = $_POST["email"];

            header("Location: index.php");
            exit();
        }
    ?>
    <div class="main-container-login">
        <form action="" method="post" id="login-form">
            <img src="assets/img/self-learner.png" width="400" alt="">
            <input type="email" name="email" placeholder="Enter votre email">
            <input type="password" name="password" placeholder="Entrer votre mot de passe">
            <button name="submit">Se connecter</button>
        </form>
    </div>
</body>
</html>