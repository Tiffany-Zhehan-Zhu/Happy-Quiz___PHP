<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> Quiz Results </title></br>
</head>
<body>
<center>
	<style>
		body{
			background-image: url(background_result.png); 
    			background-position: top;
			background-repeat:no-repeat;
			background-size: cover;			
		}
	</style>
	<?php
		$userName = $_GET['inputName'];
		$time = date("h:i:s a, F d, Y");
		$totalScore = 0;
		$q1_ans = $_GET ['q1'];
		$q2_ans =$_GET ['q2'][0];
		$q3_ans = $_GET['q3'][0];
		$q4_ans = $_GET['q4'];
		$q5_ans = $_GET['q5'];
	?>
	<h2> <?php echo $userName."'s Quiz Result"; ?> </h2>
	<?php echo "Quiz taken at ".$time; ?></br></br></br>
	
	<!-- Use a table to display the quiz result -->
	<table border = "1" cellpadding="8">
		<tr>
			<th> No. </th>
			<th> Questions </th>
			<th> Correct Answer </th>
			<th> Your Answer </th>
			<th> Correct or not </th>
			<th> Score </th>
		</tr>
		<tr>
			<td style="text-align:center"> 1  </td>
			<td> <a> What used to advertise its products as 'Fingerlickin' good'? </a></td>
			<td> <a> Kentucky Fried Chicken (KFC) </a></td>
			<td> <a> <?php
				foreach ($q1_ans as $q1_an){ 
					print_r($q1_an."<br>"); } 
			?></a></td>
			<td style="text-align:center"> <a> <?php
				if ( $q1_ans[0] == "Kentucky Fried Chicken (KFC)" && $q1_ans[1] == "" &&  $q1_ans[2] == "" &&  $q1_ans[3] == "" ){
					echo "Correct";					
				}else{
					echo "Incorrect";
				}
			?></a></td>
			<td style="text-align:center"> <a> <?php
				if ( $_GET ['q1'][0] == "Kentucky Fried Chicken (KFC)" &&  $_GET ['q1'][1] == "" &&  $_GET ['q1'][2] == "" &&  $_GET ['q1'][3] == "" ){
					echo "20";
					$totalScore = $totalScore + 20;
				}else{
					echo "0";
				}
			?></a></td>
		</tr>
		<tr>
			<td style="text-align:center"> 2  </td>
			<td> <a> How many roses and of which colour is the traditional romantic gift? </a></td>
			<td> <a> 12, Red </a></td>
			<td> <a> <?php echo $q2_ans; ?></a></td>
			<td style="text-align:center"> <a> <?php
				if ($q2_ans == "12, Red"){
					echo "Correct";					
				}else{
					echo "Incorrect";
				}
			?></a></td>
			<td style="text-align:center"> <a> <?php
				if ($q2_ans == "12, Red"){
					echo "20";
					$totalScore = $totalScore + 20;
				}else{
					echo "0";
				}
			?></a></td>
		</tr>
		<tr>
			<td style="text-align:center"> 3 </td>
			<td> Pampers were first introduced in the United States. What is the American word for a 'nappy'?  </td>
			<td> <a> Diaper </a></td>
			<td> <a> <?php echo $q3_ans; ?></a></td>
			<td style="text-align:center"> <a> <?php
				if ($q3_ans == "Diaper"){
					echo "Correct";					
				}else{
					echo "Incorrect";
				}
			?></a></td>
			<td style="text-align:center"> <a> <?php
				if ($q3_ans == "Diaper"){
					echo "20";
					$totalScore = $totalScore + 20;
				}else{
					echo "0";
				}
			?></a></td>
		</tr>
		<tr>
			<td style="text-align:center"> 4 </td>
			<td> Technically, an elephant's trunk is actually its nose and upper lip. </td>
			<td> <a> True </a></td>
			<td> <a> <?php echo $q4_ans; ?></a></td>
			<td style="text-align:center"> <a> <?php
				if ($q4_ans == "True"){
					echo "Correct";					
				}else{
					echo "Incorrect";
				}
			?></a></td>
			<td style="text-align:center"> <a> <?php
				if ($q4_ans == "True"){
					echo "20";
					$totalScore = $totalScore + 20;
				}else{
					echo "0";
				}
			?></a></td>		
		</tr>
		<tr>
			<td style="text-align:center"> 5 </td>
			<td> <a> Which of the following countries are part of the BRICS? </a></td>
			<td> <a> China</br> South Africa </a></td>
			<td> <a> <?php
				foreach ($q5_ans as $q5_an){ 
					print_r($q5_an."<br>"); } 
			?></a></td>
			<td style="text-align:center"> <a> <?php
				if ( $q5_ans[0] == "China" &&  $q5_ans[1] == "South Africa" &&  $q5_ans[2] == "" &&  $q5_ans[3] == "" ){				
					echo "Correct";
				}else{
					echo "Incorrect";
				}
			?></a></td>
			<td style="text-align:center"> <a> <?php
				if ( $_GET ['q5'][0] == "China" &&  $_GET ['q5'][1] == "South Africa" &&  $_GET ['q5'][2] == "" &&  $_GET ['q1'][3] == "" ){	
					echo "20";
					$totalScore = $totalScore + 20;
				}else{
					echo "0";
				}
			?></a></td>
		</tr>
			<th colspan="5" style="text-align:right"> Total Score: </th>
			<th> <?php echo $totalScore; ?> </th>
	</table></br>

	<h2> <?php 
		if ($totalScore >= 60){
			echo "Congrats ".$_GET['inputName'].", your score is ".$totalScore."!"; 
		}else{
			echo "Oops... ".$_GET['inputName'].", your score is ".$totalScore."."; 
		}
	?></h2>
	<form action="quiz.html" >
    	<p align='center'> <input type=submit value="Go back to quiz"> </p>
	</form>
	<form action="http://studentprojects.sis.pitt.edu/fall2016/zhz90/homework.html" >
    	<p align='center'> <input type=submit value="Go back to homework page"> </p>
	</form>

</center>
	
	<!-- Save the result to a text file -->
	<?php
		$f = fopen("userQuizResults.txt", "a");
		$results=$userName.".   ".$time.".   ".$q1_ans[0]." ".$q1_ans[1]." ".$q1_ans[2]." ".$q1_ans[3].".   ".$q2_ans.".   ".$q3_ans.".   ".$q4_ans.".   ".$q5_ans[0]." ".$q5_ans[1]." ".$q5_ans[2]." ".$q5_ans[3].".   ".$totalScore."\n";
		fwrite($f, $results); 
		fclose($f);
	?>

</body>
</html>
