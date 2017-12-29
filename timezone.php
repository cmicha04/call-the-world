<html>
<head>
<title>timezone</title>
	<?php

		if (isset($_POST['Submit1'])){

			$result =$_POST['secondtimezone'];
			$result_explode = explode('|', $result);
			
	

			$userinput = $_POST['userinput'];

			$firsttimezone = $_POST['firsttimezone'];
			$firsttimezone_explode = explode('|', $firsttimezone);

			$secondtimezone = $_POST['secondtimezone'];
			$secondtimezone_explode = explode('|', $secondtimezone);

			if(($firsttimezone_explode[0]>=1)&&($secondtimezone_explode[0]>0)&&($firsttimezone_explode[0]>$secondtimezone_explode[0]))
			{//if timezone1 is greater than timezone2
				$calculatedtimezonediff=$firsttimezone_explode[0]-$secondtimezone_explode[0];

				$newtimezone=$userinput-$calculatedtimezonediff;

				
			}
			elseif (($firsttimezone_explode[0]>0)&&($secondtimezone_explode[0]>0)&&($secondtimezone_explode[0]>$firsttimezone_explode[0])) {
				//if timezone1 is less than timezone 2
				$calculatedtimezonediff=$secondtimezone_explode[0]-$firsttimezone_explode[0];
				$newtimezone= $userinput+$calculatedtimezonediff;	
				
			}
			elseif (($firsttimezone_explode[0]>0)&&($secondtimezone_explode[0]<0))
			 {
				//if timezone1 is positive and timezone 2 is negative
				$positivetimezone2=$secondtimezone_explode[0]*(-1);
				$calculatedtimezonediff=$firsttimezone_explode[0]+$positivetimezone2;
				$timediff = $userinput+$calculatedtimezonediff;
				$newtimezone=$timediff%12;
			}
			
		
			
			print ($userinput. ' in '.$secondtimezone_explode[1].' is '.$newtimezone.'.');
		}



		?>

</head>
<body>

<FORM NAME ="form1" METHOD ="POST" ACTION = "timezone.php">

	
<!--user inputs the time they want to convert-->
<INPUT TYPE = "TEXT" VALUE ="<?php print$userinput ; ?>" NAME="userinput">

in

<!--user inputs the timezone locatioon they want to convert from-->
<!--<INPUT TYPE = "TEXT" VALUE ="firsttimezone" NAME="firsttimezone">-->

<select name="firsttimezone">
	<option timeZoneId="69" gmtAdjustment="GMT+09:00" useDaylightTime="0" value="9|Tokyo">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
	<option timeZoneId="75" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10|Sydney">(GMT+10:00) Canberra, Melbourne, Sydney</option>
	<option timeZoneId="82" gmtAdjustment="GMT+13:00" useDaylightTime="0" value="13|Hawaii">(GMT+13:00) Nuku'alofa</option>
</select>

is what time in 

<!--user inputs the timezone locatioon they want to convert to-->
<!--<INPUT TYPE = "TEXT" VALUE ="secondtimezone" NAME="secondtimezone">-->

<select name="secondtimezone">
	<option timeZoneId="24" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3|Greenland">(GMT-03:00) Greenland</option>
	
	<option timeZoneId="82" gmtAdjustment="GMT+13:00" useDaylightTime="0" value="13|Hawaii">(GMT+13:00) Nuku'alofa</option>
</select>
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Submit">

</FORM>


</body>
</html>