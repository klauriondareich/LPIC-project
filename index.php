<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LPIC</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body style="background: #f5f7f8;">

        <?php
                session_start();

                if(!isset($_SESSION["username"])){
                    header("Location: login.php");
                    exit(); 
                }
        ?>
    <div class="main-home-container">
       
        <nav>
            <ul>
                <li><a href="index.php">Mes cours</a></li>
                
                <li><?php echo $_SESSION["username"]; ?></li>
                <li class="logout">
                    <a href="">
                    Se déconnecter
                    </a>
                </li>
            </ul>
        </nav>

        <div class="bg-image">
        </div>

        <div class="main-content">
            <div class="course-header">
                <h1>Mes cours</h1>
                <p>Apprenez à votre rythme où que vous soyez.</p>
            </div>
            
            <div>
                
            </div>
            <div class="courses-block">

                <div class="course-item">
                    <div class="first-part">
                        <h3>Programmation avec Python et C</h3>
                        <p>Python est un langage de programmation inventé par Guido van Rossum. La première version de python est sortie en 1991.</p>
                        <a href="cours.php" class="btn-style">Allez au cours</a>
                    </div>
            
                    <img src="assets/img/web-course-2.jpg"   alt="">
                </div>

                <div class="course-item">
                    <div class="first-part">
                        <h3>Programmation avancée</h3>
                        <p>Le langage C est un langage de programmation qui appartient au paradigme de programmation impérative.</p>
                        <a href="#" class="btn-style">Allez au cours</a>
                    </div>
            
                    <img src="assets/img/c-language-2.jpg"   alt="">
            
                </div>
               
                <div class="course-item">
                    <div class="first-part">
                        <h3>Développement Web avec C#</h3>
                        <p>C# (prononcé « voir Sharp ») est un langage de programmation moderne, orienté objet et de type sécurisé.</p>
                        <a href="#" class="btn-style">Allez au cours</a>
                    </div>
            
                    <img src="assets/img/c-plus-plus.png"   alt="">
            
                </div>
            </div>
        </div>
    </div>
</body>
</html>