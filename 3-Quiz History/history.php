<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> History </title>
	<h2 align='center'> Quiz History </h2>
</head>
<body>
<center>
	<style>
		body{
			background-image: url(background_history.png); 
    			background-position: top;
			background-repeat:no-repeat;
			background-size: cover;			
		}
	</style>
	<table border = "1" cellpadding="8">
		<tr>
			<th> User Name </th>
			<th> Quiz Taken Time </th>
			<th> Answer 1 </th>
			<th> Answer 2 </th>
			<th> Answer 3 </th>
			<th> Answer 4 </th>
			<th> Answer 5 </th>
			<th> Total Score </th>
		</tr>

	<!-- Use a table to display the quiz history -->
	<?php
		$file = file("userQuizResults.txt");
 		for($i=0; $i < count($file); $i++){
			$line= explode(". ", $file[$i]);
        			echo "<tr>";
       			 foreach ($line as $cell) {
                				echo "<td>" . htmlspecialchars($cell) . "</td>";	
        			}
       			 echo "</tr>\n";
		}
		fclose($f);
	?>
	</table></br>

	<form action="http://studentprojects.sis.pitt.edu/fall2016/zhz90/homework.html" >
    	<p align='center'> <input type=submit value="Go back to homework page" style="font-size: 18px;"> </p>
	</form>
</center>
</body>
</html>
