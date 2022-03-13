<?php
    session_start();

    if(!isset($_SESSION["username"]) || $_SESSION["username"] == ""){
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
        
        <li><?php echo $_SESSION["username"]; ?></li>
        <li class="logout">
            <form action="" method="post">
                <button type="submit" name="logout">
                    Se déconnecter
                </button>
            </form>
        </li>
    </ul>
</nav>