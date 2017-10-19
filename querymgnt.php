<html>
<!DOCTYPE HTML>
<html lang="pl">
<head>

	<title>Glowna</title>
		
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="css/register.css" rel="stylesheet" type="text/css"/>
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Cabin+Condensed|Dosis|Nunito" rel="stylesheet">

	<!--Javascript-->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	
</head>
<body>
<section>
	<form action="" method="post">
		<div class="container">
	  <label>Imię:</label>
	  <input type="text" name="im" id="imie" required="required" placeholder="Wprowadź imię"/></br /><br />
	  <label>Nazwisko:</label>
	  <input type="text" name="nazw" id="nazwisko" required="required" placeholder="Wprowadź nazwisko"/><br /><br />
	  <label>Płeć:</label></br>
	  <input type="radio" name="sex" id="plec" required="required" value="M" checked>Mężczyzna</br>
	  <input type="radio" name="sex" id="plec" required="required" value="K">Kobieta</br>
	  <label>Data urodzenia:</label>
	  <input type="date" name="dataur" id="dataurodzenia" required="required" min="1979-01-01" max="2001-01-01" placeholder="RRRR-MM-DD"><br>
	  <label>Miejsce urodzenia:</label>
	  <input type="text" name="miejur" id="miejsceur" required="required" placeholder="Wprowadź miejsce urodzenia"/></br /><br />
	  <label>Nazwa sekcji:</label>
	  <input type="text" name="sekcja" id="nazwasekcji" required="required" placeholder="Wprowadź sekcję"/><br /><br />
	  <label>Adres zamieszkania:</label>
	  <input type="text" name="adr" id="adres" required="required" placeholder="Wprowadź adres zamieszkania"/><br /><br />
	  <label>Imię ojca:</label>
	  <input type="text" name="imieo" id="imieojca" required="required" placeholder="Wprowadź imię ojca"/><br /><br />
	  <label>Imię matki:</label>
	  <input type="text" name="imiem" id="imiematki" required="required" placeholder="Wprowadź imię matki"/></br /><br />
	  <label>Telefon: +48</label>
	  <input type="number" name="telefon" id="tel" required="required" min="111111111" max="999999999" placeholder="Wprowadź numer telefon"/><br /><br />
	  <label>Telefon rodzica: +48</label>
	  <input type="number" name="telr" id="telefonrodzica" required="required" min="111111111" max="999999999" placeholder="Wprowadź telefon rodzica"/></br /><br />
	  <label>Email:</label>
	  <input type="email" name="email" id="mail" required="required" placeholder="Wprowadź adres email"/></br /><br />
	  <label>PESEL:</label>
	  <input type="number" name="pesel" id="pesel" required="required" min="1111111" max="99999999999" placeholder="Wprowadź PESEL"/><br /><br />
	  <label>Klasa:</label>
	  <input type="text" name="class" id="klasa" required="required" placeholder="Wprowadź imię klasę"/></br /><br />
	  <label>Wychowawca:</label>
	  <input type="text" name="wych" id="wychowawca" required="required" placeholder="Wprowadź imię wychowawcę"/></br /><br />
	  
	  <input type="submit" value="Submit" name="submit"/><br />
	  
	  </div>
  </section>
</form>

<?php

if(isset($_POST["submit"])){
try {

  $host = 'localhost';
  $db_user = 'root';
  $db_password = '';
  $db_name = 'orkiestra';

 $db = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8",$db_user, $db_password);
 $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $sql = "INSERT INTO czlonkowie (imie, nazwisko, plec, data_ur, miejsce_ur, nazwa_sekcji, adres, imie_ojca, imie_matki, tel, tel_r, mail, PESEL, klasa, wychowawca) VALUES ('".$_POST["im"]."','".$_POST["nazw"]."','".$_POST["sex"]."','".$_POST["dataur"]."','".$_POST["miejur"]."','".$_POST["sekcja"]."','".$_POST["adr"]."','".$_POST["imieo"]."','".$_POST["imiem"]."','".$_POST["telefon"]."','".$_POST["telr"]."','".$_POST["email"]."','".$_POST["pesel"]."','".$_POST["class"]."','".$_POST["wych"]."')";
 if($db->query($sql)){
   echo "dodano członka";
 }
 else {
   echo "nie dodano :(";
      }
$db = null;
}
 
 catch(PDOException $e) {
  echo $e->getMessage();
  }
}
 ?>