<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Title -->
	<title><?php if(isset($pagetitle)) { echo $pagetitle.' - ZenFight'; } else { echo 'ZenFight, le serveur minecraft PVP qui s\'actualise tout le temps'; } ?></title>
	<!-- Links -->
	<link rel="stylesheet" type="text/css" href="css/master.css">
  <!-- JavaScript -->
  <script src="https://kit.fontawesome.com/e139eb0a29.js" crossorigin="anonymous"></script>

</head>
<body>
<nav>

    
  <h4>ZenFight</h4>

  <?php if(!isset($_SESSION['user_connected'])){ ?>
  
  <a href="/register" class="link"><i class="fas fa-user-plus"></i> Inscription</a>
  <a href="/login" class="link"><i class="fas fa-sign-in-alt"></i> Connexion</a>
  
  <?php } else { ?>
  
  <a href="/logout" class="link"><i class="fas fa-sign-in-alt"></i> Déconnexion</a>
  <a href="/edit" class="link"><i class="fas fa-edit"></i> Modifier mon compte</a>
  <a href="/profil?id=<?= $_SESSION['user_id']; ?>" class="link"><i class="fas fa-user"></i> Mon profil public</a>
  
  <?php } ?>

  <a href="/staffs" class="link"><i class="fas fa-user-shield"></i> Equipe</a>
  <a href="/home" class="link"><i class="fas fa-home"></i> Accueil</a>

</nav>

  <main><h1>Erreur 404</h1><hr></main>

</body>
</html>