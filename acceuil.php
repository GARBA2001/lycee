<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/style-tableau.css">
    <link rel="stylesheet" href="Styles/boostrap-5.2.3-dist/boostrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <title>La liste des étudiants</title>
</head>
<body>

<header class="topnav" id="myTopnav">
    <a href="enregistrement.php"><img class="logo" src="Images/image1.png" alt="Smiley face"></a>
    <div class="navlist" id="navlist">
        <a class="cursor0" href="#home">&nbsp</a>
        <a class="navoption active" href="#home">Accueil</a>
        <a class="navoption" href="enregistrement.php">Ajouter un étudiant</a>
        <a class="navoption" href="#contact">Modification</a>
        <a class="navoption" href="#about">Rechercher</a>
        <a class="navoption" href="#about">Afficher la liste des étudiants</a>
        <a href="deconnexion.php" class="navoption">Déconnexion</a>
        <a href="javascript:void(0);" class="icon" id="hamburger">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</header>

<section>
    <h1>My ufr-sds-online</h1>
    <p>L'application web officielle de l'UFR-SDS de l'Université Joseph Ki-Zerbo</p>
</section>

<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Genre</th>
            <th>Date de naissance</th>
            <th>Date d'admission</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($donnees as $row) : ?>
            <tr>
                <td><?php echo $row['ID']; ?></td>
                <td><?php echo $row['nom']; ?></td>
                <td><?php echo $row['prenom']; ?></td>
                <td><?php echo $row['Genre']; ?></td>
                <td><?php echo $row['date_naissance']; ?></td>
                <td><?php echo $row['date_admission']; ?></td>
                <td>
                    <a href="modifier.php?id=<?php echo $row['ID']; ?>"><i class="fas fa-edit"></i></a>
                    <a href="supprimer.php?id=<?php echo $row['ID']; ?>"><i class="fas fa-trash"></i></a>
                    <a href="details.php?id=<?php echo $row['ID']; ?>"><i class="fas fa-info-circle"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<footer class="footer-area footer--light">
    <div class="footer-big">
        <!-- Contenu du pied de page -->
    </div>
    <div class="mini-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright-text">
                        <p>Copyright © 2023
                            <a href="#">Simplon Burkina</a>. Tous droits réservés. Créé par
                            <a href="#">Razak DAO</a>
                        </p>
                    </div>
                    <div class="go_top">
                        <span class="icon-arrow-up"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
<script>
    $(document).ready(function () {
        var opcionesnav = $('.navoption').length;
        var clickhamb = 0;

        $("#hamburger").click(function () {
            clickhamb = 1;
            var header = $("#myTopnav");
            if (header[0].classList.length == 1) {
                header.addClass("responsive");
                $("header").height((opcionesnav + 1) * 48);
                $(".navlist a:not(.icon)").css("display", "block");
                setTimeout(
                    function () {
                        $(".navlist a:not(.icon)").css("transform", "translateX(0px)");
                    }, 50);

            } else {
                $(".navlist a:not(.icon)").css("transform", "translateX(600px)");
                header.height(48);
                setTimeout(
                    function () {
                        header.removeClass("responsive");
                        header.height(48);
                        $(".navlist a:not(.icon)").css("display", "none");
                    }, 1600);
            }
        });

        $(window).on('resize', function () {
            console.log(clickhamb);
            if (($(window).width() > 600) && (clickhamb == 1)) {
                console.log(clickhamb + "     " + $(window).width());
                $("#myTopnav").height(48);
                $(".navlist a:not(.icon)").css("display", "block");
                setTimeout(
                    function () {
                        $(".navlist a:not(.icon)").css("transform", "translateX(0px)");
                    }, 500);
            }
        });
    });
</script>

</body>
</html>
