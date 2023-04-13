<?php
//connexion a la base de donnees avec Mysql
$id=@mysqli_connect("localhost","root","root","personne") or die("Erreur de connexion");
mysqli_query($id,"insert into personne(name,object,Email,comment) values('DorineNgabdoh','chien','ngabdohdorine@gmail.com','i like it')")
?>
