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
    <div class="main-home-container">
       
        <nav>
            <ul>
                <li><a href="index.php">Mes cours</a></li>
                <!-- <li>Username</li> -->
                <li class="logout">
                    <a href="">
                    Se déconnecter
                    </a>
                </li>
            </ul>
        </nav>


        <div class="form-page">
            <form action="" id="exo-form" enctype="multipart/form-data">
                <select name="exoSelected" id="exoSelected">
                    <option>Choisir l'exercice</option>
                    <option value="exo1">Exercice 1</option>
                    <option value="exo2">Exercice 2</option>
                </select>
                <select name="langSelected" id="langSelected">
                    <option>Choisir un langage de programmation</option>
                    <option value="py">Python</option>
                    <option value="c">C</option>
                </select>
                <input type="file" name="fileToUpload" id="fileToUpload">
            
                <button>Envoyer</button>
            </form>
        </div>
    </div>
</body>
</html>