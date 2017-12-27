<html>
<head>
<title>timezone</title>
	<?php

		if (isset($_POST['Submit1'])){

			$result =$_POST['secondtimezone'];
			$result_explode = explode('|', $result);
			
		
			

			$userinput = $_POST['userinput'];
			$firsttimezone = $_POST['firsttimezone'];
			$secondtimezone = $_POST['secondtimezone'];
			
			$calculatedtimezone =$secondtimezone-$firsttimezone;
		
			
			print ($userinput. ' in '.$result_explode[1].' is '.$calculatedtimezone.'.');
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
	<option timeZoneId="82" gmtAdjustment="GMT+13:00" useDaylightTime="0" value="13|Hawaii">(GMT+13:00) Nuku'alofa</option>
</select>

is what time in 

<!--user inputs the timezone locatioon they want to convert to-->
<!--<INPUT TYPE = "TEXT" VALUE ="secondtimezone" NAME="secondtimezone">-->

<select name="secondtimezone">
	<option timeZoneId="75" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10|Sydney">(GMT+10:00) Canberra, Melbourne, Sydney</option>
	<option timeZoneId="76" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10|Hobart">(GMT+10:00) Hobart</option>
</select>
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Submit">

</FORM>


</body>
</html>