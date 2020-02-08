<html>
<head>
<style type="text/css">
  td,th {
    border: 1px solid rgb(190, 190, 190);
    padding: 10px;
  }
  td {
    text-align: center;
  }
  tr:nth-child(even) {
    background-color: #eee;
  }
  table {
    border-collapse: collapse;
    border: 2px solid rgb(200, 200, 200);
    letter-spacing: 1px;
    font-family: sans-serif;
    font-size: .8rem;
  }
</style>
</head>
<body>

<?php
require './vendor/autoload.php';
use \Twilio\Rest\Client;
$client = new Client( 'AC84c72ff67b6ae34f60d6c7e34570f9e7','2e814380264ad4c3bb0eba73274e442b');


  include "SimpleXLSX.php";
        try {
        $client->calls->create(
            '+923496627332', // The visitor's phone number
            '+17652744760', // A Twilio number in your account
            array(
                "url" => 'https://3f906bb1.ngrok.io/outboundivr/recordivr/sellhouse.php'
            )
        );
    } catch (Exception $e) {
        // Failed calls will throw
        echo $e;
    }
  echo '<h1>Tiobe Index August 2019</h1><pre>';
  if ( $xlsx = SimpleXLSX::parse('Book1.xlsx') ) {
    echo '<table><tbody>';
    $i = 0;
    $x = 0;
    foreach ($xlsx->rows() as $elt) {
      if ($i == 0) {
        echo "<tr><th>" . $elt[0] . "</th><th>" . $elt[1] . "</th></tr>";
      } else {
        echo "<tr><td>" . $elt[0] . "</td><td>" . $elt[1] . "</td></tr>";
       
      } 
      $x++;     
      $i++;
    }
    echo "</tbody></table>";
  } else {
    echo SimpleXLSX::parseError();
  }
?>

</body>
</html>	