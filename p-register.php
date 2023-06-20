
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>inscrir parent</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css"> 
   <link rel="stylesheet" href="Style/style.css">
   <link rel="stylesheet" href="style/bootstrap-5.0.2-dist/css/bootstrap.min.css">

</head>
<body>
<header>

<nav class="navbar navbar-expand-lg navbar-light sticky-md-top bg ">
        <div class="container">
          <a class="navbar-brand FG fw-bold fs-2" href="#">
            <img src="image/ok.png" alt="" height="83px" width="150px">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            
          <li class="nav-item">
                <a class="nav-link kil deux " href="#"> <span class="">BIENVENUE</span>  <span class="fw-bold">SUR LYCEE SAINT JEAN</span> <span class="sadi">APPLICATION </span> </a>
              </li>

            </ul>
          </div>
        </div>
      </nav>

</header>
   
<section class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>s'inscrire</h3>
      <input type="text" placeholder="Nom" class="box" name="name"  required>
      <input type="text"  placeholder="Prénom" class="box" name="name" required>
      <input type="text" placeholder="enfant" class="box" name="name"  required >
      <input type="text"  placeholder="Identifiant" class="box" name="name" required>
      <input type="password"  placeholder="entrer votre mot de passe" class="box" name="pass" required>
      <input type="password"  placeholder="confirmer votre mot de passe" class="box" name="cpass" required>
      <!-- <p>avez vous un compte ? <a href="login.php">se connecter</a></p> -->
      <input type="submit" value="s'inscrire" class="btn" name="submit">
   </form>

</section>



<footer>
<div class="container text-center">
  <div class="row align-items-start">
    <div class="col nb">
      @copyright by LYCEE SAINT JEAN
    </div>
  </div>
</div>
</footer>

</body>
</html>