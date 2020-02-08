<?php
header('Content-type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8"?>'; 
echo '<Response></Response>'; // Place the desired response (if any) here.

$msg=$_REQUEST['Body'];
$to=$_REQUEST['To'];
$from=$_REQUEST['From'];

require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;


$client = new Client( 'AC84c72ff67b6ae34f60d6c7e34570f9e7','2e814380264ad4c3bb0eba73274e442b');


if($mesg =="0912")
{
$message="This is a message from 0912";
$client->messages->create(
    // Where to send a text message (your cell phone?)
    $to,
    array(
        'from' => $from,
        'body' => $message
    )
);
}
elseif($mesg =="0821")
{

$message="This is a message from 0821";
$client->messages->create(
    // Where to send a text message (your cell phone?)
    $to,
    array(
        'from' => $from,
        'body' => $message
    )
);
}
elseif($mesg =="0822")
{

$message="This is a message from 0822";
$client->messages->create(
    // Where to send a text message (your cell phone?)
    $to,
    array(
        'from' => $from,
        'body' => $message
    )
);
}
  


$client->messages->create(
    // Where to send a text message (your cell phone?)
    $to,
    array(
        'from' => $from,
        'body' => $message
    )
);

?>