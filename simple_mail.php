<?php
$to = "er.harsh.joshi@gmail.com";
$subject = "This is subject";
$message = "Hello Welcome to the College.";
$header = "From:geetanjali_college@yahoo.com\r\n";
if(mail($to,$subject,$message,$header))
{
	echo "Message sent successfully...";
}
else
{
	echo "Message could not be sent...";
}
?>