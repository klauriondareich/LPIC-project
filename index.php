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
       
        <?php
            include("shared/nav.php")
        ?>
        <div class="form-page">


            <?php

                if (isset($_POST['submit'])) {


                    $filename = $_FILES['myfile']['name'];

                    $target = '/xampp/htdocs/lpic/assets/uploads/'.$filename;

                    $extension = strrchr($_FILES['myfile']['name'],'.');

                    if($extension == '.py' || $extension == ".c"){
            
                        echo "<p style='color: green; padding-left: 135px;'>Votre fichier a été soumi avec succès!</p>"; 
                        echo "<br> ";
                        echo "<p style='padding-left: 140px;'> Nom du fichier : $filename</p>";
                        move_uploaded_file($_FILES['myfile']['tmp_name'], $target);   
                    }
                    else {
                        echo "<p style='color: red; padding-left: 135px;'>Votre fichier n'est pas conforme</p>";

                    }
                }

            ?>
    
            
            <form  method="post" id="exo-form" enctype="multipart/form-data">
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
                <input type="file" name="myfile" id="myfile">
            
                <button type="submit" name="submit">Envoyer</button>
            </form>
        </div>
    </div>
</body>
</html>