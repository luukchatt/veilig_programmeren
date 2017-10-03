<?php


if(isset($_REQUEST["email"])
{
	$email = filter_var($_REQUEST["email"], FILTER_SANITIZE_EMAIL);
	$email=substr($email,0,50);// no longer than 50.
	echo "EMAIL: ".$email."<br>"; 
}

   /*Dalí*/
if(isset($_REQUEST["rekeningnummer"]))
   {
	 $rekeningnummer = filter_var($_REQUEST["rekeningnummer"], FILTER_SANITIZE_EMAIL);
	 $rekeningnummer = filter_var($_REQUIST["rekeningnummer"], FILTER_FLAG_STRIP_LOW,);
	 $rekeningnummer 0 =substr($rekeningnummer,0,20);// no longer than 20.
	 echo "Rekeningnummer: " . $rekeningnummer . "<br>";
   }
?>
