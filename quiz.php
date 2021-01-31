<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> Quiz </title></br>
	<h2 align='center'> Welcome to Happy Quiz! </h2>
</head>
<body>
	<style>
		body{
			background-image: url(background_quiz.png); 
    			background-position: top;
			background-repeat:no-repeat;
			background-size: cover;			
		}
	</style>

	<form action="results.php" method="get">
    	<p align='center' style="font-size: 18px;"> Enter your name: <input type=text name="inputName" required></p>
	<h3 align='center'> Let's start a general knowledge quiz now! </h3></br>

	<div style="padding-left:200px;">
	
	<!-- Use checkboxes for question 1 -->
	<h3> 1. What used to advertise its products as 'Fingerlickin' good'? </h3>
	<input type="checkbox" name="q1[]" value="Kentucky Fried Chicken (KFC)"> Kentucky Fried Chicken (KFC) </br>
	<input type="checkbox" name="q1[]" value="Pizza Hut"> Pizza Hut </br>
	<input type="checkbox" name="q1[]" value="McDonalds"> McDonalds </br>
	<input type="checkbox" name="q1[]" value="Burger King"> Burger King </br></br>

	<!-- Use radio buttons for question 2 -->
	<h3> 2. How many roses and of which colour is the traditional romantic gift?</h3>
	<input type="radio" name="q2[]" value="7, Pink" > 7, Pink </br>
	<input type="radio" name="q2[]" value="3, Yellow" > 3, Yellow </br>
	<input type="radio" name="q2[]" value="12, Red" > 12, Red </br>
	<input type="radio" name="q2[]" value="9, White" > 9, White </br></br>
	
	<!-- Use drop dwons for question 3 -->
	<h3> 3. Pampers were first introduced in the United States. What is the American word for a 'nappy'?</h3>
 	<select name="q3[]">
   	<option value=""> </option>
    	<option value="Diaper"> Diaper </option>
    	<option value="Napkin"> Napkin </option>
    	<option value="Serviette"> Serviette </option>
   	 <option value="Warmy"> Warmy </option>
 	 </select></br> </br>

	<!-- Use radio buttons for question 4 -->
	<h3> 4. Technically, an elephant's trunk is actually its nose and upper lip. </h3>
	<input type="radio" name="q4" value="True" > True
	<input type="radio" name="q4" value="False" > False </br> </br>

	<!-- Use checkboxes for question 5 -->
	<h3> 5. Besides Brazil, Russia and India, which of the following countries are part of the BRICS? </h3>
	<input type="checkbox" name="q5[]" value="Canada"> Canada</br>
	<input type="checkbox" name="q5[]" value="China"> China </br>
	<input type="checkbox" name="q5[]" value="South Africa"> South Africa </br>
	<input type="checkbox" name="q5[]" value="Singapore"> Singapore </br></br>

	</div></br>

	<p align="center" > <input type=submit value="Submit"  style="font-size: 18px;"></p></br></br>
	</form>
	
</body>
</html>
