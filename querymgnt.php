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
		
		<h1>Rejestracja Użytkownika</h1>
			
			<div class="">
			  <label>Imię:</label>
			  <input type="text" class="form-control" name="im" id="imie" required="required" placeholder="Wprowadź imię"/>
			  <label>Nazwisko:</label>
			  <input type="text" class="form-control" name="nazw" id="nazwisko" required="required" placeholder="Wprowadź nazwisko"/>
		  </div>
		  
		  <div class="all-input class="radio"">
			  <label>Płeć:</label>
			  <br><input type="radio" name="sex" id="plec" required="required" value="M" checked>Mężczyzna
			  <br><input type="radio" name="sex" id="plec" required="required" value="K">Kobieta
			</div>
		  
		  <div class="all-input">
			  <label>PESEL:</label>
			  <input type="number" class="form-control" name="pesel" id="pesel" required="required" min="1111111" max="99999999999" placeholder="Wprowadź PESEL">
		  </div>
		  
		  <div class="all-input">
			  <label>Data urodzenia:</label>
			  <input type="date" class="form-control data-style" name="dataur" id="dataurodzenia" required="required" min="1979-01-01" max="2001-01-01" placeholder="RRRR-MM-DD">
			  <label>Miejsce urodzenia:</label>
			  <input type="text" class="form-control" name="miejur" id="miejsceur" required="required" placeholder="Wprowadź miejsce urodzenia"/>
				  <label>Adres zamieszkania:</label>
			  <input type="text" class="form-control" name="adr" id="adres" required="required" placeholder="Wprowadź adres zamieszkania"/>
		  </div>
			
			<div class="all-input">
			  <label>Imię ojca:</label>
			  <input type="text" class="form-control" name="imieo" id="imieojca" required="required" placeholder="Wprowadź imię ojca"/>
			  <label>Imię matki:</label>
			  <input type="text" class="form-control" name="imiem" id="imiematki" required="required" placeholder="Wprowadź imię matki"/>
		  </div>
		  
		  <div class="all-input">
				<label>Email:</label>
			  <input type="email" class="form-control" name="email" id="mail" required="required" placeholder="Wprowadź adres email"/>
			  <label>Telefon: +48</label>
			  <input type="number" class="form-control" name="telefon" id="tel" required="required" min="111111111" max="999999999" placeholder="Wprowadź numer telefon"/>
			  <label>Telefon rodzica: +48</label>
			  <input type="number" class="form-control" name="telr" id="telefonrodzica" required="required" min="111111111" max="999999999" placeholder="Wprowadź telefon rodzica"/>
		  </div>
		  
			  <div class="all-input">
				  <label>Nazwa sekcji:</label>
				  <input type="text" class="form-control" name="sekcja" id="nazwasekcji" required="required" placeholder="Wprowadź sekcję"/>
					  <label>Klasa:</label>
				  <input type="text" class="form-control" name="class" id="klasa" required="required" placeholder="Wprowadź imię klasę"/>
				  <label>Wychowawca:</label>
				  <input type="text" class="form-control" name="wych" id="wychowawca" required="required" placeholder="Wprowadź imię wychowawcę"//>
			</div>
			
				<input class="bottom" type="submit" value="Submit" name="submit"/>
	  </div>
	</form>
 </section>
