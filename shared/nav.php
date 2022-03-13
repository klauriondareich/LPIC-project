<?php
    session_start();

    if(!isset($_SESSION["email"]) || $_SESSION["email"] == ""){
        header("Location: login.php");
        exit(); 
    }

    if(isset($_POST["logout"])){

        session_destroy();
        header("Location: login.php");
        exit(); 
    }
    
?>  
<nav>
    <ul>
        <li><a href="index.php">Mes cours</a></li>
        
        <li><?php echo $_SESSION["email"]; ?></li>
        <li class="logout">
            <form action="" method="post">
                <button class="logout-btn" type="submit" name="logout">
                    Se déconnecter
                </button>
            </form>
        </li>
    </ul>
</nav>
