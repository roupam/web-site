<?php

	$iph = $_GET['i'];
	$score = $_GET['s'];
	
	echo "<form action=write.php method=POST>";
	echo "<big>Please enter the following details<br>";
	echo "Do remember that you can enter this form ONLY ONCE before or on 23:59:59 hours Dec 31, 2009 GMT<br>";
	echo "Multiple submissions, or submissions on or after 00:00:00 Jan 1, 2010 GMT will not be accepted</big>";
	echo "<hr>";
	echo "Please enter correct details and verify it before pressing submit<br>";
	echo "Enter your name: <input type=text name=text1><br>";
	echo "Enter your email: <input type=text name=text2>";
	echo "<input type=hidden name=iph value=$iph>";
	echo "<input type=hidden name=score value=$score><br>";
	echo "Your score is: ";
	echo "$score<br><hr>";
	echo "By pressing submit you agree with the TERMS AND CONDITIONS of this contest given below<br>";
	echo "<input type=submit value=\"Submit Form\">";
	echo "</form>";
	echo "<hr><big>TERMS AND CONDITIONS:</big><br>";
	echo "<table border=0 width=600px cellspacing=0><tr><td><small>This contest is only open for people, who are not in anyway is acquainted or related to the author of Finger-o-batics. The prize money distribution for the highest scorer will be as follows:";
	echo "\$0 if less than 100,000 copies are sold.";
	echo "\$10,000 if more than or equal to 100,000 copies are sold but less than 1,000,000 copies are sold.";
	echo "\$100,000 if more than or equal to 1,000,000 copies are sold but less than 10,000,000 copies are sold.";
	echo "\$1,000,000 if more than 10,000,000 million copies are sold.";
	echo "The time of score submission ends on 31st December 2009 23:59:59 hours GMT";
	echo "The final results shall be declared on 15th Jan in this website.";
	echo "In case of multiple winners the prize money will go to that one random person , who will be selected by a computer program. The source code of that program will never be disclosed. The judge's decision is final and binding.</small></td></tr></table>";

?>