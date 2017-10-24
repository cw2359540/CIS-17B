<html>
<body>
<head><center><h1>Survey</h1></center></head>
<p>Category-Priority-Number</p>
<p>Question</p>

<?php
$title = "Survey";
echo "<title>$title</title>";
if (isset ($_POST['cmdSubmit'])) {
  $name = $_POST['answer'];

  $q1 =  $_POST['q1'];
  $q2 = $_POST['q2'];
  $q3 =  $_POST['q3'];
  $q4 =  $_POST['q4'];
  $q5 =  $_POST['q5'];
  $q6 =  $_POST['q6'];
  $q7 =  $_POST['q7'];
  $name11 = $_POST['answer2'];
  $name12 = $_POST['answer3'];
  $name25= $_POST['answer4'];

}
$score = 0;

//condition statement for scoring:
//$question is the question that is answered item will appear
// the only answered 
	
	if ($q1 == "1 and O") {
	  	$ans1 =  "<img src="."'images/check.jpg'"."/>";
	  	$question1 ="If your Raspberry Pi touch screen is upside-down on the case what is best file for you edit? &nbsp;&nbsp;&nbsp; ";
		$score1 = 1;}
	 elseif ($q1 == "2 and 0"){ $ans1 ="<img src="."'images/wrong.jpg'"."/>"; 
	  	$question1 ="If your Raspberry Pi touch screen is upside-down on the case what is best file for you edit? &nbsp;&nbsp;&nbsp; ";
	 	$score1 = 0;}
	 elseif ($q1 == "1 to 9"){ $ans1 = "<img src="."'images/wrong.jpg'"."/>";
	   	$question1 ="If your Raspberry Pi touch screen is upside-down on the case what is best file for you edit? &nbsp;&nbsp;&nbsp; "; 
	 	$score1 = 0;}
	 elseif ($q1 == ""){ $ans1 = ""; 
	   	$score1 = 0;
	}
	
	
	if ($q2 == "B. Chrome") {
		$ans2 =  "<img src="."'images/check.jpg'"."/>";
		$question2 = "What browser is best for you to use? &nbsp;&nbsp;&nbsp; ";
	 	$score2 =1;}
	 elseif ($q2 == "A.	FireFox"){ $ans2 = "<img src="."'images/wrong.jpg'"."/>";
	 	$question2 = "What browser is best for you to use? &nbsp;&nbsp;&nbsp; ";
	 	$score2 =0; }
	 elseif ($q2 == "C.	Opera"){ $ans2 = "<img src="."'images/wrong.jpg'"."/>";
	  	$question2 = "What browser is best for you to use? &nbsp;&nbsp;&nbsp; ";
	 	$score2 =0; }
	 elseif ($q2 == "D.	Safari")$ans2 = "<img src="."'images/wrong.jpg'"."/>";
	  	$question2 = "What browser is best for you to use? &nbsp;&nbsp;&nbsp; ";
	  	$score2=0;
	elseif ($q2 == "E. Internet Explorer"){ $ans2 = "";
	  	$question2 = "";
	  	$score2=0;
	}
	
	
	if ($q3 == "C. lcd_rotate=90") {
		$ans3 =  "<img src="."'images/check.jpg'"."/>";
		$question3 = "What is the best code you type to make the Raspberry Pi touch screen show right side up on the case? &nbsp;&nbsp;&nbsp; "; 
		$score3 = 1;}
	 elseif ($q3 == "A.	screen=rightsideup"){ $ans3 = "<img src="."'images/wrong.jpg'"."/>";
	 	$question3 = "What is the best code you type to make the Raspberry Pi touch screen show right side up on the case? &nbsp;&nbsp;&nbsp; "; 
	 	$score3 = 0; }
	 elseif ($q3 == "B.	lcd_rotate=180"){ $ans3 = "<img src="."'images/wrong.jpg'"."/>"; 
	   	$question3 = "What is the best code you type to make the Raspberry Pi touch screen show right side up on the case? &nbsp;&nbsp;&nbsp; "; 
	 	$score3 = 0; }
	 elseif ($q3 == "D.	lcd_rotate=2"){ $ans3 = "<img src="."'images/wrong.jpg'"."/>"; 
	   	$question3 = "What is the best code you type to make the Raspberry Pi touch screen show right side up on the case? &nbsp;&nbsp;&nbsp; "; 
	 	$score3 = 0; }
	 elseif ($q3 == "E.	lcd_rotate=4"){ $ans3 = "";
	   	$question3 = ""; 
		$score3 = 0;
	}
	
	
	if ($q4 == "B. sudo nano /boot/config.txt") {
		  $ans4 =  "<img src="."'images/check.jpg'"."/>";
		  $question4 ="What command is the best to edit text file for Raspberry Pi touch screen? &nbsp;&nbsp;&nbsp; ";
		  $score4 = 1;}
		elseif ($q4 == "A. edit /boot/ipconfig/txt"){ $ans4 = "<img src="."'images/wrong.jpg'"."/>";  
			$question4 ="What command is the best to edit text file for Raspberry Pi touch screen? &nbsp;&nbsp;&nbsp; ";
			$score4 = 0;}
		elseif ($q4 == "C. edith nano /boot/screen.txt"){ $ans4 = "<img src="."'images/wrong.jpg'"."/>"; 
			$question4 ="What command is the best to edit text file for Raspberry Pi touch screen? &nbsp;&nbsp;&nbsp; "; 
			$score4 = 0;}
		elseif ($q4 == "D. sudo nano boot /screen.txt"){ $ans4 = "<img src="."'images/wrong.jpg'"."/>";  
			 $question4 ="What command is the best to edit text file for Raspberry Pi touch screen? &nbsp;&nbsp;&nbsp; ";
			 $score4 = 0;}
	  elseif ($q4 == "E. sudo nano edit /boot/screen.txt"){ $ans4 = "";
			$score5 = 0;
	}
	
	if ($q5 == "A.	13 inch laptop") {
		$ans5 =  "<img src="."'images/check.jpg'"."/>";
		$question5 = "What is better to see the Raspberry Pi? &nbsp;&nbsp;&nbsp; ";
	 	$score5 =1;}
	 elseif ($q5 == "B.	5 inch touch screen"){ $ans5 = "<img src="."'images/wrong.jpg'"."/>";
	 	$question5 = "What is better to see the Raspberry Pi? &nbsp;&nbsp;&nbsp; ";
	 	$score5 =0; }
	 elseif ($q5 == "C.	19 inch monitor"){ $ans5 ="<img src="."'images/wrong.jpg'"."/>" ;
	  	$question5 = "What is better to see the Raspberry Pi? &nbsp;&nbsp;&nbsp; ";
	 	$score5 =0; }
	 elseif ($q5 == "D.	40 inch TV"){ $ans5 = "";
	  	$score5 =0; 
	}
	
	if ($q6 == "A.	Raspberry Pi Model A+") {
		$ans6 = "<img src="."'images/check.jpg'"."/>";
		$question6 = "What is your favorite raspberry Pi? &nbsp;&nbsp;&nbsp; ";
	 	$score6 =1;}
	 elseif ($q6 == "B.	Raspberry Pi Model B+"){ $ans6 = "<img src="."'images/wrong.jpg'"."/>";
	 	$question6 = "What is your favorite raspberry Pi? &nbsp;&nbsp;&nbsp; ";
	 	$score6 =0; }
	 elseif ($q6 == "C.	Raspberry Pi 2 Model B"){ $ans6 = "<img src="."'images/wrong.jpg'"."/>";
	  	$question6 = "What is your favorite raspberry Pi? &nbsp;&nbsp;&nbsp; ";
	 	$score6 =0; }
		elseif ($q6 == "D.	Raspberry Pi 3 Model B"){ $ans6 = "<img src="."'images/wrong.jpg'"."/>";
	  	$question6 = "What is your favorite raspberry Pi? &nbsp;&nbsp;&nbsp; ";
	 	$score6 =0; }
		elseif ($q6 == "E.	Raspberry Pi Zero"){ $ans6 = "<img src="."'images/wrong.jpg'"."/>";
	  	$question6 = "What is your favorite raspberry Pi? &nbsp;&nbsp;&nbsp; ";
	 	$score6 =0; }
	 elseif ($q6 == ""){ $ans6 = "";
	  	$question6 = "";
	  	$score6 =0; 
	}
	
	if ($q7 == "D.	lcd_rotate=2") {
		$ans7 = "<img src="."'images/check.jpg'"."/>";
		$question = "What is the best code you type to make the Raspberry Pi touch screen show right side up on the case? &nbsp;&nbsp;&nbsp; ";
	 	$score7 =1;}
	 elseif ($q7 == "A.	screen=rightsideup"){ $ans7 = "<img src="."'images/wrong.jpg'"."/>";
	 	$question7 = "What is the best code you type to make the Raspberry Pi touch screen show right side up on the case? &nbsp;&nbsp;&nbsp; ";
	 	$score7 =0; }
	 elseif ($q7 == "B.	lcd_rotate=180"){ $ans7 = "<img src="."'images/wrong.jpg'"."/>";
	  	$question7 = "What is the best code you type to make the Raspberry Pi touch screen show right side up on the case? &nbsp;&nbsp;&nbsp; ";
	 	$score7 =0; }
		elseif ($q7 == "C.	lcd_rotate=90"){ $ans7 = "<img src="."'images/wrong.jpg'"."/>";
	  	$question7 = "What is the best code you type to make the Raspberry Pi touch screen show right side up on the case? &nbsp;&nbsp;&nbsp; ";
	 	$score7 =0; }
	 elseif ($q7 == "E.	lcd_rotate=4"){ $ans7 = "";
	  	$question7 = "";
	  	$score7 =0; 
	}
	
	if ($q8 == "B.	sudo nano /boot/config.txt") {
		$ans8 = "<img src="."'images/check.jpg'"."/>";
		$question = "What command is the best to edit text file for Raspberry Pi touch screen? &nbsp;&nbsp;&nbsp; ";
	 	$score8 =1;}
	 elseif ($q8 == "A.	edit /boot/ipconfig/txt"){ $ans8 = "<img src="."'images/wrong.jpg'"."/>";
	 	$question8 = "What command is the best to edit text file for Raspberry Pi touch screen? &nbsp;&nbsp;&nbsp; ";
	 	$score8 =0; }
	 elseif ($q8 == "C.	edith nano /boot/screen.txt"){ $ans8 = "<img src="."'images/wrong.jpg'"."/>";
	  	$question8 = "What command is the best to edit text file for Raspberry Pi touch screen? &nbsp;&nbsp;&nbsp; ";
	 	$score8 =0; }
		elseif ($q8 == "D.	sudo nano boot /screen.txt"){ $ans8 = "<img src="."'images/wrong.jpg'"."/>";
	  	$question8 = "What command is the best to edit text file for Raspberry Pi touch screen? &nbsp;&nbsp;&nbsp; ";
	 	$score8 =0; }
	 elseif ($q8 == "E.	sudo nano edit /boot/screen.txt"){ $ans8 = "";
	  	$question8 = "";
	  	$score8 =0; 
	}
	
	
