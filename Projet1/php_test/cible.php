
<?php
// if (empty($_POST["mail"]))
// {
//  echo "E-mail invalide"."</br>";
// }
// else {
//   echo "E-mail valide GG"."</br>";
// }
//
// if (empty($_POST["telephone"]))
// {
//  echo "telephone invalide"."</br>";
// }
// else {
//   echo "telephone valide GG"."</br>";
// }
//
// if (empty($_POST["nom"]))
// {
//  echo "nom invalide"."</br>";
// }
// else {
//   echo "nom valide GG"."</br>";
// }
//
// if (empty($_POST["age"]))
// {
//  echo "age invalide"."</br>";
// }
// else {
//   echo "age valide GG"."</br>";
// }
//
// if (empty($_POST["prenom"]))
// {
//  echo "prenom invalide"."</br>";
// }
// else {
//   echo "prenom valide GG";
// }
$formulaire = array (
   "mail" => $_POST['mail'],
   "telephone" => $_POST['telephone'],
   "nom" => $_POST['nom'],
   "age" => $_POST['age'],
   "Prenom" => $_POST['prenom'],
 );

 foreach ($formulaire as $key => $value) {
   if($value == ""){
     echo $key .' '. 'erreur<br>';
   }else{
     echo $key .' '.'Good<br>';
   }

 }
?>
