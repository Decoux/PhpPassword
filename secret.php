<?php
  $password = htmlspecialchars($_POST['password']);
  $myArray = ['kangourou'];
  if (empty($password)) {
    echo "Veuillez entrer un mot de passe";
  }
  elseif (in_array($password, $myArray)) {
    echo "Vous pouvais acceder à la page";
  }
  else {
    echo "Le mot de passe n'est pas valide";
  }
 ?>
