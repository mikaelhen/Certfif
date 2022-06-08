<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar.css">
    <title>Navbar</title>
</head>

<body>

</body>

</html>

<body>
    <header>
        <div class="navbar">
            <div class="containnav">
                <div class="logo">
                    <a href="index.php"><img src="assets/img/logo.png" alt="logo"></a>
                </div>
                <label for="toggle">☰</label>
                <input type="checkbox" id="toggle">
                <div class="main_pages">
                    <a href="offres.php">Accueil</a>
                    <a href="candspont.php">Projet</a>
                    <a href="emplois_saisonnier.php">Nous contacter</a>
                    <!-- <div class="divconnection"> -->
                        <!-- <div> -->
                        <?php

                        // echo "session role :";
                        // echo $_SESSION['membres']['id'] ;

                        if (isset($_SESSION['membres'])) {
                            if ($_SESSION['membres']['role'] == 1) {
                                echo "<li><a class='connexion' href='profil.php'>Profil</a></li>";
                                echo "<li><a class='connexion' href='deconnexion.php'>Déconnexion</a></li>";
                            }
                            if ($_SESSION['membres']['role'] == 3) {
                                echo "<li><a class='connexion' href='profil.php'>Profil</a></li>";
                                echo "<li><a class='connexion' href='administration/gestionadm.php'>Administration</a></li> ";
                                echo "<li><a class='connexion' href='deconnexion.php'><i class='fa-solid fa-right-from-bracket rouge'></i></a></li>";
                            }
                        } else {
                            echo "
                            
                            <li><a class='connexion' href='connexion.php'><span class='bleu'>Connexion</span></a></li>
                            <li><a class='inscription' href='inscription.php'><span class='rose'>Inscription</span></a></li>
                            ";
                        }

                        ?>

                        <!-- </div> -->

                    <!-- </div> -->
                </div>
            </div>
        </div>
    </header>
</body>

</html>