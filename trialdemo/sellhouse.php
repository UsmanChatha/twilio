<?php
	
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';
	echo '<Response>';
   echo '<Say>Hi This is usman please leave a message.</Say>';
               echo '<Record maxLength="7"  playBeep="true" action="https://3f906bb1.ngrok.io/outboundivr/sendsms.php"/>';
		echo '</Response>';
?>