// code to generate the total score..... n_n
		$total = $score + $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8;
{

echo<<<EOT
<p> <br><table  width = "75%"  border="0" align ="default">
		<tr>
			<td>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td><table border="0" align ="default">
				<tr>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td><font face = "georgia" size ="4" color= "blue"><u><b>QUESTION</b></u></font></td>
					<td width = "230"><font face = "georgia" size ="4" color= "blue"><b><u>Your answers are: </u></b></font></td>
					<td><font face = "georgia" size ="4" color= "blue"><b><u>Results</u></b></font></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td><font face ="georgia" size ="3">$question</font> </td>
					<td><b>$name</b> </td>
					<td align ="center"> <font face ="georgia" size ="6" color= "green"><b>$ans</b></font></td>
				</tr>
				<tr>
					<td><font face ="georgia" size ="3">$question1</font> </td>
					<td><b>$q1 </b></td>
					<td align ="center">  <font face ="georgia" size ="6" color= "green"><b>$ans1</b></font></td>
				</tr>
				<tr>
					<td><font face ="georgia" size ="3">$question2</font> </td>
					<td><b>$q2 </b> </td>
					<td align ="center">     <font face ="georgia" size ="6" color= "green"><b>$ans2</b></font></td>
				</tr>
				<tr>
					<td><font face ="georgia" size ="3">$question3</font> </td>
					<td><b>$q3 </b> </td>
					<td align ="center">  <font face ="georgia" size ="6" color= "green"><b>$ans3</b></font></td>
				</tr>
				<tr>
					<td><font face ="georgia" size ="3">$question4</font> </td>
					<td><b>$q4 </b> </td>
					<td align ="center">   <font face ="georgia" size ="6" color= "green"><b>$ans4</b></font></td>
				</tr>
				<tr>
					<td><font face ="georgia" size ="3">$question5</font> </td>
					<td><b>$q5 </b> </td>
					<td align ="center">   <font face ="georgia" size ="6" color= "green"><b>$ans5</b></font></td>
				</tr>
				<tr>
					<td> <font face ="georgia" size ="3">$question6</font> </td>
					<td><b>$q6 </b> </td>
					<td align ="center">   <font face ="georgia" size ="6" color= "green"><b>$ans6</b></font></td>
				</tr>
				<tr>
					<td> <font face ="georgia" size ="3">$question7</font> </td>
					<td><b>$q7 </b> </td>
					<td align ="center">   <font face ="georgia" size ="6" color= "green"><b>$ans7</b></font></td>
				</tr>
				<tr>
					
					<td align ="center">   <font face ="georgia" size ="6" color= "green"><b>$ans25</b></font></td>
				</tr>
				<tr><td>&nbsp;&nbsp;&nbsp;</td></tr>
				<tr><td>&nbsp;&nbsp;&nbsp;</td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr  ><td  colspan ="3" align ="center" ><font face = "georgia" size ="4" color= "blue"><b>Your score is:  $total</b></font></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
			</table>
		</td>
	</tr>
</table>

EOT;

}

?>
</body>
</html>
