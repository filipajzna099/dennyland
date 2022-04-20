<!DOCTYPE html>
<html lang="en-US">
<head>
<script async src="https://arc.io/widget.min.js#n5cNZUnP"></script>
<link rel="shortcut icon" href="favicon.png" type="image/x-icon"/>
	<title>Dennyland</title>
	<meta charset="utf-8" />
</head>
<link rel="stylesheet" href="css/main.css" type="text/css" />
<body id="index" class="home">
	
	<header id="banner" class="body">
		<h1><a href="#">__Dennyland__ <strong>Dennyland - česko-slovenský minecraft server v roce <ins>2021</ins></strong></a></h1>
		<nav><ul>
			<li><a href="index.php">Domů</a></li>
			<li><a href="pravidla.php">Pravidla</a></li>
			<li><a href="ateam.php">A-Team</a></li>
		</ul></nav>
	</header>

<section id="content" class="body">
<form method="post">
      <input type="text" name="firstName" placeholder="Jméno" required autocomplete="off"> <br>
      <input type="text" name="lastName" placeholder="Příjmení" required autocomplete="off"> <br>
      <input type="text" name="Text" placeholder="Text" required autocomplete="off"> <br>
      <input type="submit" name="submit" value="Submit">
    </form>
</section>

<?php
if(isset($_POST['submit'])){
$firstName = "Jméno:".$_POST['firstName']."
";
$lastName = "Příjmení:".$_POST['lastName']."
";
$Text = "Text:".$_POST['Text']."
";

$file=fopen("data.txt", "a");
fwrite($file, $firstName);
fwrite($file, $lastName);
fwrite($file, $Text);
fclose($file);
}
?>