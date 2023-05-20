<style>
	
* {
	background-color: #fffdd0;
	border-color: #000000;
	border-width: 2px;
	color: #000;
}

a {
	background-color: #DCAE96;
}
	
.content {
	margin: 10%;
	background-color: #DCAE96;
	padding: 5px;
	border-style: double;
	border-color: #000000;
	border-width: 2px;
}
.dropbtn {
  background-color: #DCAE96;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #fffdd0;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}


.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}


</style>
<meta name="viewport" content="width=device-width, initial-scale=1" />


<title>Brodie Friesen | ELA Romeo + Juliet Concept Map</title>

<br>
<br>

 <center><div class="dropdown">
  <button class="dropbtn">Characters</button>
  <div class="dropdown-content">
	  <a href="index.php"><b>X</b></a><br><br>
    <a href="index.php?name=juliet">Juliet</a><br><br>
<a href="index.php?name=romeo">Romeo</a><br><br>
<a href="index.php?name=prince">Prince</a><br><br>
<a href="index.php?name=montague">Montague</a><br><br>
<a href="index.php?name=benvolio">Benvolio</a><br><br>
<a href="index.php?name=capulet">Capulet</a><br><br>
<a href="index.php?name=mercutio">Mercutio</a><br><br>
<a href="index.php?name=lcapulet">Lady Capulet</a><br><br>
<a href="index.php?name=nurse">Nurse</a><br><br>
<a href="index.php?name=tybalt">Tybalt</a><br><br>
<a href="index.php?name=paris">Paris</a><br><br>
<a href="index.php?name=friar">Friar Lawrence</a><br><br>
<a href="index.php?name=crabulet">Lady Crabulet</a><br><br>
<a href="index.php?name=montague">Montagru</a><br><br>
  </div></center>
</div> 

<div class="content">


<?php

$name = $_GET['name'];

if(isset($name)) {
	include("people/".$name.".php");
}
else {
	echo "Select a character!";
} ?>
</div>
<br><br><br><br>

<u><i>Developed by Brodie Friesen. Open source and hosted on Github</i></u>
