<?php 
    require_once 'config.php'; 
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['phone']))
    {
        $pseudo = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $phone = htmlspecialchars($_POST['phone']);
        $check = $bdd->prepare('SELECT name , email, password FROM member WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();
$email = strtolower($email); 
if($row == 0){ 
if(strlen($name) <= 30){ 
   if(strlen($email) <= 55){ 
if(filter_var($email, FILTER_VALIDATE_EMAIL)){ 
 $insert = $bdd->prepare('INSERT INTO member (name, email, password,phone) VALUES(:name, :email, :password, :phone)');
 $insert->execute(array(
 'name' => $name,
'email' => $email,
'password' => $password,
   'phone' => $phone
  ));
   header('Location:acceuil.php?reg_err=success');
 die();
  }
}else{ header('Location: acceuil.php?reg_err=email'); die();}
  }else{ header('Location: acceuil.php?reg_err=email_length'); die();}
 }else{ header('Location: acceuil.php?reg_err=name_length'); die();}
        }else{ header('Location: acceuil.php?reg_err=already'); die();}
    

?>